<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        return view("web.index");      
    }

     public function detail() {
         return view("web.index");      
     }

     public function prestamo_licenciatura() {
         return view("web.index");      
     }
     public function contact() {
         return view("web.index");      
     }
}
