<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLicenciaturaPost;
use App\licenciatura;
use Illuminate\Http\Request;

class licenciaturaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol.user');
    }

    
    public function index()
    {
        $licenciaturas = licenciatura::orderBy('created_at', 'ASC')
        ->paginate(10);

        return view('dashboard.licenciatura.index', ['licenciaturas' => $licenciaturas]);
    }

    
    public function create()
    {
        return view("dashboard.licenciatura.create", ['licenciatura' => new licenciatura()]);
    }

    
    public function store(StoreLicenciaturaPost $request)
    {
        licenciatura::create($request->validated());

        return back()->with('status', 'Licenciatura registrada con exito!');
    }

    
    public function show(Licenciatura $licenciatura)
    {
        return view('dashboard.licenciatura.show', ['licenciatura' => $licenciatura]);
    }

   
    public function edit(Licenciatura $licenciatura)
    {
        return view('dashboard.licenciatura.edit',  ['licenciatura' => $licenciatura]);
    }

    
    public function update(StoreLicenciaturaPost $request, Licenciatura $licenciatura)
    {
        $licenciatura->update($request->validated());

        return back()->with('status', 'Licenciatura actualizada con exito!');
    }

    public function destroy(Licenciatura $licenciatura)
    {
        $licenciatura->delete();

        return back()->with('status', 'Licenciatura eliminada con exito!');
    }
}
