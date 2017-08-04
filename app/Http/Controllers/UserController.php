<?php

namespace App\Http\Controllers;

use App\Article;
use App\Bhatta;
use App\Member;
use App\Menu;
use App\MyLibs\Helpers;
use App\Report;
use App\Slider;
use Illuminate\Http\Request;
use App\MyLibs\Nepali_Calendar;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
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

        $homeArticle=Article::where('home_page','1')
                    ->orderBy('created_at', 'DESC')
                    ->get();

        $menu = Menu::orderBy('order', 'ASC')->get();

        $breaking_news = Article::where('breaking_news', '1')
            ->orderBy('created_at','DESC')
            ->get();

        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();

        return view('user.main', ['slider' => $slider,
            'member' => $member,
            'annual_report' => $annual_report,
            'publications' => $publications,
            'notice' => $notice,
            'news' => $news,
            'menu' => $menu,
            'main_link'=>$main_link,
            'breaking_news'=>$breaking_news,
            'homeArticle'=>$homeArticle]);
    }

    public function photos()
    {
        $menu = Menu::orderBy('order', 'ASC')->get();
        return view('user.gallery', ['menu' => $menu]);
    }

    public function post($id)
    {
        $article = Article::findOrfail($id);
        $menu = Menu::orderBy('order', 'ASC')->get();

        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();

        return view('user.post', ['menu' => $menu,
            'main_link'=>$main_link,
            'article' => $article]);
    }

    public function slug($slug)
    {
        $article = Article::where('slug',$slug)->first();

        if(empty($article)){
            abort(404);
        }

        $menu = Menu::orderBy('order', 'ASC')->get();

        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();

        return view('user.post', ['menu' => $menu,
            'main_link'=>$main_link,
            'article' => $article]);
    }


    public function staffDetails()
    {

        $menu = Menu::orderBy('order', 'ASC')->get();
        $main_member = Member::where('head', '1')->first();
        $member = Member::where('head', '0')->get();
        return view('user.staffs', ['main_member' => $main_member,
            'member' => $member,
            'menu' => $menu]);
    }

    public function bhatta()
    {

        $menu = Menu::orderBy('order', 'ASC')->get();
        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();
        $bhatta = Bhatta::orderBy('memberName','ASC')->paginate(20);
        return view('user.bhatta', [
            'main_link'=>$main_link,
            'bhatta' => $bhatta,
            'menu' => $menu]);
    }
    public function bhattaSearch(Request $request)
    {

        $input = Input::only('keyword');
        $this->validate($request, [
            'keyword' => 'required',
        ]);


        $menu = Menu::orderBy('order', 'ASC')->get();
        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();

        $bhatta = Bhatta::where('memberName','LIKE','%' .$input['keyword'].'%' )
            ->orWhere('citizenship','LIKE',$input['keyword'])
            ->orWhere('memberId','LIKE',$input['keyword'])
            ->orderBy('memberName','ASC')->paginate(20);
        $bhatta->appends(['keyword' => $input['keyword']]);


        return view('user.bhatta', [
            'main_link'=>$main_link,
            'bhatta' => $bhatta,
            'menu' => $menu]);
    }

    public function category()
    {
        return view('user.news');
    }

    public function download()
    {



        $menu = Menu::orderBy('order', 'ASC')->get();

        $main_link = Article::where('main_link', '1')
            ->orderBy('created_at','DESC')
            ->get();

        $report = Report::where('type','0')
            ->orderBy('created_at','DESC')
            ->paginate(15);
        return view('user.download', ['menu' => $menu,
            'main_link'=>$main_link,
            'report' => $report]);
    }

}
