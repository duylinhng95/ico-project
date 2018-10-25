<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Announcement;
use App\Http\Controllers\Controller;
use App\Index;

class AnnouncementController extends Controller
{
    public function index(){
    	$announcements = Announcement::all();
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
    	return view('admin.announcement', compact('announcements', 'brand'));	
    }
    public function create(Request $request){
    	$input = $request->except('_token');
    	$new = Announcement::create($input);
    	return response()->json([
    		'status' => 'success',
    		'data' => $new
    	]);
    }
    public function show($id){
    	$row = Announcement::where('id', $id)->first();
    	return response()->json([
    		'status' => 'success',
    		'data' => $row
    	]);
    }
    public function edit($id, Request $request){
    	$input = $request->except('_token');
    	$row = Announcement::where('id', $id)->update($input);
    	return response()->json([
    		'status' => 'success',
    		'data' => $input
    	]);
    }

    public function delete($id){
    	Announcement::where('id', $id)->delete();
    	return response()->json([
    		'status' => 'success'
    	]);
    }
}
