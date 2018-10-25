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
    	$users = User::where('role', null)->get();
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
        	$brand[$rq->name] = $rq;
    	return view('/admin/user', compact('users', 'brand'));
    }
    public function export(){
    	return Excel::download(new UsersExport, 'users.xlsx');
    }
}
