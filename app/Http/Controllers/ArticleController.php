<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
          $this->middleware('auth', ['except' => ['post']]);
    }

    public function index()
    {
        $article=Article::paginate(20);
        return view('admin.article.list',['article'=>$article]);
    }

    public function create(){
        $category =Category::all();

        return view('admin.article.add',['category'=>$category]);
    }

    public function store(Request $request){


        $input = Input::only('title',
            'slug',
            'description',
            'category_id',
            'publish',
            'feature_image',
            'home_page',
            'main_link',
            'breaking_news');

        $this->validate($request, [
            'title' => 'required|max:255|',
            'slug' => 'required|max:255|',
            'description' => 'required',
            'category_id' => 'required',
            'publish' => 'required',
            'feature_image'=>'image',
            'home_page'=>'required',
            'main_link'=>'required',
            'breaking_news'=>'required'
        ]);


        $article =new Article();
        $article->title = $input['title'];
        $article->description = $input['description'];
        $article->category_id = $input['category_id'];
        $article->publish = $input['publish'];
        $article->slug=Str::slug($input['slug']);

        if(!empty($input['feature_image'])) {
            $filename = $input['feature_image']->store('features');
            $article->feature_image=$filename;
        }

        $article->home_page=$input['home_page'];
        $article->main_link=$input['main_link'];
        $article->breaking_news=$input['breaking_news'];
        $article->save();

        return redirect()->route('admin_articles')->with('status', 'New article successfully added.');

    }

    public  function edit($id){
        $article = Article::find($id);
        $category = Category::all();
        return view('admin.article.edit',['article'=>$article,'category'=>$category]);
    }

    public  function update(Request $request){


        $input = Input::only('id',
            'slug',
            'title',
            'description',
            'category_id',
            'publish',
            'feature_image',
            'home_page',
            'main_link',
            'breaking_news');

        $this->validate($request, [
            'title' => 'required|max:255|',
            'slug' => 'required|max:255|',
            'description' => 'required',
            'category_id' => 'required',
            'publish' => 'required',
            'feature_image'=>'image',
            'home_page'=>'required',
            'main_link'=>'required',
            'breaking_news'=>'required'
        ]);

        $article = Article::find($input['id']);



        $article->title = $input['title'];
        $article->description = $input['description'];
        $article->category_id = $input['category_id'];
        $article->publish = $input['publish'];
        $article->home_page=$input['home_page'];
        $article->slug=Str::slug($input['slug']);

        if(!empty($input['feature_image']))     {
            $this->deleteFile('uploads/'.$article->feature_image);
            $filename = $input['feature_image']->store('features');
            $article->feature_image=$filename;
        }


        $article->main_link=$input['main_link'];
        $article->breaking_news=$input['breaking_news'];
        $article->save();

        return redirect()->route('admin_articles')->with('status', 'article is updated.');
    }

    public function delete($id){

        $article = Article::find($id);

        $this->deleteFile('uploads/'.$article->feature_image);

        $article->delete();

        //  route('admin_member_edit',array($member->id))}}

        return redirect()->route('admin_articles')->with('status', 'Your file is deleted.');
    }

    public function post($id){

        $article= Article::find($id);


        $menu = Menu::all();

        return view('user.post',['menu'=>$menu]);


    }

    private function deleteFile($path){
        $file_path= storage_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
