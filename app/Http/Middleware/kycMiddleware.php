<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class kycMiddleware
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
        $kyc = Auth::user()->is_kyc;
        if($kyc == 2 || $kyc == 3)
        {
           return $next($request); 
        }
        else
            return redirect('/user');
    }
}
