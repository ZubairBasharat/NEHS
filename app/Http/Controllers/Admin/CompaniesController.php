<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\companie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=companie::all();
        return view('master.companies',compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exist=User::where('email',$request->email)->first();
        if($exist){
            Session::flash('errormsg','Email Already Taken');
            return redirect()->back();
        }

        $add=new companie();
        $add->name=$request->name;
        $add->description=$request->description;
        $add->status=1;

        $logo =$request->name.time().'.'.$request->clogo->extension();
        $request->clogo->move(public_path('company/logos'), $logo);

        $add->logo=$logo;
        $add->save();

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->email_verified_at=date("Y-m-d H:i:s");
        $user->password=Hash::make($request->password);
        $user->company_id=$add->id;
        $user->save();

        $user->assignRole(1);

        Session::flash('succesmsg','Successfully Created');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=companie::find($id);
        $company=$data->admin->email;
        return response()->json(['company'=>$data,'companylog'=>$company]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {




        $add=companie::find($id);
        $add->name=$request->name;
        $add->description=$request->description;
        $add->status=$request->status;

        if ($request->edit_logo !='') {
            $image_path=public_path('company/logos/').$add->logo;
            if (File::exists($image_path)){
                unlink($image_path);
            }
            $logo = $request->name . time() . '.' . $request->edit_logo->extension();
            $request->edit_logo->move(public_path('company/logos'), $logo);
            $add->logo=$logo;
        }
        $add->update();
        Session::flash('succesmsg','Successfully Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $del=companie::find($id);
        $delusers=User::where('company_id',$id)->delete();
        $del->delete();
        return redirect()->back();
    }
}
