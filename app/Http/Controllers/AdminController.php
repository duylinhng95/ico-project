<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
    	$data = Index::all();
    	$page1= array();
    	$social= array();
    	// $page2=[];
    	// $page3=[];
    	// $page4=[];
    	// $page5=[];
    	// $page6=[];
    	// $page7=[];
    	foreach($data as $d){
    		switch ($d->section) {
    			case 'page1':
    				$page1[] = $d ;
    				break;
    			case 'social':
    				$social[] = $d;
    				break;
    		}
    	}
    	return view('admin.index', compact('page1', 'social'));
    }

    public function data_without_url(Request $request){
    	foreach($request->all() as $k => $rq)
    	{
    		if($k != '_token')
    		{	
    			if($k == 'section') 
    				{
    					$section = $rq;
    					continue;
    				}
    			Index::updateOrCreate(
    				['section' => $section, 'name' => $k], ['content' => $rq]
    				);
    		}
    	}
    	return redirect('/admin');
    }
    public function page2(Request $request){
    	// $this->validate($request, [
    	// 	'image1' => 'required|image|mimes:jpeg,bmp,png|dimensions:max_width=300,max_height=200',
    	// 	'image2' => 'image|mimes:jpeg,bmp,png|dimensions:max_width=300,max_height=200',
    	// 	'image3' => 'image|mimes:jpeg,bmp,png|dimensions:max_width=300,max_height=200',
    	// 	'image4' => 'image|mimes:jpeg,bmp,png|dimensions:max_width=300,max_height=200',
    	// ],
    	// [
    	// 	'image1.required' => 'First Image is required',
    	// 	'image1.image' => "File is not an Image",
    	// 	'image1.dimensions' => "Image size is wrong: 300x200",
    	// 	'image2.dimensions' => "Image size is wrong: 300x200",
    	// 	'image3.dimensions' => "Image size is wrong: 300x200",
    	// 	'image4.dimensions' => "Image size is wrong: 300x200",
    	// 	'image2.image' => "File is not an Image",
    	// 	'image3.image' => "File is not an Image",
    	// 	'image4.image' => "File is not an Image",
    	// ]);
    	$input = $request->except('image1','image2','image3','image4','_token','section');
    	foreach ($input as $k => $rq)
    	{
    		Index::updateOrCreate(
    			['section' => 'page2', 'name' => $k], ['content' => $rq]
    		);
    	}
    	$destinationPath = public_path('/page/images');
    	if($request->hasFile('image1'))
    	{
    		$file = $request->file('image1');
            $filename = $file->getClientOriginalName('image1');
        	$oldfile = $filename;
        	Storage::delete($oldfile);
        	$file->move($destinationPath, $filename);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image2'], ['content' => $filename]
            );
    	}
    	if($request->hasFile('image2'))
        {
            $file2 = $request->file('image2');
            $filename2 = $file2->getClientOriginalName('image2');
            $oldfile2 = $filename2;
        	Storage::delete($oldfile2);
        	$file2->move($destinationPath, $filename2);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image2'], ['content' => $filename2]
            );
        }
    	if($request->hasFile('image3'))
        {
            $file3 = $request->file('image3');
            $filename3 = str_replace(' ', '_', $file3->getClientOriginalName('image3'));
            $oldfile3 = $filename3;
        	Storage::delete($oldfile3);
        	$file3->move($destinationPath, $filename3);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image2'], ['content' => $filename3]
            );
        }
    	if($request->hasFile('image4'))
        {
            $file4 = $request->file('image4');
            $filename4 = str_replace(' ', '_', $file4->getClientOriginalName('image4'));
            $oldfile4 = $filename4;
        	Storage::delete($oldfile4);
        	$file4->move($destinationPath, $filename4);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image2'], ['content' => $filename4]
            );
        }
        return redirect('/admin');
    }
    public function social(Request $request){
    	dd($request->all());
    }
}
