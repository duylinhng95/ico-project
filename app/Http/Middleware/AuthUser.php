<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthUser
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
        $role = Auth::user()->role;
        if(!Auth::user())
            return redirect('/login');
        $verify = Auth::user()->vertification_token;
        if($role == 0 && $verify == null || $role == null && $verify == null)
        {
            return $next($request);
        }
        else
        {
            Auth::logout();
            return redirect('/login');
        }
    }
}
