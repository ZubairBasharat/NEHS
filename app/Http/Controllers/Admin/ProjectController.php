<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Projects::where('company_id','=',Auth::User()->company_id)->get();
        return view('dashboard2.projects.index',compact('types'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new Projects();
        $add->name=$request->name;
        $add->status=1;
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
        $data=Projects::find($id);
        return response()->json($data);
        //
    }

    public function update(Request $request,$id)
    {

        $add=Projects::find($id);
        $add->name=$request->name;
        $add->status=$request->status;
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

        $del=Projects::find($id);
        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
}
