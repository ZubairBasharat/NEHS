<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cources=course::all();
        $questions=DB::table('questions')
        ->select('*', DB::raw('count(id) as total'))
        ->groupBy('course_id')->get();

        return view('dashboard2.question.question',compact('cources','questions'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $add=new Question();
        $add->question=$request->question;
        $add->answer=$request->answer;
        $add->option1=$request->option1;
        $add->option2=$request->option2;
        $add->option3=$request->option3;
        $add->option4=$request->option4;
        $add->course_id=$request->course_id;

        $add->status=1;

        $add->save();
        return redirect()->route('question.index');
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
        $questions=Question::where('course_id',$id)->get();
       return view('dashboard2.question.course-questions',compact('questions','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Question::find($id);
        return response()->json($data);
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
        $add=Question::find($id);

        $add->question=$request->question ;
        $add->course_id=$request->course_id ;
        $add->answer=$request->answer ;
        $add->option1=$request->option1 ;
        $add->option2=$request->option2 ;
        $add->option3=$request->option3 ;
        $add->option4=$request->option4 ;

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
        $del=Question::find($id);
        $del->delete();
        return redirect()->back();
    }
    public function delete_course_questions(Request $request)
    {
        $c_id=$request->d_c_id;
        $del=Question::where('course_id',$c_id)->delete();
        return redirect()->back();
    }
}
