<?php

namespace App\Http\Controllers;

use App\Models\Admin\Folder;
use App\Models\Admin\WorkerHasForms;
use App\Models\Form;
use App\Models\ProjectHasForm;
use App\Models\Resource;
use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file=\App\Models\Resource::all();
        $folders=Folder::where('type','resource')->get();
        return view('dashboard2.resources.index',compact('folders','file'));
    }
    public function index2(){

        $file=\App\Models\Resource::all();
        $folders = Folder::where('type','resource')->get();
        if (Auth::user()->hasRole('User')) {

            $project_id = Auth::user()->user_personel->job_no;
            $user_forms = WorkerHasForms::where('worker_id',Auth::user()->id)->get();
        }else {
            $user_forms = '';
        }
        return view('dashboard1.resources.resources',compact('folders','file','user_forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $res=Resource::where('folder_id',$request->folder['id'])->get();
        $data=view('partial.folder-files',compact('res'));

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->action == 0){

            $already=Folder::where('name',$request->folder_name)->get();
            if(count($already) > 0){

                Session::flash('errormsg', 'Folder Already Exits');

            }else {
            $folder = new Folder();
            $folder->name = $request->folder_name;
            $folder->type = $request->type;
            $folder->company_id = Auth::user()->company_id;
            $folder->save();
            $path = public_path().'/forms/'.$request->folder_name;
            File::makeDirectory($path, $mode = 0777, true, true);
            Session::flash('succesmsg', 'Folder Added Sucessfully');
        }
        return redirect()->back();

    }
        if ($request->action == 1){
            if ($request->folder == ''){
                Session::flash('errormsg', 'Please Choose Folder');
                return redirect()->back();

            }
            if ($request->o_file == ''){
                Session::flash('errormsg', 'Please Choose File');
                return redirect()->back();

            }
            if($request->has('o_file')){

                    $folder=Folder::find($request->folder);
                    $file = $request->file('o_file')->getClientOriginalName();
                    $request->o_file->move(public_path() . '/resources/' . $folder->name, $file);

                    $doc = new Resource();
                    $doc->name = $file;
                    $doc->folder_id = $request->folder;
                     $doc->company_id = Auth::user()->company_id;
                    $doc->save();
                    Session::flash('succesmsg', 'File Uploaded Sucessfully');

                    return redirect()->back();
                }else{
                    Session::flash('errormsg', 'Choose only Pdf');

                    return redirect()->back();
                }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


       $file=Resource::find($id);
       $signc=Signature::where('file_id',$id)->where('user_id',Auth::user()->id)->count();

       if($signc < 1){

           $add=new Signature();
           $add->user_id=Auth::user()->id;
           $add->file_id=$id;
           $add->save();
       }
        $data=Form::find($file->form_id);
        $sign=Signature::where('file_id',$id)->where('user_id',Auth::user()->id)->first();
        $allsign=Signature::where('file_id',$id)->get();
        return view('dashboard1.resources.view-single',compact('allsign','file','sign','data'));

    }


    public function sign(Request $request)
    {
        $add=Signature::where('file_id',$request->f_id)->where('user_id',Auth::user()->id)->first();
        $add->user_id=Auth::user()->id;
        $add->sign=$request->img;
        $add->file_id=$request->f_id;
        $add->save();
        echo 'ok';

    }
    public function v_all_signs($id)
    {

        $sign=Signature::where('file_id',$id)->get();
        return view('dashboard2.resources.view-all-signs',compact('sign'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $file=Resource::find($id);
        return view('dashboard2.resources.view-single',compact('file'));

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del=Resource::find($id);
       $projecthasform=WorkerHasForms::where('form_id',$del->form_id)->delete();
       $del->delete();
        Session::flash('succesmsg', 'Successfully Accept Invitation');
        return redirect()->back();

    }
    public function folder_delete(Request $request)
    {
        $del=Folder::find($request->folder_id);
        $path = public_path().'/resources/'.$del->name;

         File::deleteDirectory($path);
        $res=Resource::where('folder_id',$request->folder_id)->delete();

        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();

    }
}
