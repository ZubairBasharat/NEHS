<?php

namespace App\Http\Controllers;

use App\Models\Admin\Folder;
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
        $folders=Folder::all();
        return view('dashboard2.resources.index',compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
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
//        dd($request->all());
//        die();
        if($request->action == 0){

            $already=Folder::where('name',$request->folder_name)->get();
            if(count($already) > 0){

                Session::flash('errormsg', 'Folder Already Exits');

            }else {
            $folder = new Folder();
            $folder->name = $request->folder_name;
            $folder->add_by = Auth::user()->id;
            $folder->save();
            $path = public_path().'/resources/'.$request->folder_name;
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
//                if ($request->o_file->extension() == 'pdf') {
                    $file = $request->file('o_file')->getClientOriginalName() . '-' . time() . '.' . $request->o_file->extension();

                    $request->o_file->move(public_path() . '/resources/' . $request->folder, $file);
                    Session::flash('succesmsg', 'File Uploaded Sucessfully');

                    return redirect()->back();
                }else{
                    Session::flash('errormsg', 'Choose only Pdf');

                    return redirect()->back();
                }
//            }
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
        //
    }
}
