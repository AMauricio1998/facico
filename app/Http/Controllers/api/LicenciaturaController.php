<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\licenciatura;
use Illuminate\Http\Request;

class LicenciaturaController extends ApiResponseController
{
    public function all(){
        return $this->successResponse(licenciatura::all());
    }

    //licenciatura paginadas
    public function index(){
        return $this->successResponse(licenciatura::paginate(10));
    }
}
