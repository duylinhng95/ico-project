<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Advisor;
use App\Partner;
use Mail;
use App\Mail\Verify;
use Stichoza\GoogleTranslate\TranslateClient;
use App;
use App\Announcement;

class IndexController extends Controller
{
    public function lang($lang){
        $data = $this->data_index();
        $tr = new TranslateClient;
        $arr['name'] = ['brandImg','telegramChina','telegramGlobal','telegramKorea', 'linkvideo', 'whitepaper', 'image1', 'image2', 'image3', 'image4', 'logo1', 'logo2', 'logo3', 'logo4', 'timeline'];
        $arr['section'] = ['advisor', 'partner'];
        foreach($data as $i)
        {
            foreach ($i as $k => $j)
            {
                if(isset($j->name))
                {
                    if(!in_array($j->name, $arr['name']))
                    {
                        try {
                            $j->content = $tr->setSource('en')->setTarget($lang)->translate($j->content);
                        } catch (GuzzleRequestException $e) {
                            throw new $e->getMessage();
                        }
                    }
                }
            }
        }
        $page1 = $data['page1'];
        $page2 = $data['page2'];
        $page3 = $data['page3'];
        $page4 = $data['page4'];
        $page5 = $data['page5'];
        $page6 = $data['page6'];
        $social = $data['social'];
        $brand = $data['brand'];
        return view('landingpage.index', compact('page1', 'social', 'page2', 'page3', 'page4', 'page5', 'page6', 'brand'));
    }
    public function data_index(){
        $data = Index::all();
        $example = new Index;
        $advisors = Advisor::all();
        $partners = Partner::all();
        $brand = [
            'brandName' => $example,
            'brandImg' => $example,
            'telegramChina' => $example,
            'telegramGlobal' => $example,
            'telegramKorea' => $example,
        ];
        $page1= [
            'title1'=> $example,
            'title2'=>$example,
            'description'=>$example,
            'linkvideo'=>$example,
        ];
        $social= [
            'facebook' => $example,
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
                case 'brand':
                    $brand[$d->name] = $d;
                    break;
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
        $page6['partner'] = $partners->toArray();
        return [
            'page1' => $page1,
            'page2' => $page2,
            'page3' => $page3,
            'page4' => $page4,
            'page5' => $page5,
            'page6' => $page6,
            'social' => $social,
            'brand' => $brand,
            ];
    }
    public function index(){
        $data = $this->data_index();
        $page1 = $data['page1'];
        $page2 = $data['page2'];
        $page3 = $data['page3'];
        $page4 = $data['page4'];
        $page5 = $data['page5'];
        $page6 = $data['page6'];
        $social = $data['social'];
        $brand = $data['brand'];
        return view('landingpage.index', compact('page1', 'social', 'page2', 'page3', 'page4', 'page5', 'page6', 'brand'));
    }

    public function announcement(){
        $data = $this->data_index();
        $announs = Announcement::all();
        $brand = $data['brand'];
        return view('landingpage.announcement', compact('announs', 'brand'));
    }
}
