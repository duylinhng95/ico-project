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
        $verify = Auth::user()->vertification_token;
        if($role == 0 || $role == null && $verify == null)
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
