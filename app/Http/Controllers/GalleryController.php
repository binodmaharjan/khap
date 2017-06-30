<?php

namespace App\Http\Controllers;

use App\Gallery;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


        $gallery=Gallery::all()->sortByDesc("id");

        // return "Slider index";

        return view('admin.gallery.list',['slider'=>$gallery]);
    }

    public function create(){
        return view('admin.gallery.add');
    }

    public function store(Request $request){



        $input = Input::only('title','file','desc');

        $this->validate($request, [
            'title' => 'required|max:255|',
            'desc' => 'required',
            'file' => 'required|image',
        ]);

        $filename = $input['file']->store('gallery');
        $photo =new Gallery();
        $photo->title = $input['title'];
        $photo->desc=$input['desc'];
        $photo->path=$filename;

        $photo->save();

        return redirect()->route('admin_gallery')->with('status', 'Your file is uploaded.');

    }

    public  function edit($id){
        $report = Gallery::find($id);
        return view('admin.gallery.edit',['report'=>$report]);
    }

    public  function update(Request $request){

        $input = Input::only('id','title','file','desc');

        $this->validate($request, [
            'title' => 'required|max:255|min:2',
            'file' => 'required',
        ]);

        $gallery = Gallery::find($input['id']);

        $this->deleteFile('uploads/'.$gallery->path);
        $filename = $input['file']->store('gallery');
        $gallery->title = $input['title'];
        $gallery->desc = $input['desc'];
        $gallery->path=$filename;
        $gallery->save();
        return redirect()->route('admin_gallery')->with('status', 'gallery is updated.');
    }

    public function delete($id){

        $report = Gallery::find($id);
        $this->deleteFile('uploads/'.$report->path);
        $report->delete();

        return redirect()->route('admin_gallery')->with('status', 'Your file is deleted.');
    }

    private function deleteFile($path){
        $file_path= public_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
