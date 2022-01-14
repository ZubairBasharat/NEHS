<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\CourseStatistics;
use App\Http\Controllers\Controller;
use App\Models\AcknowledgmentForms;
use App\Models\Assignment;
use App\Models\CourseResults;
use App\Models\Question;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\Session;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseTestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $user = User::find(Auth::user()->id);
        if($user->hasAnyRole(3,4,5,6,7,8,9,10)){
            $stats=CourseResults::where('grade','pass')->where("company_id",Auth::user()->company_id)->get();
            $pass=CourseResults::where('grade','pass')->where("company_id",Auth::user()->company_id)->count();
            $fail=CourseResults::where('grade','fail')->where("company_id",Auth::user()->company_id)->count();

        }else{
            $stats=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('grade','!=',null)->get();
            $pass=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('grade','pass')->count();
            $fail=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('grade','fail')->count();
        }
        return view('dashboard1.Coursetest.coursestat',compact('stats','pass','fail'));
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

        $submited=$request->all();
        $corect=0;
        $wrong=0;
        $take=0;
        $worker=Worker::find(Auth::user()->user_personel->id);
        $worker_lng=$worker->native_language;
        if($worker_lng == 'Spanish'){
            $w_lng='esp';
        }else{
            $w_lng='eng';
        }
        $total=Question::where('course_id',$request->course_id)->where('lng',$w_lng)->count();
        $add=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('course_id',$request->course_id)->first();

        if($total > 0) {
            foreach ($submited as $key => $value) {
                if ($key != '_token') {
                    if ($key != 'course_id') {
                        $question = Question::find($key);

                        if ($question->type == 'question') {
                            if ($question->answer == $value) {
                                $corect++;
                            } else {
                                $wrong++;

                            }
                        } else {
                            if ($question->true_false == $value) {
                                $corect++;
                            } else {
                                $wrong++;

                            }
                        }
                        $take++;
                    }
                }
            }

            $perc=($corect/$total)*100;

            if ($perc > 70){
                $add->correct=$corect;
                $add->wrong=$wrong;
                $add->attempt=$take;
                $add->total=$total;
                $add->grade='pass';
                $r="pass";
                Session::flash('succesmsg','Passed');
            }else{

                $add->delete();
                $r="fail";
                Session::flash('errormsg','failed');

            }

        }else{

            $add->grade='pass';
            $r="pass";
            Session::flash('succesmsg','Passed');
        }


            if ($r == "pass") {
                $add->save();
            }

            return redirect()->route('usertests.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $check=CourseResults::where('course_id',$id)->where('worker_id',Auth::user()->id)->count();
        $worker=Worker::find(Auth::user()->user_personel->id);
        $worker_lng=$worker->native_language;
        if($worker_lng == 'Spanish'){
            $w_lng='esp';
        }else{
            $w_lng='eng';
    }
        if ($check < 1){
            $insert=new CourseResults();
            $insert->course_id=$id;
            $insert->worker_id=Auth::user()->id;
            $insert->company_id=Auth::user()->company_id;
            $insert->state='in_progress';
            $insert->save();

        }

        $c_id=$id;
        $questions=Question::where('course_id',$c_id)->where('lng',$w_lng)->get();
        $videos=Assignment::where('course_id',$c_id)->where('lng',$w_lng)->get();
        $ack_form=AcknowledgmentForms::where('course_id',$id)->where('lng',$w_lng)->get();
        $is_resume=CourseResults::where('course_id',$id)->where('worker_id',Auth::user()->id)->first();

        return view('dashboard1.Coursetest.start2',compact('videos','ack_form','questions','c_id','is_resume'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usertest_pause(Request $request)
    {

        $update=CourseResults::where('course_id',$request->cid)->where('worker_id',Auth::user()->id)->first();
        $update->start=$request->start;
        $update->type=$request->type;
        $update->vid_no=$request->countes;
        $update->state='pause';
        $update->save();
        return redirect()->to('/home');
    }
    public function usertest_sync(Request $request)
    {

        $type=$request->type;
        $counter=$request->count;
        $c_id=$request->cid;
        $resumetime=$request->resumetime;
        $worker=Worker::find(Auth::user()->user_personel->id);
        $worker_lng=$worker->native_language;
        if($worker_lng == 'Spanish'){
            $w_lng='esp';
        }else{
            $w_lng='eng';
        }
//        if ($type == 'video'){
            $data=Assignment::where('course_id',$c_id)->where('lng',$w_lng)->get();
//
//        }
//        if ($type == 'ack_form'){
            $data1=AcknowledgmentForms::where('course_id',$c_id)->where('lng',$w_lng)->get();
//        }
//        if ($type == 'question'){
            $data2=Question::where('course_id',$c_id)->where('lng',$w_lng)->get();

//        }

        $view=view('partial.usertest_sync',compact('data','data1','data2','type','counter','resumetime'));

        return  $view;
    }
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
