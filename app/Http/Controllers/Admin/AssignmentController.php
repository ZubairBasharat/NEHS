<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Assignment;
use App\Models\AssignQuestion;
use App\Models\AssignCommon;
use App\Models\Worker;
use App\Models\worker_course;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addassignmentv(Request $request){
        if($request->has('file')){

    
            $video_file =  time().'.'.$request->file->extension(); 
       
            $request->file->move(public_path('images/assignments/video'), $video_file);
     
         }
            $as= new Assignment;
            $id = $request->id;
            $as->title = $request->title;
            $as->course_id = $request->id;
            $as->description= $request->description;
            $as->type= 'video';
            $as->status= '0';
           
            
             
             $as->file= $video_file;
             $as->save();
             return redirect('course');
    }

    public function addassignmentf(Request $request){
        if($request->has('file')){

    
            $video_file =  time().'.'.$request->file->extension(); 
       
            $request->file->move(public_path('images/assignments/file'), $video_file);
     
         }
            $as= new Assignment;
            $id = $request->id;
            $as->title = $request->title;
            $as->course_id = $request->id;
            $as->description= $request->description;
            $as->type= 'File';
            $as->status= '0';
           
            
             
             $as->file= $video_file;
             $as->save();
             return redirect('course');
    }
    public function addassignmentq(Request $request){
       $id =  $request->id;
       
       $question = $request->questions;
     
       foreach($question as $qq){
        $aq= new AssignQuestion;
        $q= $qq;
        $aq->course_id = $id;
        $aq->question_id= $q;
 
        $save= $aq->save();
       }
      
       if($save){
        return redirect('course');
       }
       
    }
    public function assigncommon(Request $request){
//        dd($request->all());
//        $save= new AssignCommon;
//        $save->course_id = $request->course_id;
//        $save->department_id = $request->department_id;
//
//        $save->save();
        $workers=Worker::where('dep_id',$request->department_id)->get();
        if (count($workers) > 0){
            foreach ($workers as $worker){
                $already=worker_course::where('w_id',$worker->id)->where('course_id',$request->course_id)->get();
                if(count($already) > 0){}else {
                    $add = new worker_course();
                    $add->w_id = $worker->id;
                    $add->course_id = $request->course_id;
                    $add->language = 'English';
                    $add->save();
                }
            }
        }
        Session::flash('succesmsg','Successfully Course Assigns');

        return redirect('personnel');

    }


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
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $data=Assignment::find($request->id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
//        dd($request->all());
        $data=Assignment::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        Session::flash('succesmsg','Updated Successfully');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
    public function destroy_assignment(Request $request)
    {
        //
//        dd($request->all());
        $data = Assignment::find($request->a_id)->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }

}
