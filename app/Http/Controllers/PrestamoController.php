<?php

namespace App\Http\Controllers;

use App\Prestamo;
use Illuminate\Http\Request;
use App\Http\Requests\StorePrestamoPost;
use App\licenciatura;

class PrestamoController extends Controller
{
    
    public function index()
    {
        $prestamos = Prestamo::orderBy('created_at', 'desc')
        ->where('activo', '=', '1')
        ->paginate(5);

        return view('dashboard.prestamo.index', ['prestamos' => $prestamos]);
    }

    
    public function create()
    {
        $licenciaturas = licenciatura::pluck('id', 'nombre');

        return view("dashboard.prestamo.create", ['prestamo' => new Prestamo(), 'licenciaturas' => $licenciaturas ]);
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


}
