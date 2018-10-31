<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class kycstep2Middleware
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
        if($kyc_step == 1){
            return $next($request);
        }
        else
        {
            return redirect('/user/kyc');
        }
    }
}
