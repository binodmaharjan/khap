<?php

namespace App\Http\Controllers;

use App\Kagajat;
use App\Menu;
use App\Notifications\SupportNotify;
use App\Support;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use ZipArchive;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class SupportController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index', 'delete','download']]);
        // Alternativly
      //  $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function notificationClicked()
    {

        if (Auth::check())
        {
            $user = User::find(Auth::user()->id);

//            dd($user);

            foreach ($user->unreadNotifications as $notification) {
                $notification->markAsRead();
            }
        }


        return redirect()->route('admin_supports') ;

    }

    public function index(){
        $support = Support::orderBy('created_at','DESC')->get();

        return view('admin.support.list',['support'=>$support]);

    }

    public function create(){

        $menu = Menu::all();
        $kagajat= Kagajat::all();
        return view('user.support',['menu'=>$menu,'kagajat'=>$kagajat]);
    }

    public function store(Request $request){

       // dd('Heler');
        $input = Input::only('name','email','phone','file','subject');


       $this->validate($request, [
            'name' => 'required|max:255|',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
           array(
               'file'  => 'required|max:1024'
           )


        ]);



       $filename = Str::random(30);
//       dd($filename);

       foreach ($input['file'] as $file){


       //    $file->store('nibedan');
           $file->storeAs('nibedan/'.$filename,$file->getClientOriginalName());
        }


//        dd($filename);

        $support =new Support();
        $support->name = $input['name'];
        $support->email = $input['email'];
        $support->phone = $input['phone'];
        $support->subject = $input['subject'];
        $support->path=$filename;
        $support->save();
        $users = User::all();
//
        Notification::send($users, new SupportNotify($support));
        return redirect()->route('main')->with('status', 'Your task has been posted. We will contact you later via phone or email');
    }

    public function delete($id){
        $support = Support::find($id);
        $this->deleteFile('uploads/nibedan/'.$support->path);
        $support->delete();
        return redirect()->route('admin_supports')->with('status', 'Support deleted.');
    }

    private function deleteFile($path){

        $file_path= storage_path($path);
        if (file_exists($file_path)) {
            // File::delete($file_path);
            File::deleteDirectory($file_path, true);
        }
    }

    public function download($folder){

        $path = storage_path('uploads/nibedan/'.$folder);
        $log_files = File::glob($path.'/*.zip');
        if(!empty($log_files)){
            if(file_exists($log_files[0])){
                return Response::download($log_files[0]);
            }
        }
        $zipFileName = Carbon::now().'.zip';
        $fullpath  = $path.'/'.$zipFileName;
       // dd($filename);
        $zip = new \ZipArchive();
        $zip->open($fullpath, ZipArchive::CREATE);
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path),
            RecursiveIteratorIterator::LEAVES_ONLY
        );
        foreach ($files as $name => $file) {
            if (! $file->isDir()) {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($path) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();

        if(file_exists($fullpath)){
            return Response::download($fullpath);
        }else{
            abort(404);
        }
    }
}
