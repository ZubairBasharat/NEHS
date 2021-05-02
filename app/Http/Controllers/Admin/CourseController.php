<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\CourseCategory;
use App\Models\department;
use App\Models\Assignment;
use App\Models\Question;
use App\Models\Worker;
use App\Models\worker_course;
use Illuminate\Http\Request;
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
        $companies=course::all();
        $courses=course::all();
        $course_cat=CourseCategory::all();
        $assigns=worker_course::all();
        $departments=department::all();
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
        $add->description=$request->description;
        $add->cat_id=$request->cat_id;
        $add->department_id=$request->dep_id;
        $add->status=1;
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
        $add->description=$request->description;
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

    public function courseAssignment(Request $request){
        $id= $request->id;
        $data = Assignment::where('course_id',$id)->get();
        
        return view('dashboard2.courseassignment',compact('id','data'));
    }
    public function videoassignment(Request $request){
        $id= $request->id;
        return view('dashboard2.videoassignment',compact('id'));
    }
    public function fileassignment(Request $request){
        $id= $request->id;
        return view('dashboard2.fileassignment',compact('id'));
    }
    public function questionassignment(Request $request){
        $id= $request->id;
        $data = Question::where('course_id',$id)->get();
        return view('dashboard2.questionassignment',compact('id','data'));
    }
}
