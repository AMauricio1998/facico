<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckRolUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(User $request, Closure $next)
    {
        if(empty(session('session_tipo') == 2)){
            return redirect('home');
        }else{
            return redirect()->route("prestamo.index");
        }
    }
}
