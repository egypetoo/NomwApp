<?php

namespace App\Http\Middleware;

use Closure;

class checkNafath
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('individual')){
			return redirect('/indvidual-registration/step/1');
            
        }else{
			return $next($request);
		}

    }
}
