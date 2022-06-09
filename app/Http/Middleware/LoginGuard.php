<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginGuard
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
        // echo '<pre>';
        // print_r(session()->all());
        if(session()->has('user_id'))
        return $next($request);
        else
         return redirect('no-access');

    }
}
