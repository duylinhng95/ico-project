<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function verify($token){
    	$email = base64_decode($token);
    	$user = User::where('email', $email)->where('vertification_token', $token)->first();
    	if($user)
    	{
    		$user->vertification_token = null;
    		$user->update();
    		return redirect('/login')->with('status', 'Verified Complete');
    	}
    	else
    	{
    		return  abort(404);
    	}
    }
    public function index(){
        $user = Auth::user();
        $referral = User::where('referral_id', $user->id)->get();
        return view('user.user', compact('user', 'referral'));
    }
    public function referral(Request $request){
        $referral_token = $request->referral;
        $referralID = User::where('referal_token', $referral_token)->first()->id;
        session(['referral_id' => $referralID]);
        return redirect('/register');
    }
}
