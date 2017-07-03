<?php

namespace App\Http\Controllers;

use App\Article;
use App\Member;
use App\Menu;
use App\MyLibs\Helpers;
use App\Report;
use App\Slider;
use Illuminate\Http\Request;
use App\MyLibs\Nepali_Calendar;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{

    public function index()
    {


        $slider = Slider::all();
        $member = Member::where('head', '1')->first();


        $annual_report = Report::where('type', '0')->get();
        $publications = Report::where('type', '1')->get();
        $notice = Report::where('type', '2')->get();
        $news = Article::where('category_id', '1')
            ->get();

        $homeArticle=Article::where('home_page','1')->first();

        $menu = Menu::orderBy('order', 'ASC')->get();

        return view('user.main', ['slider' => $slider,
            'member' => $member,
            'annual_report' => $annual_report,
            'publications' => $publications,
            'notice' => $notice,
            'news' => $news,
            'menu' => $menu,
            'homeArticle'=>$homeArticle]);
    }

    public function photos()
    {
        $menu = Menu::all();
        return view('user.gallery', ['menu' => $menu]);
    }

    public function post($id)
    {
        $article = Article::find($id);
        $menu = Menu::all();
        return view('user.post', ['menu' => $menu, 'article' => $article]);
    }


    public function staffDetails()
    {

        $menu = Menu::all();
        $main_member = Member::where('head', '1')->first();
        $member = Member::where('head', '0')->get();
        return view('user.staffs', ['main_member' => $main_member,
            'member' => $member,
            'menu' => $menu]);
    }

    public function category()
    {
        return view('user.news');
    }

    public function download()
    {
        $menu = Menu::all();

        $report = Report::all();
        return view('user.download', ['menu' => $menu, 'report' => $report]);
    }

}
