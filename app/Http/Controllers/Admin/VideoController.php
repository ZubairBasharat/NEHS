<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\video_categorie;
use Illuminate\Http\Request;
use App\Models\VideoLibrary;
use App\Models\course;
use App\Models\department;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos= VideoLibrary::orderBy('id','DESC')->get();
        $departments=department::all();
        $courses=course::all();
        $video_cat=video_categorie::all();
        return view('dashboard2.videolibrary',compact('videos','courses','video_cat','departments'));
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
    
    if($request->has('videofile')){

    
       $video_file =  time().'.'.$request->videofile->extension(); 
  
       $request->videofile->move(public_path('images/videos'), $video_file);

       $video_thumbnail = time().'.'.$request->videothumbnail->extension(); 
  
       $request->videothumbnail->move(public_path('images/videos/thumbnails'), $video_thumbnail);
    }
       $storeFile = new VideoLibrary;
       $storeFile->video_title = $request->video_title;
       $storeFile->video_desc = $request->video_desc;
       $storeFile->course_id = $request->course_id;
       $storeFile->video_cat_it = $request->v_cat_id;
       $storeFile->department_id = $request->department_id;
       $storeFile->video_file = $video_file;
       $storeFile->video_thumbnail = $video_thumbnail;
       $storeFile->language = $request->language;
       $storeFile->save();
  
       return redirect()->route('video-library.index');
//       ->with('success_msg','Video has been Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=VideoLibrary::find($id);

        return view('dashboard2.single-video',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        
        $del=VideoLibrary::find($id);
        $del->delete();
        return redirect()->back();
    }
}
