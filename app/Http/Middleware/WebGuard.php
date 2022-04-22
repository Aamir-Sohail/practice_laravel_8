<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
@return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //age show in every where...
        // echo $request->age;
        if($request->age < 18){
            echo "You are not Allowed ?";
            die;
        }

        return $next($request);
    }
}
