<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        $rolls=Role::whereNotIn('id', [1,2])->get();;
        return view('dashboard2.users.AddUsers',compact('rolls'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }


    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        Session::put('dep_name',$request->department_id);
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        Session::flash('succesmsg','Import Personel and Send Invitation Successfully');
        return back();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileExport()
    {
        return Excel::download(new UsersExport, 'users-collection.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);


        $c_id=Auth::user()->company_id;
        $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'company_id' => $c_id,
        ]);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        );
        $role= $request->role;
        if ($role == 2) {
            $add_profile = new Worker();
            $add_profile->first_name = $user->name;
            $add_profile->status = 1;
            $add_profile->user_id = $user->id;
            $add_profile->save();

            Mail::send('mails.invite-p',$data, function($message) use($request) {
                $emaildata=\App\Models\EmailTemplates::find(3);

                $message->to($request->email,$request->name)->subject
                ($emaildata->subject);
                $message->from($emaildata->email_from,$emaildata->from_man);
            });
        }
        else{
        Mail::send('mails.invite-m',$data, function($message) use($request) {
                $emaildata=\App\Models\EmailTemplates::find(1);

                $message->to($request->email,$request->name)->subject
                ($emaildata->subject);
                $message->from($emaildata->email_from,$emaildata->from_man);
            });

        }
        $user->assignRole($role);
        Session::flash('succesmsg','User Created Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);

        return response()->json($data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        die('sdfsd');
        $add = User::find($id);
        $add->name = $request->name;
        $add->description = $request->description;
        $add->status = $request->status;
        $add->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $del = User::find($id);
        $del->delete();
        return redirect()->back();
    }
}
