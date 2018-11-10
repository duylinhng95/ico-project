<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\KYC;
use App\Index;
use Auth;
use Illuminate\Filesystem\Filesystem;
use Mail;
use App\Mail\KYCVerify;

class ModController extends Controller
{
    public function index(){
    	$user = Auth::user();
    	$users = User::where('role', null)->orWhere('role', '0')->where('kyc_step',2)->get();
    	$brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
    	return view('mod.index', compact('user', 'users', 'brand'));
    }

    public function show($id){
    	$user = User::where('id', $id)->first();
    	$profile = [
            'address' => $user->address,
            'phone' => $user->phone,
            'city' => $user->city,
            'country' => $user->country,
            'birthday' => $user->birthday,
        ];
    	$kyc_image = KYC::where('user_id', $user->id)->first();
    	$path = asset('/page/images/user').'/'.$user->id.'_'.$user->email;
    	return view('mod.show', compact('user', 'profile', 'kyc_image', 'path'));
    }

    public function verify_kyc($id){
    	$user = User::where('id', $id)->first();
    	$user->is_kyc = 1;
    	$user->save();
        $file = new Filesystem;
        $destinationPath = public_path('/page/images/user/').$user->id.'_'.$user->email;
        $file->deleteDirectory($destinationPath);
        Mail::to($user->email)
        ->send(new KYCVerify([
            'name'=>$user->name
        ]));
        KYC::where('user_id', $id)->delete();
    	return response()->json([
    		'status' => 'success'
    	]);
    }
}
