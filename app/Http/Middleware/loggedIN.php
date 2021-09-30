<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loggedIN
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
        if(Session()->has('loginId') && (url('login')==$request->url())){
            return back();
        }
        // if(Session()->has('loginId') && (url('login')==$request->url() || url('registration')==$request->url())){
        //     return back();
        // }



        return $next($request);
    }
}
