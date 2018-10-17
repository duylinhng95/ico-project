<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $role = Auth::user()->role;
        if($role == 2)
            return redirect('/admin');
        elseif($role == 0)
            return redirect('/user');
        elseif($role == 1)
            return redirect('/mod');
    }
}
