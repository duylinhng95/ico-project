<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementController extends Controller
{
    public function index(){
    	$announcements = Announcement::all();
    	return view('admin.announcement', compact('announcements'));	
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
