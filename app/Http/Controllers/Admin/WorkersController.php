<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CourseResults;
use App\Models\department;
use App\Models\Projects;
use App\Models\User;
use App\Models\Userlocation;
use App\Models\Worker;
use App\Models\course;
use App\Models\worker_course;
use App\Models\WorkerHasEquipment;
use App\Models\WorkerHasGroups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=department::where('company_id','=',Auth::User()->company_id)->get();
        $rolls=Role::all();
        $workers =Worker::where('company_id','=',Auth::User()->company_id)->get();
        $courses =course::where('company_id','=',Auth::User()->company_id)->get();
        $projects=Projects::where('company_id','=',Auth::User()->company_id)->get();
        $assigncourses=worker_course::all();
        $user = User::find( Auth::user()->id);
        if($user->hasAnyRole(3,4,5,6,7,8,9,10)){

            return view('dashboard1.User.all-personel',compact('rolls','departments','assigncourses','workers','courses','projects'));
        }else{
            return view('dashboard2.users.personnel',compact('rolls','departments','assigncourses','workers','courses','projects'));
        }
    }

    public function userindex()
    {
        $departments=department::where('company_id','=',Auth::User()->company_id)->get();
        $workers =Worker::where('company_id','=',Auth::User()->company_id)->get();
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
        $add->company_id=Auth::user()->company_id;
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
    public function print_card($id)
    {
        $user=Worker::find($id);
        if (Auth::user()->hasRole('Admin')){
            $extends='dashadmin';

        }else{
            $extends='dash1';

//            return view('partial.idcard2',compact('user'));

        }
        return view('partial.idcard',compact('user','extends'));

    }

    public function resend_mail($id)
    {
        $user=Worker::find($id);
        $passw = randomPassword();
        $newpass=Hash::make($passw);
        $userr=User::find($user->user->id);

        $data = array(
            'name'=>$userr->name,
            'email'=>$userr->email,
            'password'=>$passw
        );

         Mail::send('mails.invite-p',$data, function($message) use($userr) {
             $emaildata=\App\Models\EmailTemplates::find(3);

             $message->to($userr->email,$userr->name)->subject
             ($emaildata->subject);
             $message->from($emaildata->email_from,$emaildata->from_man);
         });
        $userr->password=$newpass;
        $userr->save();
         Session::flash('succesmsg','Email Resend Successfully');
       return redirect()->back();
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
            if ($cousre->target_finish > null){

                $t_finish='---';
            }else{
                $t_finish=$cousre->target_finish;
            }

                $c_name = course_byid($cousre->course_id)->name ?: '';
            $c_description = course_byid($cousre->course_id)->description ?: '';
            $allcousres .= "<tr class='w-100'><td>$c_name</td>
                    <td>Admin</td>
                    <td>$c_description</td>
                    <td>$cousre->created_at</td>
                    <td>$cousre->target_finish</td>
                    <td>$cousre->updated_at</td>
                    <td>-----</td>

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
        $add->em_fname =$request->em_fname ;
        $add->em_fname2 =$request->em_fname2 ;
        $add->em_lname =$request->em_lname ;
        $add->em_lname2 =$request->em_lname2 ;
        $add->em_no =$request->em_no ;
        $add->em_no2 =$request->em_no2 ;
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

        $worker=Worker::find($id);
        $user=User::find($worker->user->id);

        $cert=CourseResults::where('worker_id',$worker->id)->delete();
        $gr=WorkerHasGroups::where('id_worker',$worker->id)->delete();
        $gr=WorkerHasEquipment::where('id_worker',$worker->id)->delete();
        $gr=Userlocation::where('user_id',$worker->id)->delete();
        $gr=worker_course::where('w_id',$worker->id)->delete();
        $user->syncPermissions([]);
        $user->syncRoles([]);




        $user->delete();
        $worker->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
    public function del_location($id)
    {
        $del=Userlocation::find($id);
        $del->delete();
        return redirect()->back();
    }
    public function add_location(Request $request)
    {
      $add=new Userlocation();
      $add->project=$request->project;
      $add->location=$request->loc;
      $add->user_id=$request->w_id;
      $add->save();
      return redirect()->back();
    }
    public function location(Request $request)
    {
        $all=Userlocation::where('user_id',$request->w_id)->get();

        $html = view('partial.location',['all'=>$all])->render();
        echo $html;
    }

    public function show_ajax_data(Request $request){

        $user=Worker::find($request->w_id);
        $data='';
        if ($request->show == 'course'){
//            $data = Worker::find($user->id)->coursess()->get();
            $data = course::where('status',1)->get();
            $show=$request->show;
        }
        if($request->show == 'eq'){
            $data = Worker::find($user->id)->certificates()->get();
            $show=$request->show;
        }
        if ($request->show == 'gr'){
            $data = Worker::find($user->id)->groups()->get();
            $show=$request->show;
        }

        $html = view('partial.personel-ajax-data',['user_id'=>$request->w_id,'data'=>$data,'show'=>$show])->render();
        echo $html;


    }

}
