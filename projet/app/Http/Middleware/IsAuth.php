<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuth
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
        if(!session()->exists('user'))
        {
            return redirect()->route('connexion');
        }
        return $next($request);
    }
}
