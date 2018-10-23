<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function verify($token){
    	$email = base64_decode($token);
    	$user = User::where('email', $email)->where('vertification_token', $token)->first();
    	if(count($user))
    	{
    		$user->vertification_token = 0;
    		$user->update();
    		return redirect('/user');
    	}
    	else
    	{
    		return  abort(404);
    	}
    }
}
