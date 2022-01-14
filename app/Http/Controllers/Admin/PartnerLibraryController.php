<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerLibrary;
use App\Models\VideoLibraryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class PartnerLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=VideoLibraryCategory::where('company_id','=',Auth::User()->company_id)->get();
        $videos= PartnerLibrary::orderBy('id','DESC')->where('company_id','=',Auth::User()->company_id)->get();;

        if (Auth::user()->hasRole('Admin')) {
            return view('dashboard2.partnerlibrary.index', compact('videos', 'categories'));
        }else{
            return view('dashboard1.partnerlibrary.index', compact('videos', 'categories'));

        }

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


        $url = $request->videolink;

        if(empty($url)) {

            if ($request->has('videofile')) {


                $video_file = time() . '.' . $request->videofile->extension();

                $request->videofile->move(public_path('assets/patnerlibrary/'), $video_file);


            }

        }else{


            $extension = pathinfo($url, PATHINFO_EXTENSION);
            $video_file = rand().'.'. $extension;
            try {
                $file = file_get_contents($url);
                file_put_contents(public_path().'/assets/patnerlibrary/'.$video_file, $file);


            } catch (\Exception $e) {
                Session::flash('errormsg','Invalid link or Permission Denied');

            }
        }

        $video_thumbnail = time() . '.' . $request->videothumbnail->extension();
        $request->videothumbnail->move(public_path('/assets/patnerlibrary/thumbnails/'), $video_thumbnail);

        $new=new PartnerLibrary();
        $new->title= $request->video_title;
        $new->cat_id= $request->cat;
        $new->descr= $request->video_desc;
        $new->video_type=$request->type;
        $new->thumbnail= $video_thumbnail;
        if($request->type==2){
            $new->video=$url;
        }else {
            $new->video = $video_file;
        }
        $new->company_id=Auth::user()->company_id;
        $new->save();
        Session::flash('succesmsg','Suuccefully added');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=PartnerLibrary::find($id);
        if(Auth::user()->hasRole('Admin')) {
            return view('dashboard2.partnerlibrary.show-single', compact('video'));

        }else {
            return view('dashboard1.partnerlibrary.show-single', compact('video'));

        }
    }

    public function view()
    {
        $categories=VideoLibraryCategory::all();
        $videos= PartnerLibrary::orderBy('id','DESC')->get();
        return view('dashboard1.partnerlibrary.index',compact('videos','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PartnerLibrary::find($id);
        return view('dashboard2.partnerlibrary.edit',compact('data'));
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

        $update=PartnerLibrary::find($id);
        $update->title= $request->video_title;
        $update->descr= $request->video_desc;
        $url = $request->videolink;

        if(empty($url)) {

            if ($request->has('videofile')) {


                $video_file = time() . '.' . $request->videofile->extension();

                $request->videofile->move(public_path('assets/patnerlibrary/'), $video_file);
                $update->video= $video_file;

            }
        }else{


            $extension = pathinfo($url, PATHINFO_EXTENSION);
            $video_file = rand().'.'. $extension;
            try {
                $file = file_get_contents($url);
                file_put_contents(public_path().'assets/patnerlibrary/'.$video_file, $file);
                $update->video= $video_file;

            } catch (\Exception $e) {
                Session::flash('errormsg','Invalid link or Permission Denied');

            }

        }
        if ($request->has('videothumbnail')) {
            $video_thumbnail = time() . '.' . $request->videothumbnail->extension();
            $request->videothumbnail->move(public_path('/assets/patnerlibrary/thumbnails/'), $video_thumbnail);
            $update->thumbnail = $video_thumbnail;
        }
        $update->save();
        Session::flash('succesmsg','Suuccefully Updated');
        return redirect()->route('partnerlibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=PartnerLibrary::find($id);
        $del->delete();
        Session::flash('succesmsg','Suuccefully Deleted');
        return redirect()->back();
    }
}
