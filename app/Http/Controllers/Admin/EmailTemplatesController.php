<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmailTemplatesController extends Controller
{

public function index(){


    $data=EmailTemplates::all();
    return view('dashboard2.emailtemplates.index',compact('data'));


}
public function edit_email_template($id){


    $data=EmailTemplates::find($id);
    return view('dashboard2.emailtemplates.edit',compact('data'));


}
public function update_email_template(Request $request){


    $update=EmailTemplates::find($request->id);
    $update->name=$request->name;
    $update->email_from=$request->from_email;
    $update->subject=$request->subject;
    $update->descr=$request->body;
    $update->status=$request->status;
    $update->save();
    $data=EmailTemplates::all();
    Session::flash('succesmsg','Successfully updated');
    return view('dashboard2.emailtemplates.index',compact('data'));


}





}
