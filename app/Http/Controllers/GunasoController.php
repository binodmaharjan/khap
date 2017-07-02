<?php

namespace App\Http\Controllers;

use App\Gunaso;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

class GunasoController extends Controller
{
    //

    public function index(){


        $gunaso = Gunaso::all();

        return view('admin.gunaso.list',['gunaso'=>$gunaso]);

    }

    public function gunaso(){




        $menu = Menu::all();
        return view('user.gunaso',['menu'=>$menu]);
    }

    public function store(Request $request){
        $input = Input::only('full_name','email','phone','type','subject','message');
        $this->validate($request, [
            'full_name' => 'required|max:255|',
            'email' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $gunaso = new Gunaso();
        $gunaso->full_name=$input['full_name'];
        $gunaso->email=$input['email'];
        $gunaso->phone=$input['phone'];
        $gunaso->type=$input['type'];
        $gunaso->subject=$input['subject'];
        $gunaso->message=$input['message'];
        $gunaso->save();


        return redirect()->route('gunaso')->with('status',"Your gunaso has been posted.");

    }

    public function delete($id){
        $support = Gunaso::find($id);
        $support->delete();
        return redirect()->route('admin_gunaso')->with('status', 'gunaso deleted.');
    }
}
