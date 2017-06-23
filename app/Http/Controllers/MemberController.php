<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

class MemberController extends Controller
{
    //
    public function index()
    {
        $member=Member::all()->sortByDesc("id");

        // return "Slider index";

        return view('admin.member.list',['member'=>$member]);
    }

    public function create(){
        return view('admin.member.add');
    }

    public function store(Request $request){


        $input = Input::only('name','position','phone','email','file');

        $this->validate($request, [
            'name' => 'required|max:255|',
            'position' => 'required|max:255|',
            'position' => 'required|max:10|',
            'email' => 'required',
            'file'=>'required|image'
        ]);

        $filename = $input['file']->store('member');
        $member =new Member();
        $member->name = $input['name'];
        $member->position = $input['position'];
        $member->phone = $input['phone'];
        $member->email = $input['email'];
        $member->path=$filename;
        $member->save();

        return redirect('member')->with('status', 'New member successfully added.');

    }

    public  function edit($id){
        $member = Member::find($id);
        return view('admin.member.edit',['member'=>$member]);
    }

    public  function update(Request $request){



        $input = Input::only('id','name','position','phone','email','file');

        $this->validate($request, [
            'name' => 'required|max:255|',
            'position' => 'required|max:255|',
            'position' => 'required|max:10|',
            'email' => 'required',
            'file'=>'required|image'
        ]);

        $member = Member::find($input['id']);

        $this->deleteFile('uploads/'.$member->path);
        $filename = $input['file']->store('member');
        $member->name = $input['name'];
        $member->position = $input['position'];
        $member->phone = $input['phone'];
        $member->email = $input['email'];
        $member->path=$filename;
        $member->save();

        return redirect('member')->with('status', 'member is updated.');
    }

    public function delete($id){

        $report = Member::find($id);

        $this->deleteFile('uploads/'.$report->path);

        $report->delete();

        return redirect('member')->with('status', 'Your file is deleted.');
    }

    private function deleteFile($path){
        $file_path= public_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
