<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AcknowledgmentForms;
use App\Models\Assignment;
use App\Models\AssignQuestion;
use App\Models\AssignCommon;
use App\Models\course;
use App\Models\Form;
use App\Models\User;
use App\Models\video_categorie;
use App\Models\VideoLibrary;
use App\Models\Worker;
use App\Models\worker_course;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserNotification;
use App\Listeners\SendNewUserNotification;

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

//        dd($request->all());
        $video=VideoLibrary::find($request->video_id);

//        if($request->has('file')){
//
//
//            $video_file =  time().'.'.$request->file->extension();
//
//            $request->file->move(public_path('images/assignments/video'), $video_file);
//
//         }
            $as= new Assignment;
            $id = $request->id;
            $as->title = $video->video_title;
            $as->course_id = $request->course_id;
            $as->description= $video->video_desc;
            $as->lng= $request->language;
            $as->type= 'video';
            $as->status= '1';
//            $as->company_id=Auth::user()->company_id;
             $as->file= $video->video_file;
             $as->save();

             return redirect('admin/course-assignment/'.$request->course_id.'/'.$request->language);
    }

    public function addassignmentf(Request $request){



//        if($request->has('file')){
//
//
//            $video_file =  time().'.'.$request->file->extension();
//
//            $request->file->move(public_path('images/assignments/file'), $video_file);
//
//         }

        $data=$request->formm;
        $pdf = PDF::loadview('test',compact('data'));
        $path = public_path('images/assignments/acknowledgment'); // <--- folder to store the pdf documents into the server;
        $fileName =  time().random_code().'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        sleep(2);

        $data=$request->formm;
        $add_form = new Form();
        $add_form->form_name=$request->f_name;
        $add_form->file_name=$fileName;
        $add_form->json=$request->jsondata;
        $add_form->data=$data;
        $add_form->save();

//            $as= new Assignment;
//            $id = $request->id;
//            $as->title = $request->title;
//            $as->course_id = $request->id;
//            $as->description= $request->description;
//            $as->type= 'File';
//            $as->status= '0';

        $add=new AcknowledgmentForms();
        $add->name=$request->f_name;
        $add->course_id=$request->id;
        $add->form_id=$add_form->id;
        $add->lng= $request->language;
        $add->save();

        return redirect('admin/course-assignment/'.$request->id.'/'.$request->language);
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

        return redirect()->back();

    }
    public function ajax_assignmentv(Request $request){
        $category=video_categorie::find($request->category);
        if ($request->type == 'edit'){
            $view = view('partial.edit-assignment-video',compact('category'));

        }
        if ($request->type == 'add'){
            $view = view('partial.assignment-video',compact('category'));

        }



        return $view;

    }
    public function invitecommon(Request $request){

        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $passw = randomPassword();

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$passw
        );

        $user=User::create([
            'name' => $request['name'].' '.$request['lname'],
            'email' => $request['email'],
            'company_id' => Auth::user()->company_id,
            'password' => Hash::make($passw),

        ]);
        $role= 2;
        if ($role == 2) {

            $add_profile = new Worker();
            $add_profile->first_name = $request->name;
            $add_profile->last_name = $request->lname;
            $add_profile->email =$user->email;
            $add_profile->status = 1;
            $add_profile->user_id = $user->id;
            $add_profile->dep_id = $request->department;
            $date = Carbon::now();
            $add_profile->hire_date=$date->toDateString();
            $add_profile->native_language = $request->native_language;
            $add_profile->gender = $request->gender;
            $add_profile->type = $request->type;
            $add_profile->company_id=Auth::user()->company_id;
            $add_profile->save();
            Mail::send('mails.invite-p',$data, function($message) use($request) {
                $emaildata=\App\Models\EmailTemplates::find(3);

                $message->to($request->email,$request->name)->subject
                ($emaildata->subject);
                $message->from($emaildata->email_from,$emaildata->from_man);
            });
        }else{
            Mail::send('mails.invite-m',$data, function($message) use($request) {
                $emaildata=\App\Models\EmailTemplates::find(1);

                $message->to($request->email,$request->name)->subject
                ($emaildata->subject);
                $message->from($emaildata->email_from,$emaildata->from_man);
            });

        }
        $user->assignRole($role);
        $perm=Permission::all();
        $user->syncPermissions($perm);



        Session::flash('succesmsg','Invitation Send Successfully');

        return redirect()->back();




//        $workers=Worker::where('dep_id',$request->department_id)->get();
//        foreach ($workers as $worker){
//            $user = User::find($worker->user->id);
//            $body['Manager_name']=Auth::user()->name;
//            $body['course_id']=$request->course_id;
//            Notification::send($user, new NewUserNotification($body));
//
//        }


    }


    public function create()
    {
        //
    }
    public function invite_single(Request $request)
    {
        //
//        dd($request->all());
        if($request->type == 'add') {
        $add=new worker_course();
        $add->w_id = $request->w_id;
        $add->course_id = $request->course_id;
        $add->save();
        $this->send_email($request);
        Session::flash('succesmsg','Successfully Added');

        }
        if ($request->type == 'remove'){

            $find=worker_course::where('w_id',$request->w_id)->where('course_id',$request->course_id)->first();
            $find->delete();
            Session::flash('succesmsg','Successfully Remove');

        }
        return redirect()->back();

    }

    //email function

    public function send_email(Request $request){
        $w_id=$request->w_id;
        $c_id=$request->course_id;
        $worker_row=Worker::find($w_id);
        $course_row=course::find($c_id);
        $user_email=$worker_row->user->email;
        $course_name=$course_row->name;
        $data = array(
            'assign_user_email'=>$user_email,
            'assign_course_name'=>$course_name,
        );
        Mail::send('mails.personnel-email',$data, function($message) use($user_email, $course_name, $request) {
            $emaildata=\App\Models\EmailTemplates::find(8);
            $message->to($user_email,$course_name)->subject
            ($emaildata->subject);
            $message->from($emaildata->email_from,$emaildata->from_man);
        });
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

    public function edit_ack_form($id,$course_id) {

        $data=Form::find($id);
        return view('edit-ack-form',compact('data','course_id'));
    }
    public function update_ack_form(Request $request) {

        $data=$request->formm;

        $add = Form::find($request->form_id);
        $add->json=$request->jsondata;
        $add->data=$data;
        $add->save();

        $data=$add->data;
        $name=$add->file_name;

        $pdf = PDF::loadview('test',compact('data'));
        $path = public_path('images/assignments/acknowledgment'); // <--- folder to store the pdf documents into the server;
        $fileName =  $name; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);

        return redirect('admin/course-assignment/'.$request->course_id);

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

        $video=VideoLibrary::find($request->video_id);
        $data=Assignment::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->file=$video->video_file;
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

    }
    public function ack_destroy(Request $request,$id)
    {
        $del=Form::find($id)->delete();
        $del2=AcknowledgmentForms::where('form_id',$id)->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
    public function destroy_assignment(Request $request)
    {
        //
//        dd($request->all());
        $data = Assignment::find($request->a_id)->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }

    public function all_assignments(Request $request)
    {
        if(Auth::user()->hasAnyRole(3,4,5,6,7,8,9,10)){
        $videos= Assignment::where('type','=','video')->where('status','=',1)->get();
        $assinments=Assignment::where('type','=','File')->where('status','=',1)->get();
        return view('dashboard1.assignment.all',compact('videos','assinments'));
        }
        if (Auth::user()->hasRole('User')) {

            $assinments = Worker::find(Auth::user()->user_personel->id)->coursess;
            return view('dashboard1.assignment.user.all',compact('assinments'));
        }
    }


}
