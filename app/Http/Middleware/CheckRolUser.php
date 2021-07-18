<?php

namespace App\Http\Middleware;

use App\User;
use Attribute;
use Closure;
use Illuminate\Http\Request;

class CheckRolUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if(auth()->user()->rol->key == 'admin'){
             return $next($request);
         }   
         return redirect('/home');
    }
}
