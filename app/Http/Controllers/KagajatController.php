<?php

namespace App\Http\Controllers;

use App\Kagajat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class KagajatController extends Controller
{
    //

    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('auth');
    }

    public function index()
    {

        $kagajat=Kagajat::paginate(20);
        return view('admin.kagajat.list',['kagajat'=>$kagajat]);
    }

    public function create(){


        return view('admin.kagajat.add');
    }

    public function store(Request $request){


        $input = Input::only('title',
            'description'
         );

        //    dd($input);
        $this->validate($request, [
            'title' => 'required|max:255|',
            'description' => 'required',
        ]);


        $kagajat =new Kagajat();
        $kagajat->title = $input['title'];
        $kagajat->description = $input['description'];
        $kagajat->save();

        return redirect()->route('admin_kagajats')->with('status', 'New kagajat successfully added.');

    }

    public  function edit($id){
        $kagajat = Kagajat::find($id);
        return view('admin.kagajat.edit',['kagajat'=>$kagajat]);
    }

    public  function update(Request $request){


        $input = Input::only('id',
            'title',
            'description'
           );

        $this->validate($request, [
            'title' => 'required|max:255|',
            'description' => 'required',
        ]);

        $kagajat = Kagajat::find($input['id']);
        $kagajat->title = $input['title'];
        $kagajat->description = $input['description'];
        $kagajat->save();

        return redirect()->route('admin_kagajats')->with('status', 'kagajat is updated.');
    }

    public function delete($id){
        $kagajat = Kagajat::find($id);
        $kagajat->delete();
        return redirect()->route('admin_kagajats')->with('status', 'Your file is deleted.');
    }


}
