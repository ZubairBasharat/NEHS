<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\PartnerLibrary;
use App\Models\video_categorie;
use Illuminate\Http\Request;
use App\Models\VideoLibrary;
use App\Models\course;
use App\Models\department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos= VideoLibrary::orderBy('id','DESC')->where('company_id','=',Auth::User()->company_id)->get();
        $categories=video_categorie::orderBy('name','asc')->where('company_id','=',Auth::User()->company_id)->get();
        $departments=department::where('company_id','=',Auth::User()->company_id)->get();
        $courses=course::where('company_id','=',Auth::User()->company_id)->get();
        $video_cat=video_categorie::where('company_id','=',Auth::User()->company_id)->get();
        return view('dashboard2.videolibrary',compact('categories','videos','courses','video_cat','departments'));
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


        if (empty($request->videofile) AND empty($request->videolink)){
            Session::flash('errormsg','choose video/link');
            return redirect()->back();
        }


        $video_id = $request->videolink;

        $api_key = "AIzaSyAPQKBhoyH0cgY_kCOA_91uqOKpjCFz6A4";

        $vinfo = "https://www.googleapis.com/youtube/v3/videos?id=$video_id&key=$api_key&part=snippet,contentDetails,statistics,status";
        $json = file_get_contents($vinfo);
        $getData = json_decode( $json , true);

        if ($getData['items'] == []){
            Session::flash('warnmsg','Your Youtube Video ID Is Incorrect');
            return redirect()->back();
            }
//        if(empty($url)) {
//
//            if ($request->has('videofile')) {
//
//
//                $video_file = time() . '.' . $request->videofile->extension();
//
//                $request->videofile->move(public_path('images/videos'), $video_file);
//
//
//            }
//
//        }else{
//
//
//            $extension = pathinfo($url, PATHINFO_EXTENSION);
//            $video_file = rand().'.'. $extension;
//            try {
//                $file = file_get_contents($url);
//                file_put_contents(public_path().'/images/videos/'.$video_file, $file);
//
//
//            } catch (\Exception $e) {
//                Session::flash('errormsg','Invalid link or Permission Denied');
//
//            }
//        }

        $video_thumbnail = time() . '.' . $request->videothumbnail->extension();

        $request->videothumbnail->move(public_path('images/videos/thumbnails'), $video_thumbnail);


       $storeFile = new VideoLibrary;
       $storeFile->video_title = $request->video_title;
       $storeFile->video_desc = $request->video_desc;
       $storeFile->course_id = $request->course_id;
       $storeFile->video_cat_it = $request->v_cat_id;
       $storeFile->department_id = $request->department_id;
       $storeFile->type = 'youtube';
       $storeFile->video_file = $video_id;
       $storeFile->video_thumbnail = $video_thumbnail;
       $storeFile->language = $request->language;
       $storeFile->company_id=Auth::user()->company_id;
       $storeFile->save();
        Session::flash('succesmsg','Suuccefully added');
       return redirect()->route('video-library.index');
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
    public function play_youtube_video(Request $request)
    {
        if ($request->type == 'from_videos'){
            $video=VideoLibrary::find($request->video_id);
            $file=$video->video_file;
        }else{
            $video=Assignment::find($request->video_id);
            $file=$video->file;
        }

        $view =view('partial.playyoutube',compact('video','file'));

        return $view;

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
