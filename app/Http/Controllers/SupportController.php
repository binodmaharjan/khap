<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Notifications\SupportNotify;
use App\Support;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Notification;

class SupportController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index', 'delete']]);
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
        $support = Support::all();

        return view('admin.support.list',['support'=>$support]);

    }

    public function create(){

        $menu = Menu::all();
        return view('user.support',['menu'=>$menu]);
    }

    public function store(Request $request){

       // dd('Heler');
        $input = Input::only('name','email','phone','file','subject');

       //  dd($input);


        //    dd($input);
//       $this->validate($request, [
//            'name' => 'required|max:255|',
//            'email' => 'required',
//            'phone' => 'required',
//            'subject' => 'required',
//            'file'=>'required|image'
//        ]);


        $filename = $input['file']->store('supports');

//        dd($filename);

        $support =new Support();
        $support->name = $input['name'];
        $support->email = $input['email'];
        $support->phone = $input['phone'];
        $support->subject = $input['subject'];
        $support->path=$filename;
        $support->save();
        $users = User::all();

        Notification::send($users, new SupportNotify($support));
        return redirect()->route('main')->with('status', 'Your task has been posted. We will contact you later via phone or email');
    }

    public function delete($id){
        $support = Support::find($id);
        $this->deleteFile('uploads/'.$support->path);
        $support->delete();
        //  route('admin_member_edit',array($member->id))}}

        return redirect()->route('admin_supports')->with('status', 'Support deleted.');
    }

    private function deleteFile($path){

        $file_path= public_path($path);
        if (file_exists($file_path)) {
            File::delete($file_path);
        }
    }
}
