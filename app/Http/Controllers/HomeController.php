<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Gallery;
use App\Slider;
use Illuminate\Http\Request;

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
        // view('home');

        $category = Category::all();
        $articles = Article::all();
        $slider = Slider::all();
        $gallery = Gallery::all();

        return view('admin.dashboard',['category'=>$category,'articles'=>$articles,'slider'=>$slider,'gallery'=>$gallery]);
    }
}
