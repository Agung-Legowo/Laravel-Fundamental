<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckHeight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->height < 170 ) {
            return redirect()->route('home')->with('errsos', 'umur kamu dibawah 30 tahun!');

        }
        return $next($request);
    }
}

    //MIDLWARE ROLE
    //public function handle($request, Closure $next, $role)
    //{
    //if (! $request->user()->hasRole($role)) {
         //Redirect...
    //}

    //return $next($request);
//}
