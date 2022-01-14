<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoLibrary;
use App\Models\VideoLibraryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VideoLibraryCategoryController extends Controller
{
    public function index()
    {
        $categories=VideoLibraryCategory::where('company_id','=',Auth::User()->company_id)->get();;
        return view('dashboard2.partnerlibrary.vidlibcategory',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new VideoLibraryCategory();
        $add->name=$request->name;
        $add->status=1;
        $add->company_id=Auth::user()->company_id;
        $add->save();
        Session::flash('succesmsg', 'Successfully Created');
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
        $data=VideoLibraryCategory::find($id);

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
        $add=VideoLibraryCategory::find($id);
        $add->name=$request->name;
        $add->status=$request->status;
        $add->update();
        Session::flash('succesmsg', 'Successfully updated');
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

        $del=VideoLibraryCategory::find($id);
        $del->delete();
        return redirect()->back();
    }
}
