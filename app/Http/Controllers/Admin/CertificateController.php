<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\CertificatesType;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=CertificatesType::where('company_id','=',Auth::User()->company_id)->OrderBy('name','ASC')->get();
        $certificates=Certificate::where('company_id','=',Auth::User()->company_id)->OrderBy('course_type','ASC')->get();
        $courses=course::where('company_id','=',Auth::User()->company_id)->get();
        return view('dashboard2.certificates.index',compact('certificates','courses','types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new Certificate();
        $add->course_id=$request->course_id;
        $add->course_type=$request->type;
        $add->issuer=$request->issuer;
        $add->ticket=$request->ticket;
        $add->expiray_date=$request->expiray;
        $add->accuqired=$request->acquired;
        $add->company_id=Auth::user()->company_id;
        $add->save();
        Session::flash('succesmsg','Added Successfully');
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data=Certificate::find($id);
        return response()->json($data);
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

//        dd($request->all());
        $add=Certificate::find($id);

        $add->course_id=$request->course_id;
        $add->course_type=$request->type;
        $add->issuer=$request->issuer;
        $add->ticket=$request->ticket;
        $add->expiray_date=$request->expiray;
        $add->accuqired=$request->acquired;
        $add->update();
        Session::flash('succesmsg','Updated Successfully');
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

        $del=Certificate::find($id);
        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
}
