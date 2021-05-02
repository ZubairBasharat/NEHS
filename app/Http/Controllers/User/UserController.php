<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\course;
use App\Models\department;
use App\Models\video_categorie;
use App\Models\VideoLibrary;
use App\Models\Worker;
use App\Models\worker_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=department::all();
        $worker=Worker::where('user_id',Auth::user()->id)->first();
        $assigncourses=worker_course::where('w_id',Auth::user()->user_personel->id)->get();
        $t_courses=worker_course::where('w_id',Auth::user()->user_personel->id)->count();


//        dd($assigncourses);
        return view('dashboard1.User.index',compact('departments','assigncourses','worker','t_courses'));

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

        $videos= Assignment::where('type','=','video')->where('status','=',1)->where('course_id',$id)->get();
        $assinments=Assignment::where('type','=','File')->where('status','=',1)->where('course_id',$id)->get();
        $video_cat=video_categorie::all();
        return view('dashboard1.course-materials',compact('videos','assinments','video_cat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Worker::find($id);
        if ($data->dep_id !='') {
            $data['dep_id'] = departments_byid($data->dep_id)->name;
        }else{
            $data['dep_id'] = 'Not Assigned';

        }
        return response()->json(['datas'=>$data]);
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
        $add=Worker::find($id);

        $add->first_name =$request->first_name ;
        $add->last_name=$request->last_name ;
        $add->gender=$request->gender ;
        $add->email =$request->email ;
        $add->date_of_birth =$request->date_of_birth ;
        $add->hire_date =$request->hire_date ;
        $add->native_language =$request->native_language ;
        $add->phone =$request->phone ;
        $add->title =$request->title ;
//        $add->dep_id=$request->dep_id ;
        $add->job_no =$request->job_no ;
        $add->type =$request->type ;
        $add->em_no =$request->em_no ;
//        $add->status=$request->status;
        if ($request->usr_img == ''){
            $file1='';
        }else{
            $file1=$request->file('usr_img')->store('public/images/users');
            $pic=str_replace("public/images","storage/images",$file1);
            $add->photo=$pic;


        }
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
    }
}
