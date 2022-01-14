<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Departments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies=department::where('company_id','=',Auth::User()->company_id)->orderBy('name', 'ASC')->get();
        if (Auth::user()->hasRole('Admin')){
            return view('dashboard2.departments',compact('companies'));

        }else{
            return view('dashboard1.departments',compact('companies'));

        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $add=new department();
        $add->name=$request->name;
        $add->description=$request->description;
        $add->status=1;
        $add->company_id=Auth::user()->company_id;
        $add->save();
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
        //
        $data=department::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $add=department::find($id);
        $add->name=$request->name;
        $add->description=$request->description;
        $add->status=$request->status;
        $add->update();
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
        $del=department::find($id);
        $del->delete();
        return redirect()->back();
    }
}
