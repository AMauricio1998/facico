<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(){
        return view('dashboard.login.login');
    }
    
    public function validar(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');


        $consulta = User::where('email', '=', $email)
            ->where('pass', '=', $pass)
            ->where('activo', '=', 1)
            ->get();

        
        
        if(count($consulta) == 0){
            $request->session()->flash('message', 'Berifica que los datos sean correctos');
            return redirect()->route("login");
        }
        else{
            // ------------------ crear las variables de sision -------------------------
            $request->session()->put('session_id', $consulta[0]->id);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_tipo', $consulta[0]->tip_usu);

            // ------------------ consulta la sesion -------------------------
            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');

            if($session_tipo == 1){
                return redirect()->route("prestamo.index");
            }
            else{
                if($session_tipo == 2){
                    return redirect()->route("home");
                }
            }
        }
    }

    public function logout(Request $request){

        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');
        
        return redirect()->route("login");
    }
}
