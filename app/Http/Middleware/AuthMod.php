<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthMod
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
        if(!$role)
            return redirect('/login');
        if($role == 1)
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
