<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\CourseResults;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Traits\HasRoles;

class UserCertificateController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function assigned($id)
    {
        $action=CourseResults::find($id);
        $action->assign=1;
        $action->save();
        Session::flash('succesmsg','Assigned Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $cert_details=Certificate::where('course_id',$request->c_id)->first();
        $result=CourseResults::find($request->t_id);
        $c_name=course_byid($request->c_id);
        if ($c_name == ''){
            $c_name = '';
        }else{
            $c_name=course_byid($request->c_id)->name;
        }
        $user_details=Worker::find($result->worker_id);
        if (Auth::user()->hasRole('Admin')){
            return view('dashboard2.coursestats.certificate', compact('cert_details', 'result', 'user_details', 'c_name'));

        }else {


            return view('dashboard1.Coursetest.certificate', compact('cert_details', 'result', 'user_details', 'c_name'));
        }
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
