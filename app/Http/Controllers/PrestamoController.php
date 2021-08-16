<?php

namespace App\Http\Controllers;

use App\User;
use App\Prestamo;
use Carbon\Carbon;
use App\licenciatura;
use App\PrestamoImage;
use Illuminate\Http\Request;
use App\Exports\PrestamoExport;
use App\Exports\PrestamoExportView;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StorePrestamoPost;

// sfzzckmefxnsurac

class PrestamoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol.user');
    }

    //-------------------------------PDF-------------------------------------------------------------
    
    public function exportPDF(){
        $today = Carbon::now()->timezone('America/Mexico_City')->format('d/m/Y');
        $prestamos = Prestamo::all();

        $pdf = \PDF::loadView('dashboard.pdf.exportPDF', compact('prestamos', 'today'));
        return $pdf->download('prestamos.pdf');
    }
//---------------------------Excel-----------------------------
    public function export(){
        return Excel::download(new PrestamoExport, 'prestamos.xlsx');
    }
   
//--------------------------------------------------------------------------------------------

    public function prestamoall(Prestamo $prestamo, Request $request){

        $prestamos = Prestamo::with('licenciatura')
        ->orderBy('created_at', request('created_at', 'DESC'));

        if($request->has('search')){
            $prestamos = $prestamos->where('nombre', 'like', '%'.request('search').'%');
        }

        $prestamos = $prestamos->paginate(10);

        return view('dashboard.prestamo.prestamoall', ['prestamos' => $prestamos]);
    }

    
    public function index(User $user,  Request $request)
    {
        $prestamos = Prestamo::with('licenciatura')
        ->orderBy('created_at', request('created_at', 'DESC'))
        ->where('activo', '=', '1');

        if($request->has('search')){
            $prestamos = $prestamos->where('nombre', 'like', '%'.request('search').'%');
        }

        $prestamos = $prestamos->paginate(10);

        return view('dashboard.prestamo.index', ['prestamos' => $prestamos]);
    }

    
    public function create()
    {
        $licenciaturas = licenciatura::pluck('id', 'nombre');

        return view("dashboard.prestamo.create", ['prestamo' => new Prestamo(), 'licenciaturas' => $licenciaturas ]);
    }

    public function proccess(Prestamo $prestamo){

        if($prestamo->activo == '1'){
            $prestamo->activo = '0';
        }else{
            $prestamo->activo = '1';
        }
        $prestamo->save();

        return response()->json($prestamo->activo);
    }

   
    public function store(StorePrestamoPost $request)
    {
        
        Prestamo::create($request->validated());

        return back()->with('status', 'Prestamo registrado con exito!');
    }

    
    //--Coneccion directa añ prestamo y automaticamente devuelve un prestamo con sus datos--------
    public function show(Prestamo $prestamo)
    {
        // $prestamo = Prestamo::findOrFail($id);

            return view('dashboard.prestamo.show', ['prestamo' => $prestamo]);
    }

    
    public function edit(Prestamo $prestamo)
    {

        $licenciaturas = licenciatura::pluck('id', 'nombre');

        // $prestamo->imagen->image;

        return view('dashboard.prestamo.edit', [
            'prestamo' => $prestamo, 
            'licenciaturas' => $licenciaturas
        ]);
    }

   
    public function update(StorePrestamoPost $request, Prestamo $prestamo)
    {
        $prestamo->update($request->validated());

        return back()->with('status', 'Prestamo actualizado con exito!');
    }

    
    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();

        return back()->with('status', 'Prestamo eliminado con exito!');
    }

    public function imagen(Request $request, Prestamo $prestamo)
    {    
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,bmp|max:10240', //10Mb
        ]); 

        $filename = time() .".". $request->image->extension();

        $request->image->move(public_path('images'), $filename);

        PrestamoImage::create(['image' => $filename, 'prestamo_id' => $prestamo->id]);

        return back()->with('status', 'Imagen cargada con exito!');


    }


}
