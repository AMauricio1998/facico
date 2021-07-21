<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\licenciatura;
use App\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends ApiResponseController
{
   

    public function index()
    {
        $prestamos = Prestamo::
        join('prestamo_images', 'prestamo_images.prestamo_id', '=', 'prestamos.id')->
        join('licenciaturas', 'licenciaturas.id', '=', 'prestamos.licenciatura_id')->
        select('prestamos.*', 'licenciaturas.nombre as licenciatura', 'prestamo_images.image')->
        orderBy('prestamos.created_at', 'desc')
        ->where('activo', '=', '1')
        ->paginate(10);

        return $this->successResponse($prestamos);
    }


    

    public function show(Prestamo $prestamo)
    {
        $prestamo->imagen;
        $prestamo->licenciatura;
        return $this->successResponse($prestamo);
        // return response()->json(array("data" => $prestamo, "code" => 500, "msj" => ''), 500);
        // return response()->json($prestamo);
    }

   
    public function licenciatura(licenciatura $licenciatura) {

             $prestamos = Prestamo::
             join('prestamo_images', 'prestamo_images.prestamo_id', '=', 'prestamos.id')->
             join('licenciaturas', 'licenciaturas.id', '=', 'prestamos.licenciatura_id')->
             select('prestamos.*', 'licenciaturas.nombre as licenciatura', 'prestamo_images.image')->
             orderBy('prestamos.created_at', 'desc')
             ->where('licenciaturas.id', $licenciatura->id)
             ->where('activo', '=', '1')
             ->paginate(10);

             return $this->successResponse(["prestamos"=>$prestamos, "licenciatura" => $licenciatura]);
    }
}
