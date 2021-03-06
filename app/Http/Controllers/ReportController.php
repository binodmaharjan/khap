<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;
use FileSystem;
use Storage;
use File;
class ReportController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $report=Report::all()->sortByDesc("id");

        return view('admin.report.list',['report' => $report]);
    }

    public function create(){
        return view('admin.report.add');
    }

    public function store(Request $request){

        $input = Input::only('title','file','type','keywords');

        $this->validate($request, [
            'title' => 'required|max:255|min:2',
            'keywords'=>'required',
            'file' => 'required',
        ]);

//        dd($input['file']);

        if(count($input['file'])){
            foreach($input['file'] as $file){
                $filename = $file->store('reports');
            }
        }

        $report =new Report();
        $report->title = $input['title'];
        $report->path=$filename;
        $report->type = $input['type'];
        $report->keywords = $input['keywords'];
        $report->save();

        return redirect()->route('admin_reports')->with('status', 'Your file is uploaded.');

    }

    public  function edit($id){
       $report = Report::find($id);
       return view('admin.report.edit',['report'=>$report]);
    }

    public  function update(Request $request){

        $input = Input::only('id','title','file','type','keywords');

        $this->validate($request, [
            'title' => 'required|max:255|min:2',
            'keywords'=>'required',

        ]);

         $report = Report::find($input['id']);
        $report->title = $input['title'];
        $report->type = $input['type'];
        $report->keywords = $input['keywords'];
        if(!empty($input['file'])) {
            $this->deleteFile('uploads/'.$report->path);
            $filename = $input['file']->store('reports');
            $report->path=$filename;
        }

        $report->save();
        return redirect()->route('admin_reports')->with('status', 'Report is updated.');
    }

    public function delete($id){

        $report = Report::find($id);

        $file_path= storage_path('uploads/'.$report->path);

        if (file_exists($file_path)) {
            File::delete($file_path);
        }

        $report->delete();

        return redirect()->route('admin_reports')->with('status', 'Your file is deleted.');
    }

    private function deleteFile($path){
        $file_path= storage_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
