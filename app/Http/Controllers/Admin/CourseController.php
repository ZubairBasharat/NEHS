<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcknowledgmentForms;
use App\Models\course;
use App\Models\CourseCategory;
use App\Models\department;
use App\Models\Assignment;
use App\Models\Question;
use App\Models\video_categorie;
use App\Models\VideoLibraryCategory;
use App\Models\Worker;
use App\Models\worker_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=course::where('company_id','=',Auth::User()->company_id)->get();
        $courses=course::where('company_id','=',Auth::User()->company_id)->get();
        $course_cat=CourseCategory::where('company_id','=',Auth::User()->company_id)->get();
        $assigns=worker_course::where('company_id','=',Auth::User()->company_id)->get();
        $departments=department::where('company_id','=',Auth::User()->company_id)->get();
        $workers=Worker::all();
        return view('dashboard2.courselist',compact('companies','assigns','departments','courses','workers','course_cat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new course();
        $add->name=$request->name;
        $add->esp_name=$request->esp_name;
        $add->description=$request->description;
        $add->esp_description=$request->esp_description;
        $add->cat_id=$request->cat_id;
        $add->department_id=$request->dep_id;
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
        $data=course::find($id);
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

//        die('sdfsd');
        $add=course::find($id);
        $add->name=$request->name;
        $add->esp_name=$request->esp_name;
        $add->description=$request->description;
        $add->esp_description=$request->esp_description;
        $add->status=$request->status;
        $add->department_id=$request->dep_id;
        $add->cat_id=$request->cat_id;
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

        $del=course::find($id);
        $del->delete();
        return redirect()->back();
    }

    public function courseAssignment($id,$language){
        $id = $id;
        $questions=Question::where('course_id',$id)->where('lng',$language)->get();
        $video_cats=video_categorie::where('company_id',Auth::user()->company_id)->get();
        $ack_assigments=AcknowledgmentForms::where('course_id',$id)->where('lng',$language)->get();
        $data = Assignment::where('course_id',$id)->where('lng',$language)->get();

        return view('dashboard2.courseassignment',compact('id','data','language','questions','ack_assigments','video_cats'));
    }
    public function videoassignment($id,$language){
        $video_library_categories=video_categorie::where('company_id','=',Auth::User()->company_id)->get();
        $id= $id;
        return view('dashboard2.videoassignment',compact('id','language','video_library_categories'));
    }
    public function fileassignment($id,$language){
        $id= $id;
        return view('dashboard2.fileassignment',compact('id','language'));
    }
    public function questionassignment(Request $request){
        $id= $request->id;
        $data = Question::where('course_id',$id)->get();
        return view('dashboard2.questionassignment',compact('id','data'));
    }
}
