<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard2');
    }
    public function dashboard1()
    {

        return view('dashboard1.dashboard');
    }
    public function changepass()
    {

        $user =User::find(Auth::user()->id);

        return view('dashboard1.user-profile',compact('user'));
    }
    public function savepass(Request $request)
    {
        $this->validate($request, [

            'new' => 'min:8|different:password',
            'confirm' => 'min:8|required_with:new|same:new',
            'old' => 'required'
        ]);


        $user =User::find(Auth::user()->id);
        $pass=$user->password;

        if (Hash::check($request->old, $user->password)) {
            Session::flash('succesmsg','Updated Successfully!');
            $user->password=Hash::make($request->new);
            $user->save();
            return redirect()->back();

        }else{
            Session::flash('errormsg','Your old Password is Incorrect!');

            return redirect()->back();

        }


    }

    public function savedata(Request $request)
    {


        $user =User::find(Auth::user()->id);
        $user->name=$request->name;
        if ($request->usr_img == ''){
            $file1='';
        }else{
            $file1=$request->file('usr_img')->store('public/img/logo');
            $pic=str_replace("public/img","storage/img",$file1);
            $user->photo=$pic;


        }
        $user->update();
        Session::flash('succesmsg','Updated Successfully!');
        return redirect()->back();

    }


}
