<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EditorController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('auth');
    }

    public function index()
    {

        $user=User::paginate(20);
        return view('admin.users.list',['user'=>$user]);
    }

    public function create(){


        return view('admin.users.add');
    }

    public function store(Request $request){


        $input = Input::only('name',
            'email'
           );

        //    dd($input);
        $this->validate($request, [
            'name' => 'required|max:255|',
            'email' => 'required|max:255|',

        ]);

      //  dd($input);



        $password = str_random(8);


        $user =new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($password);

        $user->save();



        return redirect()->route('admin_users')->with('status', 'New User successfully added.');

    }
}
