<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Advisor;
use App\Partner;

class IndexController extends Controller
{
    public function index(){
    	$data = Index::all();
        $example = new Index;
        $advisors = Advisor::all();
        $partners = Partner::all()->toArray();
        $page1= [
            'title1'=> $example,
            'title2'=>$example,
            'description'=>$example,
            'linkvideo'=>$example,
        ];
        $social= [
            'reddit'=> $example,
            'telegram'=>$example,
            'twitter'=>$example,
            'bitcointalk'=>$example,
            'medium'=>$example,
        ];
        $page2=[
            'title1'=> $example,
            'title2'=>$example,
            'description1'=>$example,
            'description2'=>$example,
            'whitepaper'=>$example,
            'image1'=>$example,
            'image2'=>$example,
            'image3'=>$example,
            'image4'=>$example,
        ];
        $page3=[
            'title1'=> $example,
            'title2'=>$example,
            'title3'=>$example,
            'title4'=>$example,
            'description1'=>$example,
            'description2'=>$example,
            'description3'=>$example,
            'description4'=>$example,
            'logo1'=>$example,
            'logo2'=>$example,
            'logo3'=>$example,
            'logo4'=>$example,
        ];
        $page4= [
            'timeline'=> $example,
            'title'=>$example,
            'description'=>$example,
        ];
        $page5=[
            'title'=>$example,
            'description'=>$example,
        ];
        $page6=[
            'title'=>$example,
            'description'=>$example,
        ];
        foreach($data as $d){
            switch ($d->section) {
                case 'page1':
                    $page1[$d->name] = $d ;
                    break;
                case 'social':
                    $social[$d->name] = $d;
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

        return view('landingpage/index', compact('page1', 'social', 'page2', 'page3', 'page4', 'page5', 'page6'));
    }
}
