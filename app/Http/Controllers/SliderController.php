<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

class SliderController extends Controller
{
    //



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $report=Slider::all()->sortByDesc("id");

       // return "Slider index";

        return view('admin.slider.list',['slider'=>$report]);
    }

    public function create(){
        return view('admin.slider.add');
    }

    public function store(Request $request){

        $input = Input::only('title','file');

        $this->validate($request, [
            'title' => 'required|max:255|',
            'file' => 'required|image',
        ]);

        $filename = $input['file']->store('slider');
        $photo =new Slider();
        $photo->title = $input['title'];
        $photo->path=$filename;
        $photo->save();

        return redirect()->route('admin_sliders')->with('status', 'Your file is uploaded.');

    }

    public  function edit($id){
        $report = Slider::find($id);
        return view('admin.slider.edit',['report'=>$report]);
    }

    public  function update(Request $request){

        $input = Input::only('id','title','file');

        $this->validate($request, [
            'title' => 'required|max:255|min:2',
            'file' => 'required',
        ]);

        $report = Slider::find($input['id']);

        $this->deleteFile('uploads/'.$report->path);
        $filename = $input['file']->store('slider');
        $report->title = $input['title'];
        $report->path=$filename;
        $report->save();
        return redirect()->route('admin_sliders')->with('status', 'Slider is updated.');
    }

    public function delete($id){

        $report = Slider::find($id);
        $this->deleteFile('uploads/'.$report->path);
        $report->delete();

        return redirect()->route('admin_sliders')->with('status', 'Your file is deleted.');
    }

    private function deleteFile($path){
        $file_path= storage_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
