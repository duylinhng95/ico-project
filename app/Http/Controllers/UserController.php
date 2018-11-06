<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\KYC;
use App\Index;
use Auth;
class UserController extends Controller
{

    public function index(){
        $user = Auth::user();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        return view('user.index', compact('user', 'brand', 'brandName'));
    }

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
    public function referral_index(){
        $user = Auth::user();
        $referral = User::where('referral_id', $user->id)->get();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        return view('user.referral', compact('user', 'referral', 'brand', 'brandName'));
    }
    public function referral(Request $request){
        $referral_token = $request->referral;
        $referralID = User::where('referal_token', $referral_token)->first()->id;
        session(['referral_id' => $referralID]);
        return redirect('/register');
    }
    public function kyc(){
        $kyc = Auth::user()->is_kyc;
        $user = Auth::user();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        $profile = [
            'address' => $user->address,
            'phone' => $user->phone,
            'city' => $user->city,
            'country' => $user->country,
            'identify' => $user->identify,
        ];
        $path = asset('/page/images/user').'/'.$user->id.'_'.$user->email;
        $kyc_image = KYC::where('user_id', $user->id)->first();
        return view('user.kyc', compact('user', 'profile', 'kyc_image', 'path', 'brand', 'brandName'));
    }

    public function profile(){
        $user = Auth::user();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        return view('user.profile', compact('user', 'brand', "brandName"));
    }

    public function save_profile(Request $request){
        $input = $request->except('_token');    
        $user = User::where('id', $input['id']);
        $input['is_profile'] = 1;
        $user->update($input);
        return redirect('/user');
    }

    public function kyc_image(){
        $user = Auth::user();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        return view('user.kyc2', compact('user', 'brand', 'brandName'));
    }

    public function kyc_step1(Request $request){
        $user = User::where('id', $request->id);
        $this->validate($request, [
            'front' => 'required|image|mimes:jpeg,bmp,png',
            'back' => 'required|image|mimes:jpeg,bmp,png|',
        ],
        [
            'front.required' => 'Front Image of your doument is required',
            'back.required' => "Back Image of your doument is required",
        ]);
        $user_kyc = $user->first();
        $input['user_id'] = $user_kyc->id;
        $destinationPath = public_path('/page/images/user/').$user_kyc->id.'_'.$user_kyc->email;
        // Front Image
            $file= $request->file('front');
            $filename = 'front_'.$file->getClientOriginalName('front');
            $file->move($destinationPath, $filename);
            $input['front'] = $filename;

        // Back Image
            $file = $request->file('back');
            $filename = 'back_'.$file->getClientOriginalName('back');
            $file->move($destinationPath, $filename);
            $input['back'] = $filename;
        // KYC Update
            $kyc = KYC::create($input);
            $input['selfie'] = '';
            $user->update(['kyc_step' => '1']);
        return redirect('/user/kyc/2');        
    }

    public function kyc_selfie(){
        $user = Auth::user();
        $brand = Index::where('section', 'brand')->where('name', 'brandImg')->first();
        $brandName = Index::where('section', 'brand')->where('name', 'brandName')->first();
        return view('user.kyc3', compact('user', 'brand', 'brandName'));
    }
    public function kyc_step2(Request $request){
        $user = User::where('id', $request->id);
        $this->validate($request, [
            'selfie' => 'required|image|mimes:jpeg,bmp,png'
        ],
        [
            'selfie.required' => 'Missing image'
        ]);
        $user_kyc = $user->first();
        $destinationPath = public_path('/page/images/user/').$user_kyc->id.'_'.$user_kyc->email;
        // Selfie Image
            $file = $request->file('selfie');
            $filename = 'back_'.$file->getClientOriginalName('selfie');
            $file->move($destinationPath, $filename);
            $input['selfie'] = $filename;
        $kyc = KYC::where('user_id', $request->id)->update($input);
        $user->update(['kyc_step' => '2']);
        return redirect('/user/kyc');
    }
}
