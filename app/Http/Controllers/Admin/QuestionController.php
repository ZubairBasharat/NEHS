<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
      return 'This function move to store';
    }
    public function store_true_false(Request $request)
    {
//        dd($request->all());
        $add=new Question();
        $add->question=$request->question;
        $add->type='t-f';
        $add->true_false=$request->value;
        $add->lng=$request->lng;
        $add->course_id=$request->course_id;

        $add->status=1;

        $add->save();
//        return redirect()->route('question.index');
        return redirect('admin/course-assignment/'.$request->course_id.'/'.$request->lng);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add=new Question();
        if ($request->photo !=''){
            $pic = time().'-'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('/images/questions'), $pic);
            $add->photo=$pic;
        }

        $add->question=$request->question;
        $add->answer=$request->answer;
        $add->option1=$request->option1;
        $add->option2=$request->option2;
        $add->option3=$request->option3;
        $add->option4=$request->option4;
        $add->lng=$request->lng;
        $add->course_id=$request->course_id;

        $add->status=1;

        $add->save();
//        return redirect()->route('question.index');
        return redirect('admin/course-assignment/'.$request->course_id.'/'.$request->lng);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $questions=Question::where('course_id',$id)->where('type','question')->get();
        $true_false=Question::where('course_id',$id)->where('type','t-f')->get();
       return view('dashboard2.question.course-questions',compact('questions','id','true_false'));
    }
    public function shows($id,$language)
    {

        $questions=Question::where('course_id',$id)->where('type','question')->where('lng',$language)->get();
        $true_false=Question::where('course_id',$id)->where('type','t-f')->where('lng',$language)->get();
       return view('dashboard2.question.course-questions',compact('language','questions','id','true_false'));
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
        if ($request->photo !=''){
            $image_path=public_path('/images/questions/').$add->photo;
            if (File::exists($image_path)){
                unlink($image_path);
            }
            $pic = time().'-'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('/images/questions'), $pic);
            $add->photo=$pic;
        }
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
    public function update_true_false(Request $request, $id)
    {
        $add=Question::find($id);

        $add->question=$request->question ;
        $add->course_id=$request->course_id ;
        $add->true_false=$request->value ;
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
