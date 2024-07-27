<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MenuController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu=Menu::orderBy('order','ASC')->get();


        return view('admin.menu.list',['menu'=>$menu]);
    }

    public function create(){
        return view('admin.menu.add');
    }

    public function store(Request $request){
        $input = Input::only('name','order','link');
        $this->validate($request, [
            'name' => 'required|max:255|',
            'order'=>'required|numeric',
            'link' => 'required|max:255|',

        ]);

        $menu =new Menu();
        $menu->name = $input['name'];
        $menu->order= $input['order'];
        $menu->link= $input['link'];
        $menu->save();

        return redirect()->route('admin_menu')->with('status', 'New Menu created.');

    }

    public  function edit($id){
        $menu = Menu::find($id);
        return view('admin.menu.edit',['menu'=>$menu]);
    }

    public  function update(Request $request){

        $input = Input::only('id','name','order','link');
        $this->validate($request, [
            'name' => 'required|max:255|',
            'order'=>'required|numeric',
            'link' => 'required|max:255|',

        ]);



        $menu = Menu::find($input['id']);
        $menu->name = $input['name'];
        $menu->order= $input['order'];
        $menu->link= $input['link'];
        $menu->save();
        return redirect()->route('admin_menu')->with('status', 'menu is updated.');
    }

    public function delete($id){

        $menu = Menu::find($id);

        $menu->delete();

        return redirect()->route('admin_menu')->with('status', 'Menu deleted successfully.');
    }
}
