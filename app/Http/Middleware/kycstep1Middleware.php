<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class kycstep1Middleware
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
        $kyc_step = Auth::user()->kyc_step;
        if($kyc_step == 0){
            return $next($request);
        }
        else
        {
            return redirect('/user/kyc/2');
        }
    }
}
