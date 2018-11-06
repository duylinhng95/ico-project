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
        $kyc_step = Auth::user()->kyc_step;
        $profile = Auth::user()->is_profile;
        if($kyc == 1 ||$kyc_step == 2)
        {
           return $next($request); 
        }
        elseif($profile == 0)
        {
            return redirect('/user/profile');
        }
        else
        {
            return redirect('/user/kyc/1');
        }
    }
}
