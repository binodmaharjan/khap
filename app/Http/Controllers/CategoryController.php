<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category=Category::all()->sortByDesc("id");

        // return "Slider index";

        return view('admin.category.list',['category'=>$category]);
    }

    public function create(){
        return view('admin.category.add');
    }

    public function store(Request $request){

        $input = Input::only('name','menu');



        $this->validate($request, [
            'name' => 'required|max:255|',

        ]);


        $photo =new Category();
        $photo->name = $input['name'];
        $photo->menu= $input['menu'];
        $photo->save();

        return redirect()->route('admin_category')->with('status', 'New Category created.');

    }

    public  function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    public  function update(Request $request){

        $input = Input::only('id','name','menu');


//
//        $this->validate($request, [
//            'title' => 'required|max:255|min:2',
//            'menu'=>'required',
//
//        ]);

       // dd($input);

        $category = Category::find($input['id']);

       // dd($category);
        $category->name = $input['name'];
        $category->menu= $input['menu'];
        $category->save();
        return redirect()->route('admin_category')->with('status', 'category is updated.');
    }

    public function delete($id){

        $category = Category::find($id);

        $category->delete();

        return redirect()->route('admin_category')->with('status', 'Category deleted successfully.');
    }


}
