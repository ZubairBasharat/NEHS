<?php

namespace App\Http\Controllers;

use App\Models\AcknowledgmentForms;
use App\Models\Admin\Folder;
use App\Models\Admin\WorkerHasForms;
use App\Models\Form;
use App\Models\ProjectHasForm;
use App\Models\Projects;
use App\Models\Resource;
use App\Models\User;
use App\Models\Worker;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

//use App\Mail\FormSubmitted;

class FormBuilder extends Controller
{
    /**
     * show the builder
     */

    public function index(){


            $forms=Form::where('company_id',Auth::user()->company_id)->get();
            $projects=Projects::where('company_id',Auth::user()->company_id)->get();
            $employee=User::role('User')->where('company_id',Auth::user()->company_id)->get();
            $file=Resource::where('company_id',Auth::user()->company_id)->get();
            $folders=Folder::where('type','form')->where('company_id',Auth::user()->company_id)->get();

            return view('dashboard2.forms.index',compact('file','employee','folders','forms','projects'));

    }
    public function view($id){

            $forms=Form::find($id);
            $data=$forms->data;
        return view('test',compact('data'));

    }
    public function added_to(Request $request){



        if ($request->type == 'worker'){

            $check=WorkerHasForms::where('worker_id',$request->worker_id)->where('form_id',$request->form_id)->count();
            if ($check > 0){
                Session::flash('errormsg','Already Asigned');
                return redirect()->back();
            }
            $new=new WorkerHasForms();
            $new->worker_id=$request->worker_id;
            $new->form_id=$request->form_id;
            $new->save();

        }
        if ($request->type == 'project'){

            $users=worker::where('company_id',Auth::user()->company_id)->where('job_no',$request->project)->get();
          foreach ($users as $user){
              $check=WorkerHasForms::where('worker_id',$user->user->id)->where('form_id',$request->form_id)->count();
              if ($check < 1){
                  $new = new WorkerHasForms();
                  $new->worker_id = $user->user->id;
                  $new->form_id = $request->form_id;
                  $new->save();
              }


          }



        }

        if ($request->type == 'whofill'){


            $edit=Resource::where('form_id',$request->form_id)->first();
            $edit->type=$request->whofill;
            $edit->save();

            Session::flash('succesmsg','Change Successfully');

            return redirect()->back();

        }

        Session::flash('succesmsg','Assign Successfully');
        return redirect()->back();

    }
    public function destroy($id){

            $del=Form::find($id);
            $del->delete();
            Session::flash('succesmsg','Deleted Successfully');
            return redirect()->back();

    }
    public function show(Request $request){


        $data=$request->formm;
        $add = new Form();
        $add->form_name=$request->f_name;
        $add->json=$request->jsondata;
        $add->company_id=Auth::user()->company_id;
        $add->data=$data;
        $add->save();

        $data=$add->data;
        $name=$add->form_name;

        $folder=Folder::find($request->folder);

        $pdf = PDF::loadview('test',compact('data'));
        $path = public_path('forms/'.$folder->name); // <--- folder to store the pdf documents into the server;
        $fileName =  $name.'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        sleep(2);

        $addtoresource=new Resource();
        $addtoresource->name=$fileName;
        $addtoresource->folder_id=$request->folder;
        $addtoresource->form_id=$add->id;
        $addtoresource->company_id=Auth::user()->company_id;
        $addtoresource->save();


        return redirect()->route('form.index');


    }

    public function update(Request $request){


        $data=$request->formm;
        $add = Form::find($request->form_id);

        $add->form_name=$request->f_name;
        $add->json=$request->jsondata;
        $add->data=$data;
        $add->save();

        $data=$add->data;
        $name=$add->form_name;

        $folder=Resource::where('form_id',$request->form_id)->first();

        $pdf = PDF::loadview('test',compact('data'));
        $path = public_path('forms/'.folder_byid($folder->folder_id)->name); // <--- folder to store the pdf documents into the server;
        $fileName =  $name.'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        sleep(2);



        if (Auth::user()->hasRole('Admin')){
            return redirect()->route('form.index');

        }else{
            return redirect()->to('user-forms');

        }


    }
    public function save(Request $request){

//        dd($request->all());
        $data=$request->all();

        return view('pdf',compact('data'));


    }


    public function showBuilder() {

        $folders=Folder::where('type','form')->get();
        return view('builder',compact('folders'));
    }

    public function edit($id) {


        $data=Form::find($id);
        return view('edit-form',compact('data'));
    }
    public function ack_forms() {

        $file=AcknowledgmentForms::all();
        return view('dashboard2.ackforms.index',compact('file'));
    }
    public function ack_form_single($id)
    {

        $file=Form::find($id);
        return view('dashboard2.ackforms.view-single',compact('file'));

    }





}
