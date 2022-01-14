<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use App\Models\worker_course;
use App\Notifications\NewUserNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{

    public function show_all(){

        $user =User::find(Auth::user()->id);

        $total=count($user->unreadNotifications);
        $notifications=$user->unreadNotifications;

        return view('dashboard1.notifications.All',compact('notifications'));



    }

    public function accept_invitaion(Request $request){



        $u_id=Auth::user()->id;
        $n_id=$request->noti_id;
        $c_id=$request->c_id;
        if ($request->accept == 'yes' && $request->decline != 'yes') {
            $worker_course = worker_course::where('w_id', $u_id)->where('course_id', $c_id)->get();
            if (count($worker_course) < 1) {
                $new = new worker_course();
                $new->w_id = $u_id;
                $new->course_id = $c_id;
                $new->save();
            }
        }
        $notifcation=Notification::where('id',$n_id)->first();
        $notifcation->read_at=Carbon::now();
        $notifcation->save();
        if ($request->accept == 'yes'){
            Session::flash('succesmsg', 'Successfully Accept Invitation');

        }elseif ($request->decline == 'yes') {
            Session::flash('warnmsg', 'Decline Invitation');
        }else{
            Session::flash('errormsg', 'Something Went Wrong');
        }
        return redirect()->back();





    }




}
