<?php

namespace App\Http\Controllers;

use App\Article;
use App\Member;
use App\Report;
use App\Slider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        $slider = Slider::all();
        $member = Member::where('head','1')->first();

        $annual_report= Report::where('type','0')->get();
        $publications= Report::where('type','1')->get();
        $notice= Report::where('type','2')->get();

        $news=Article::where('category_id','1')
           ->get();


     //   dd($slider);
        return view('user.main',['slider'=>$slider,'member'=>$member,
            'annual_report'=>$annual_report,
            'publications'=>$publications,
            'notice'=>$notice,
            'news'=>$news]);
    }

      public function photos(){
        return view('user.gallery');
    }
     public function articles(){
        return view('user.post');
    }

}
