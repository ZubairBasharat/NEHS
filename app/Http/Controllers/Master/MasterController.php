<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\companie;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MasterController extends Controller
{

    public function index()
    {

        return view('master.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $master=Master::where('email',$request->email)->first();
        if($master){

            if(Hash::check($request->password,$master->password)){
                session()->put('LoggedMaster',$master->id);
                return redirect()->to('master/dashboard');
            }else{
                Session::flash('loginerror','Password Not Matched');
                return redirect()->back();
            }

        }else{
            Session::flash('loginerror','Email Not Matched');
            return redirect()->back();
        }


    }
    public function dashboard(Request $request){
        $companies=companie::all();
        return view('master.dashboard',compact('companies'));


    }
    public function secret_login($id){

        if (Auth::user()){
            Auth::logout();
        }
        $user=User::find($id);
        Auth::login($user);
        return redirect('/');


    }
    public function logout(Request $request){

        if (session()->has('LoggedMaster')){
            session()->pull('LoggedMaster');
            return redirect('master/login');
        }


    }




}
