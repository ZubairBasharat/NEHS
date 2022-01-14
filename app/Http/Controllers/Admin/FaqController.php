<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ques=faq::where("company_id",Auth::user()->company_id)->get();
        if (Auth::user()->hasRole('Admin'))
        {
            $extend='dashadmin';
        }else{
            $extend='dash1';

        }
      return view('partial.faqs',compact('ques','extend'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $question=$request->q;
     $ans=$request->ans;
     $company_id=Auth::user()->company_id;
     $add=new faq();
     $add->question=$question;
     $add->answer=$ans;
     $add->company_id=$company_id;
     $add->save();
     return redirect()->back();


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
        $data=faq::find($id);
        return $data;
        //
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

        $question=$request->q;
        $ans=$request->ans;
        $company_id=Auth::user()->company_id;
        $add=faq::find($request->id);
        $add->question=$question;
        $add->answer=$ans;
        $add->save();
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

        $del=faq::find($id);
        $del->delete();
        return redirect()->back();
    }
}
