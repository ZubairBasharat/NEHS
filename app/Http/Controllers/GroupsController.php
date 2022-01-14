<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\department;
use App\Models\Group;
use App\Models\Worker;
use App\Models\worker_course;
use App\Models\WorkerHasGroups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole(3,4,5,6,7,8,9,10)){
            $groups = Group::where('company_id','=',Auth::User()->company_id)->get();
            $workers = Worker::where('company_id','=',Auth::User()->company_id)->get();
            $course=course::where('status',1)->
            where('company_id','=',Auth::User()->company_id)->get();
            return view('dashboard1.groups.manager.index', compact('groups', 'workers','course'));
        }
        if (Auth::user()->hasRole('User')) {

            $groups = Worker::find(Auth::user()->user_personel->id)->groups()->get();
            return view('dashboard1.groups.user.index', compact('groups'));

        }
    }

    public function index_admin()
    {
        if(Auth::user()->hasRole('Admin')){
            $groups = Group::where('company_id','=',Auth::User()->company_id)->get();
            $workers = Worker::where('company_id','=',Auth::User()->company_id)->get();
            $course=course::where('status',1)->where('company_id','=',Auth::User()->company_id)->get();
            return view('dashboard2.groups.index', compact('groups', 'workers','course'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $add=new Group();
        $add->name=$request->name;
        $add->descr=$request->descr;
        $add->status=$request->status;
        $add->company_id=Auth::user()->company_id;
        $add->save();
        Session::flash('succesmsg','Added Successfully');
        return redirect()->back();

    }
    public function assigns(Request $request)
    {
        $groups=WorkerHasGroups::where('id_group',$request->group)->get();
        foreach ($groups as $group){
            $check=worker_course::where('course_id',$group->id_worker)->where('w_id',$request->course);
            if($check->count() < 1){
                $add=new worker_course();
                $add->w_id=$group->id_worker;
                $add->course_id=$request->course;
                $add->target_finish=$request->target_finish;
                    $add->save();

            }

        }

            Session::flash('succesmsg','Added Successfully');

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
    public function group_workers($id)
    {
        $dep=department::where('status',1)->get();
        $workers=Worker::where('status',1)->Orderby('first_name','asc')->get();
        $view=view ('partial.group_has_employees',compact('workers','id','dep'));

        return $view;

    }
    public function group_user_filter_ajax(Request $request)
    {
        $id=$request->group;
        $dep=department::where('status',1)->get();
        $worker=Worker::where('status',1);
        if ($request->search != ''){
            $worker->where('first_name', 'like','%' .$request->search. '%');
        }
        if ($request->department != ''){
            $worker->where('dep_id',$request->department);
        }
        if ($request->langauage != ''){
            $worker->where('native_language',$request->langauage);
        }

        $workers=$worker->Orderby('first_name','asc')->get();

        $view=view ('partial.group_has_employees',compact('workers','id','dep'));

        return $view;

    }
    public function add_remove_worker(Request $request)
    {
        if ($request->actionn == 'remove'){
            $del=WorkerHasGroups::where('id_group',$request->group_id)->where('id_worker',$request->worker_id)->first();
            $del->delete();
            return 'remove';
        }
        if ($request->actionn == 'add'){
            $add=new WorkerHasGroups();
            $add->id_group=$request->group_id;
            $add->id_worker=$request->worker_id;
            $add->save();
            $this->send_email($request);
            return 'add';
        }


    }

    public function send_email(Request $request){
        $group_id=$request->group_id;
        $worker_id=$request->worker_id;
        $group_row=Group::find($group_id);
        $worker_row=Worker::find($worker_id);
        $group_name=$group_row->name;
        $worker_email=$worker_row->email;

        $data = array(
            'assign_user_email'=>$worker_email,
            'assign_course_name'=>$group_name,
        );
        Mail::send('mails.group-email',$data, function($message) use($worker_email, $group_name, $request) {
            $emaildata=\App\Models\EmailTemplates::find(11);
            $message->to($worker_email,$group_name)->subject
            ($emaildata->subject);
            $message->from($emaildata->email_from,$emaildata->from_man);
        });
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Group::find($id);
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
//        dd($request->all());
        $add=Group::find($id);
        $add->name=$request->edit_name;
        $add->descr=$request->edit_descr;
        $add->status=$request->edit_status;
        $add->update();
        Session::flash('succesmsg','Updated Successfully');
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

        $del=Group::find($id);
        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();
    }
}
