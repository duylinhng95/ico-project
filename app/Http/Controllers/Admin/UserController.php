<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Index;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){
    	$users = User::where('role', null)->orWhere('role', '0')->get();
        $mods = User::where('role', '1')->get();
    	$example = '';
    	$brand = [
            'brandName' => $example,
            'brandImg' => $example,
            'telegramChina' => $example,
            'telegramGlobal' => $example,
            'telegramKorea' => $example,
        ];
        $brands = Index::where('section', 'brand')->get();
        foreach ($brands as $rq)
        	{
                $brand[$rq->name] = $rq;
            }
        foreach ($users as $user)
        {
            $user->countRef = User::where('referral_id', $user->id)->count();
        }
    	return view('/admin/user', compact('users', 'brand', 'mods'));
    }
    public function export(){
    	return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function role($id, Request $request){
        $user = User::where('id', $id)->first();
        $user->role = $request['role'];
        $user->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
