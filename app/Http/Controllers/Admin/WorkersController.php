<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CourseResults;
use App\Models\department;
use App\Models\Worker;
use App\Models\course;
use App\Models\worker_course;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=department::all();
        $workers =Worker::all();
        $courses =course::all();
        $assigncourses=worker_course::all();
        return view('dashboard2.users.personnel',compact('departments','assigncourses','workers','courses'));

    }

    public function userindex()
    {
        $departments=department::all();
        $workers =Worker::all();
        $assigncourses=worker_course::all();
        return view('dashboard1.userpersonnel',compact('departments','assigncourses','workers'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new Worker();
        $add->first_name =$request->first_name ;
        $add->last_name=$request->last_name ;
        $add->gender=$request->gender ;
        $add->email =$request->email ;
        $add->date_of_birth =$request->date_of_birth ;
        $add->hire_date =$request->hire_date ;
        $add->native_language =$request->native_language ;
        $add->phone =$request->phone ;
        $add->title =$request->title ;
        $add->dep_id=$request->dep_id ;
        $add->job_no =$request->job_no ;
        $add->type =$request->type ;
        $add->em_no =$request->em_no ;
        $add->status=1;

        $add->save();
        return redirect()->route('personnel.index');

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
        $data=Worker::find($id);
        $cousres=worker_course::where('w_id',$id)->get();
        $count=worker_course::where('w_id',$id)->count();
        $allcousres='';
        if($count > 0){
        foreach ($cousres as $cousre) {
            $res=CourseResults::where('course_id',$cousre->id)->where('worker_id',$id)->first();
            $take=CourseResults::where('course_id',$cousre->id)->where('worker_id',$id)->count();
            if ($take > 0){
                $resgrade=$res->grade;
            }else{
                $resgrade='Not Attempted';

            }

                $c_name = course_byid($cousre->course_id)->name ?: '';
            $c_description = course_byid($cousre->course_id)->description ?: '';
            $allcousres .= "<tr class='w-100'><td>$c_name</td>
                    <td>Admin</td>
                    <td>$c_description</td>
                    <td>$cousre->language</td>
                    <td>$cousre->created_at</td>
                    <td>$cousre->created_at</td>
                    
                    <td><a class='btn btn-primary'>$resgrade</a></td>

                    </tr>";
        }}
        else{
            $allcousres="<tr><td  colspan='7'>No Course Assigned Yet</td></tr>";
        }
        return response()->json(['data'=>$data,'courses'=>$allcousres,'total'=>$count]);
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
//        dd($request->all());
        $add->first_name =$request->first_name ;
        $add->last_name=$request->last_name ;
        $add->gender=$request->gender ;
        $add->email =$request->email ;
        $add->date_of_birth =$request->date_of_birth ;
        $add->hire_date =$request->hire_date ;
        $add->native_language =$request->native_language ;
        $add->phone =$request->phone ;
        $add->title =$request->title ;
        $add->dep_id=$request->dep_id ;
        $add->job_no =$request->job_no ;
        $add->type =$request->type ;
        $add->em_no =$request->em_no ;
        if ($request->usr_img == ''){
            $file1='';
        }else{
            $file1=$request->file('usr_img')->store('public/images/users');
            $pic=str_replace("public/images","storage/images",$file1);
            $add->photo=$pic;


        }

        $add->status=$request->status;

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
        $del=Worker::find($id);
        $del->delete();
        return redirect()->back();
    }
}
