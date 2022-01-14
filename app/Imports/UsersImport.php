<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Worker;
use Carbon\Carbon;
//use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {

            $pass=randomPassword();
            $user=new User();
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->password = Hash::make($pass);
            $user->status = 1;
            $user->company_id=Auth::user()->company_id;
            $user->save();

        $data = array(
            'name'=>$user->name,
            'email'=>$user->email,
            'password'=>$pass
        );
             Mail::send('mails.invite-p',$data, function($message) use($user) {
            $emaildata=\App\Models\EmailTemplates::find(3);

            $message->to($user->email,$user->name)->subject
            ($emaildata->subject);
            $message->from($emaildata->email_from,$emaildata->from_man);
        });
        $user->assignRole(2);
        $worker=new Worker();
        $worker->user_id=$user->id;
        $worker->first_name=$user->name;
        $worker->email=$user->email;
        $worker->dep_id=Session::get('dep_name');
        $worker->status=1;
        $worker->company_id=Auth::user()->company_id;
        $date = Carbon::now();
        $worker->hire_date=$date->toDateString();
        $worker->save();


    }
}
