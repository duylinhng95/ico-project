<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Advisor;
use App\Partner;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
    	$data = Index::all();
    	$advisors = Advisor::all();
    	$partners = Partner::all();
    	$page1= array();
    	$social= array();
    	$page2=[];
    	$page3=[];
    	$page4=[];
    	$page5=[];
    	// $page6=[];
    	foreach($data as $d){
    		switch ($d->section) {
    			case 'page1':
    				$page1[] = $d ;
    				break;
    			case 'social':
    				$social[] = $d;
    				break;
    			case 'page2':
    				$page2[$d->name] = $d;
    				break;
    			case 'page3':
    				$page3[$d->name] = $d;
    				break;
    			case 'page4':
    				$page4[$d->name] = $d;
    				break;
    			case 'page5':
    				$page5[$d->name] = $d;    				
    				break;
    			case 'page6':
    				$page6[$d->name] = $d;
    				break;
    		}
    	}
    	$page5['advisor'] = $advisors;
    	$page6['partner'] = $partners;
    	return view('admin.index', compact('page1', 'social', 'page2', 'page3', 'page4', 'page5', 'page6'));
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
    	$destinationPath = public_path('/page/images/page2');
    	// Delete old file
    	$page2 = Index::where('section', 'page2')->where('name', 'like', 'image%')->get();
    	if($request->hasFile('image1'))
    	{
    		$file = $request->file('image1');
            $filename = $file->getClientOriginalName('image1');
        	$oldfile = $page2[0]->content;
        	unlink($destinationPath.'/'.$oldfile);
        	$file->move($destinationPath, $filename);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image1'], ['content' => $filename]
            );
    	}
    	if($request->hasFile('image2'))
        {
            $file2 = $request->file('image2');
            $filename2 = $file2->getClientOriginalName('image2');
            $oldfile2 = $page2[1]->content;
        	unlink($destinationPath.'/'.$oldfile2);
        	$file2->move($destinationPath, $filename2);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image2'], ['content' => $filename2]
            );
        }
    	if($request->hasFile('image3'))
        {
            $file3 = $request->file('image3');
            $filename3 = str_replace(' ', '_', $file3->getClientOriginalName('image3'));
            $oldfile3 = $page2[2]->content;
        	unlink($destinationPath.'/'.$oldfile3);
        	$file3->move($destinationPath, $filename3);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image3'], ['content' => $filename3]
            );
        }
    	if($request->hasFile('image4'))
        {
            $file4 = $request->file('image4');
            $filename4 = str_replace(' ', '_', $file4->getClientOriginalName('image4'));
            $oldfile4 = $page2[3]->content;
        	unlink($destinationPath.'/'.$oldfile4);
        	$file4->move($destinationPath, $filename4);
            Index::updateOrCreate(
            	['section' => 'page2', 'name' => 'image4'], ['content' => $filename4]
            );
        }
        return redirect('/admin');
    }
    public function page3(Request $request){
    	$input = $request->except('logo1','logo2','logo3','logo4','_token','section');
    	foreach ($input as $k => $rq)
    	{
    		Index::updateOrCreate(
    			['section' => 'page3', 'name' => $k], ['content' => $rq]
    		);
    	}
    	$destinationPath = public_path('/page/images/page3');
    	// Delete Old file
    	$page3 = Index::where('section', 'page3')->where('name', 'like', 'logo%')->get();
    	// Image file
    	
    	if($request->hasFile('logo1'))
    	{
    		$file = $request->file('logo1');
            $filename = $file->getClientOriginalName('logo1');
            $oldfile = $page3[0]->content;
            unlink($destinationPath.'/'.$oldfile);
        	$file->move($destinationPath, $filename);
            Index::updateOrCreate(
            	['section' => 'page3', 'name' => 'logo1'], ['content' => $filename]
            );
    	}
    	if($request->hasFile('logo2'))
    	{
    		$file2 = $request->file('logo2');
            $filename2 = $file2->getClientOriginalName('logo2');
            $oldfile2 = $page3[0]->content;
            unlink($destinationPath.'/'.$oldfile2);
        	$file2->move($destinationPath, $filename2);
            Index::updateOrCreate(
            	['section' => 'page3', 'name' => 'logo2'], ['content' => $filename2]
            );
    	}
    	if($request->hasFile('logo3'))
    	{
    		$file3 = $request->file('logo3');
            $filename3 = $file3->getClientOriginalName('logo3');
            $oldfile3 = $page3[0]->content;
            unlink($destinationPath.'/'.$oldfile3);
        	$file3->move($destinationPath, $filename3);
            Index::updateOrCreate(
            	['section' => 'page3', 'name' => 'logo3'], ['content' => $filename3]
            );
    	}
    	if($request->hasFile('logo4'))
    	{
    		$file4 = $request->file('logo4');
            $filename4 = $file4->getClientOriginalName('logo4');
            $oldfile4 = $page3[0]->content;
            unlink($destinationPath.'/'.$oldfile4);
        	$file4->move($destinationPath, $filename4);
            Index::updateOrCreate(
            	['section' => 'page3', 'name' => 'logo4'], ['content' => $filename4]
            );
    	}
    	return redirect('/admin');
    }

    public function page4(Request $request){
    	$input = $request->except('timeline','_token','section');
    	foreach ($input as $k => $rq)
    	{
    		Index::updateOrCreate(
    			['section' => 'page4', 'name' => $k], ['content' => $rq]
    		);
    	}
    	$destinationPath = public_path('/page/images/page4');
    	// Image file
    	if($request->hasFile('timeline'))
    	{
    		// Delete Old file
    		$page4 = Index::where('section', 'page4')->where('name', 'timeline')->first();
	    	$oldfile = $page4->content;
            unlink($destinationPath.'/'.$oldfile);
    		$file = $request->file('timeline');
            $filename = $file->getClientOriginalName('timeline');
        	$file->move($destinationPath, $filename);
            Index::updateOrCreate(
            	['section' => 'page4', 'name' => 'timeline'], ['content' => $filename]
            );
    	}
    	return redirect('/admin');
    }
    public function page5(Request $request){
    	$input = $request->$request->except('_token');
    	foreach ($input as $k=>$rq)
    	{
    		Index::updateOrCreate(
        	['section' => 'page5', 'name' => $k], ['content' => $rq]
        );
    	}
    	return redirect('/admin');
    }

    public function page5_advisor(Request $request){
    	$input = $request->except('avatar');
    	$destinationPath = public_path('/page/images/page5');

    	if($request->hasFile('avatar'))
    	{
    		$file= $request->file('avatar');
    		$filename = time().'_'.$file->getClientOriginalName('avatar');
    		$file->move($destinationPath, $filename);
    		$input['avatar'] = $filename;
    	}
    	$save = Advisor::create($input);
    	$input['id'] = $save->id;
    	return response()->json([
    		'status' => 'success',
    		'data' => $input
    	]);
    }
    public function page5_advisor_edit($id){
    	$advisor = Advisor::where('id', $id)->first()->toArray();
    	return response()->json([
    		'status'=>'success',
    		'data' => $advisor
    	]);
    }
    public function page5_advisor_update(Request $request, $id){
    	$input = $request->except('_token', 'avatar');
    	$advisor = Advisor::where('id', $id);
    	$destinationPath = public_path('/page/images/page5');
    	$input['avatar']=$advisor->first()->avatar;
    	// Delete Old File
    	if($request->hasFile('avatar'))
    	{
    		$oldfile= $advisor->first()->avatar;
			Storage::delete($destinationPath.'/'.$oldfile);
    		$file= $request->file('avatar');
    		$filename = time().'_'.$file->getClientOriginalName('avatar');
    		$file->move($destinationPath, $filename);
    		$input['avatar'] = $filename;
    	}
    	$advisor->update($input);
    	return response()->json([
    		'status' => 'success',
    		'data' => $input
    	]);
    }
    public function page5_advisor_delete($id){
    	$advisor = Advisor::where('id', $id)->delete();
    	return response()->json([
    		'status' => 'success'
    	]);
    }
    public function page6(Request $request){
    	$input = $request->except('_token');
    	foreach ($input as $k=>$rq)
    	{
    		Index::updateOrCreate(
        	['section' => 'page6', 'name' => $k], ['content' => $rq]
        );
    	}
    	return redirect('/admin');
    }

    public function page6_partner(Request $request){
    	$input = $request->except('image');
    	$destinationPath = public_path('/page/images/page6');

    	if($request->hasFile('image'))
    	{
    		$file= $request->file('image');
    		$filename = time().'_'.$file->getClientOriginalName('image');
    		$file->move($destinationPath, $filename);
    		$input['image'] = $filename;
    	}
    	$save = Partner::create($input);
    	$input['id'] = $save->id;
    	return response()->json([
    		'status' => 'success',
    		'data' => $input
    	]);
    }
    public function page6_partner_edit($id){
    	$partner = Partner::where('id', $id)->first()->toArray();
    	return response()->json([
    		'status'=>'success',
    		'data' => $partner
    	]);
    }
    public function page6_partner_update(Request $request, $id){
    	$input = $request->except('_token', 'image');
    	$partner = Partner::where('id', $id);
    	$destinationPath = public_path('/page/images/page6');
    	$input['image']=$partner->first()->image;
    	// Delete Old File
    	if($request->hasFile('image'))
    	{
    		$oldfile= $partner->first()->image;
			Storage::delete($destinationPath.'/'.$oldfile);
    		$file= $request->file('image');
    		$filename = time().'_'.$file->getClientOriginalName('image');
    		$file->move($destinationPath, $filename);
    		$input['image'] = $filename;
    	}
    	$partner->update($input);
    	return response()->json([
    		'status' => 'success',
    		'data' => $input
    	]);
    }
    public function page6_partner_delete($id){
    	$partner = Partner::where('id', $id)->delete();
    	return response()->json([
    		'status' => 'success'
    	]);
    }

}
