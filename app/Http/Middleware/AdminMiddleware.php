<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;


class AdminMiddleware
{
    

    public function handle($request, Closure $next)
    {
        if(Auth::user()->cargo == 'administrador') {
            
            return $next($request);        

        }else{

                return redirect()->route('home');

        }
    }
}
