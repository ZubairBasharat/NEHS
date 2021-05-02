<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CourseResults;
use App\Models\Question;
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
        $stats=CourseResults::where('worker_id',Auth::user()->user_personel->id)->get();
        $pass=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('grade','pass')->count();
        $fail=CourseResults::where('worker_id',Auth::user()->user_personel->id)->where('grade','fail')->count();

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

            foreach($submited as $key=>$value){
                if($key != '_token') {
                    if ($key != 'c_id') {
                        $question = Question::find($key);

                        if ($question->answer == $value) {
                            $corect++;
                        } else {
                            $wrong++;

                        }
                        $take++;
                    }
                }
            }
        $total=Question::where('course_id',$request->c_id)->count();



            $add=new CourseResults();
            $add->worker_id=Auth::user()->user_personel->id;
            $add->course_id=$request->c_id;
            $add->correct=$corect;
            $add->wrong=$wrong;
            $add->attempt=$take;
            $add->total=$total;
            $perc=($corect/$total)*100;

        if ($perc > 70){
            $add->grade='pass';

        }else{
            $add->grade='fail';

        }

            $add->save();

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
        $c_id=$id;
        $questions=Question::where('course_id',$c_id)->get();
        return view('dashboard1.Coursetest.start',compact('questions','c_id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
