<?php

namespace App\Http\Controllers;

use App\Member;
use App\Slider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        $slider = Slider::all();
        $member = Member::where('head','1')->first();



     //   dd($slider);
        return view('user.main',['slider'=>$slider,'member'=>$member]);
    }
}
