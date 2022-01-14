<?php

namespace App\Http\Controllers;

use App\Models\Admin\Folder;
use App\Models\Admin\ToolboxSignature;
use App\Models\department;
use App\Models\Group;
use App\Models\ManagerHasToolbox;

use App\Models\Projects;
use App\Models\Resource;
use App\Models\Toolbox;
use App\Models\User;
use App\Models\Worker;
use App\Models\WorkerHasGroups;
use App\Models\WorkerHasToolbox;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserNotification;
use App\Listeners\SendNewUserNotification;

class ToolBoxController extends Controller
{
    //
    public function show(){

        $projects=Projects::where('status',1)->where('company_id',Auth::user()->company_id)->get();
        $folders=Folder::where('type','toolbox')->where('company_id',Auth::user()->company_id)->get();
        $users=User::role('User')->where('company_id',Auth::user()->company_id)->get();
        $roles=Role::where('name','!=','Admin')->where('name','!=','User')->select('name')->get();
        $role=array();
        $userfolder=array();
        $temparray=array();

        foreach ($roles as $rolee){
            $role[]=$rolee->name;
        }
        $managers=User::role($role)->where('company_id',Auth::user()->company_id)->get();

        if(Auth::user()->hasRole('Admin')){
            return view('dashboard2.toolbox.index',compact('folders','users','projects','managers'));

        }elseif(Auth::user()->hasRole('User')){


            foreach ($folders as $folder){
                if(WorkerHasToolbox::where('worker_id',Auth::user()->id)->where('folder_id',$folder->id)->count() > 0){


                    $temparray['folder']=$folder;
                    $temparray['files']=WorkerHasToolbox::where('worker_id',Auth::user()->id)->where('folder_id',$folder->id)->get()->toArray();
                    $userfolder[]=$temparray;


                }

            }


            return view('dashboard1.toolbox.index',compact('userfolder','users','projects','managers'));

        }else{


            foreach ($folders as $folder){
                if(ManagerHasToolbox::where('manager_id',Auth::user()->id)->where('folder_id',$folder->id)->count() > 0){


                    $temparray['folder']=$folder;
                    $temparray['files']=ManagerHasToolbox::where('manager_id',Auth::user()->id)->where('folder_id',$folder->id)->get()->toArray();
                    $userfolder[]=$temparray;


                }

            }


            return view('dashboard1.toolbox.index',compact('userfolder','users','projects','managers'));

        }

}

public function single(Request $request)
{

    $file = ToolboxSignature::find($request->id);
    $users=User::role('User')->where('company_id',Auth::user()->company_id)->get();
    $projects=Projects::where('status',1)->where('company_id',Auth::user()->company_id)->get();
    $groups=Group::where('status',1)->where('company_id',Auth::user()->company_id)->get();
    if (Auth::user()->hasRole('User')){
        $signc = ToolboxSignature::where('file_id', $request->id)->where('user_id', Auth::user()->id)->count();

    if ($signc < 1) {

        $add = new ToolboxSignature();
        $add->user_id = Auth::user()->id;
        $add->file_id = $request->id;
        $add->save();
    }
}
    $sign=ToolboxSignature::where('file_id',$request->id)->where('user_id',Auth::user()->id)->first();
        $resource=Toolbox::find($request->id);
         $allsign=ToolboxSignature::where('file_id',$request->id)->get();
        $view = view('partial.toolbox',compact('resource','sign','allsign','projects','groups','users'));
        return $view;


}
    public function sign(Request $request)
    {

        $add=ToolboxSignature::where('file_id',$request->f_id)->where('user_id',Auth::user()->id)->first();
        $add->user_id=Auth::user()->id;
        $add->sign=$request->img;
        $add->file_id=$request->f_id;
        $add->save();
        echo 'ok';

    }
    public function get_sign_by_type(Request $request)
    {
        $users=array();
        if ($request->type == 'project') {
            $worker = Worker::where('job_no', $request->id)->get();
            foreach ($worker as $workers) {
                $users[] = $workers->user_id;
            }
        }
        if ($request->type == 'group') {
            $worker = WorkerHasGroups::join('workers','workers.id','=','worker_has_groups.id_worker')
                ->select(['workers.id'])
                ->where('worker_has_groups.id_group',$request->id)->get();

            foreach ($worker as $workers) {
                $users[] = $workers->id;
            }

        }
        if ($request->type == 'user' && $request->id != 'All') {
            $users[]=$request->id;$data=ToolboxSignature::where('file_id',$request->f_id)->whereIn('user_id',$users)->get();

        }
        if ($request->type == 'user' && $request->id == 'All') {
            $userss=User::role('User')->where('company_id',Auth::user()->company_id)->get();
            foreach ($userss as $workers) {
                $users[] = $workers->id;
            }
        }

        $data=ToolboxSignature::where('file_id',$request->f_id)->whereIn('user_id',$users)->get();



        $view = view('partial.project_signs',compact('data'));
       return $view;

    }
    public function sendmail(Request $request)
    {
        $toolbox_id=$request->toolbox_id;
        $mailto=$request->mail_to;
        $toolbox=Toolbox::find($toolbox_id);
        $data = array(
            'data'=>$toolbox_id,

        );
        Mail::send('mails.toolbox',$data, function($message) use($request,$toolbox,$mailto) {
            $folder_name=folder_byid($toolbox->folder_id)->name;
            $message->to($mailto)->subject('ToolBox Talk Recieved From '.mylogo()->name.'')
//                ->attachData(base64_decode('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmwAAACgCAYAAACxIDDDAAAW/0lEQVR4Xu3dTcwkR33H8e6ex89sbGPLkp0IZvU8M/1Y5OZIEHJIjkFJhIQULpyAE8JcQYJDIiEiBAeC4EoscUpuOSTKBSUKN6QoCsji6EhPd8+ww4swQuC1vbOe6Ua18qz76aeqX6uqq2u+e7G1T3e9fP69en6q7q4OA/4ggAACCCCAAAIIOC0QOj06BocAAggggAACCCAQENi4CBBAAAEEEEAAAccFCGyOF8jX4cVxXIg/YRg+ugYPh8OD9Xr9B77Ol3khgAACCCAwRIDANkSPc3sJXFxc7M/Ozmblk0V4S9M06tUgJyGAAAIIIOC5AIHN8wK7OL3VapUfV9bK40uShOvRxYIxJgQQQACB0QX4BTl6CU5vADYCm+iDFbvTu7aYMQIIIOCrAIHN18o6PK/VaiWeXbs1Qh23RVer1b+kafop8YycWLGL4/g3SZI85zAHQ0MAAQQQQKBRgMDWSMQBugVEmFK1OeS2aBzH6yAILiRtv5MkybnuedAeAggggAACtgQIbLak6eexgKnAprrVKjoeEgQpHQIIIIAAAmMLENjGrsAJ9l8X2PI8z7Msu/EGaVuiunYPh8M/rtfrL7dti+MQQAABBBBwSYDA5lI1TmQsdcGqKIogTdPO12XN7dBHqkVRiJcQegXBEykL00QAAQQQcFig8y9Gh+fC0CYiUBfYxBT63L6sux16ZOnT7kRIGSYCCCCAgOcCBDbPC+za9EwFq6YQ2DcIuubHeBBAAAEETlOAwOZR3ZfL5aHv81+2GNoEtsPh8PZ6vX6yy5gkge1+EARPl9tgha2LKMcigAACCLgkQGBzqRoDxlIOQmI/M9GUixvHtglsXfdjk7X57h5s1e1DdkmS3BnAzKkIIIAAAgiMIkBgG4Vdf6eyW4IurihVN80V2bK6iW6PwHZrI15ZYOv7QoP+atEiAggggAAC3QQIbN28nDxa9jF1MVAXA1s1WIpwVv2uaNdgJWtTrC6qVt6cLCKDQgABBBBAoEaAwObB5aF64H4qgS0IxCLbe5eihsC2S9P0ThzH/xcEwZ+WS+yiiQeXIFNAAAEEEDAsQGAzDGyj+SkHNrFRrkhr1VW2tsFqtVptwzD8gCqUSWx4js3GRUkfCCCAAAJaBQhsWjntNza1zzFVA5QIZkNuXTadK7ld2mtjXvuVpUcEEEAAAQTeEyCwTfxqUK2udX1w3waD7Fm7oYGtKZA1BTob86YPBBBAAAEEhgoQ2IYKjni+6mUDMaTdbrfbbrdObWGhCk/L5fJHURR9WHVbs45Y9cLB8Zyrq6tfFUXxfJ+2RywtXSOAAAIIIHBDgMA24Quibnf/ts+A2Zx+3WqX7FZp09hWq9UvwjD8o/JxRVH8a5qmnyz/XbXtMAxfv76+fqGpfX6OAAIIIICAKwIENlcq0WMcEwxsN/ZLK78N2rRSJuNpu/dcn7Z7lINTEEAAAQQQMCZAYDNGa7bhupcNXHx+TWjUPW/WNVTFcfxvQRD8bWV1rZB93YHn2Mxei7SOAAIIIGBegMBm3thID3Wray4+v6YIbI8DVvULCOL4utu6XUIYz7EZuQRpFAEEEEDAogCBzSK2rq7qXjZoCjq6xtCnnbpVtC4BrGm1TjY2ScD9UZIkH+kzD85BAAEEEEDAtgCBzba4hv7qVtemFNj2+3262WxiMebVavW/YRj+WZlHtcKmuB3870mSfELF2/WWq4Yy0QQCCCCAAALaBAhs2ijtNLRYLB7M5/O5qjdXn1+TrYpVA1k1VImvIGRZNqvOte3LBuXzut5ytVNNekEAAQQQQKCdAIGtnZMzR9W9bCAG6erza21uebZZBVNs5fEwTVNliH03LD4IguDGMS5ufeLMhcZAEEAAAQScEiCwOVWO5sFM9XZom8BWXQWTfQS+z+raUZXn2JqvL45AAAEEEHBTgMDmZl2ko2paXRMnubpq1DKwPfoQfHny5fl02cpDBthmBW9ClwNDRQABBBA4IQEC24SK3bS65vLza21Wzy4vL9+czWZPqgJbm9BXV06eY5vQxc5QEUAAAQRuCBDYJnJBNG3lIabh6vNrYmxtV7eqxx0Oh7fW6/VTijaCNE1bX8NxHPMc20Sud4aJAAIIIHBToPUvO+DGFWhaXROjc/V26JDAdlw17LOVR7Vil5eX35zNZl8q//3hcPjaer3+yrjVpXcEEEAAAQTqBQhsE7hCmrbyOE5hSoGt7ZYdxxcPhrxsUC6xpJ23kiR5tILHHwQQQAABBFwVILC5WpnSuNq8bODy82uyFbYum+IWRfF6GIbPl0tVFEXjVh6y0tZ9z3QClwJDRAABBBA4UQEC2wQK3+Z2qMvPr8mev+sS2GQl6ruaOPTFhQlcLgwRAQQQQMBDAQKb40WVBQxxm7Cy+0XwxBNPPPPaa6+94eJ0uoakpoA6ZDUxjuMfBkHwF2WnvuHPRWvGhAACCCDgpwCBzfG6NoWX4/BdDh26A9vQuUpMf54kyQccvxQYHgIIIIDACQsQ2BwuvuxlA7G6VN1cdr/f7zabzR1Xp9JmD7by2Jue2dMd2Ias2LlqzrgQQAABBPwSILA5XM+m4DKF1TUxxj4P+qtWFsULCGmavjCkbGygO0SPcxFAAAEExhAgsI2h3rJPWbConjqF1aG2m+Y2rbLpmmscx28GQaD8okLL8nAYAggggAAC1gQIbNaou3fU8vm17ydJ8rHurds7o09gE6NbLpeHLMtmcRz/ZxAEfxUEwX8lSfLXOkYu+aICG+jqgKUNBBBAAAEjAgQ2I6x6Gm0T2IY+z6VnpPWtVOex3+/Xm81maaNvVR9soDumPn0jgAACCHQVILB1FbN0vFhdiqIoquuuKIo8TdOZpSH17qYajlwImX2eq+sNwIkIIIAAAggMFCCwDQQ0dXqbFw6KovhSmqbfMjUGHe123dJDR59t2nB1XG3GzjEIIIAAAqcnQGBztOa+3A51NRixga6jFz7DQgABBBCQChDYHL0wmgJbURSHNE3PHB3+42G5GtjEANlA1/Wrh/EhgAACCBwFCGwOXguyb29Wh5kkiXi+rXBw+DeG1HXTXJvz6fv2qs0x0hcCCCCAAAJCgMDm4HXQ5vm1MR7cF+NK07T2RYgqp8uhiA10Hbz4GRICCCCAgFSAwObghdHidugob4eKcXUNii4HNjbQdfDiZ0gIIIAAAgS2qVwDTYHt2Wef/fNXX331f2zNR6ysPVqODcNQfG1A/H/blbbqXPI8z8VmuLbG3tSPxHqdJMmoe8Q1jZmfI4AAAgicngArbA7WvCmwdV3lGjJF1fN0bcYgO7fNeUPG2/VcmbVrY+w6J45HAAEEEPBPgMDmWE2bnl/T9T3NttNWhcc2ocblN0SP87+6uvptURTPVDx+kCTJR9sacRwCCCCAAAKmBQhspoU7tt/0wff9fv/yZrN5pWOzvQ5fLBa/m8/n75Od3Cawufz8WnlOrLL1ujw4CQEEEEDAogCBzSJ2m65cuh1at9rXFNhkt0P3+/1hs9k4t3fcarU6hGF44+3Xw+Hw9+v1+httasYxCCCAAAIImBYgsJkW7th+XWBz5XaomFJTYJvC7dC6VTbb1h0vEw5HAAEEEDgxAQKbQwVv+uD7brfbbbfbOzaG3PQsXVNgm8rt0KMle7LZuKroAwEEEECgrwCBra+cgfOGhiSdQxpya3ZKt0OPZpeXl383m82+XjYsimKU/e501pG2EEAAAQT8ECCwOVRHV26Htvk01sOHD399796952V8U7sdepwDLx849I+BoSCAAAII3BAgsDl0QdQFNpsP7Detrgmyume8pnY7tBTY/jsIgr8sXxJhGP7u+vr6WYcuE4aCAAIIIHCCAgQ2R4q+WCwezOfzuWo4Tc+M6ZqGbCsPEc7EVw4qtwsL2dcOpng7tDwvVtl0XUm0gwACCCCgU4DAplNzQFt1z6/ZfGNRdTuz7arZVG+HHkvHRroDLmJORQABBBAwJkBgM0bbreG6DXNtra6JEUuCmfhuaFgdn/ikqPj76izbBrtuOnaPZpXNrje9IYAAAgg0CxDYmo2sHFH33JitwCZbHdvtdm9st9tn2gS2qd8OPRaajXStXPJ0ggACCCDQQYDA1gHL5KGqwDb2ywbHsNjmVqdPK1OqlUaT1wBtI4AAAgggoBIgsDlwbQz5BJSu4cs27c3zPM+ybCb66BPYbD57p8uhtMomXrS40aytlU7dc6E9BBBAAIHpCxDYHKihKrDZDDxNq2NNga3p5w4wdxoCG+l24uJgBBBAAAHDAgQ2w8BtmlfdDrW1oiN79kwWFqvjLI+vKfC1cXDtGB/n5Jox40EAAQQQaCdAYGvnZPQoWTBQvYVpYiBtg0n1uOPzdb68bFC1jeOYjXRNXHC0iQACCCDQWYDA1plM7wmqz0DZetlgsVi8MZ/Pny7PSnUrVrVlR9vAp1fOTms+z82OIL0ggAACCOgQILDpUBzQhur5NVu3Q2X7v6n6Hrqp7gCm0U5lI93R6OkYAQQQQKAkQGAb+XJQ3A6VfvZJ91C7rK6Jvtt8FF4cZyts6vZQtccqmy1p+kEAAQQQUAkQ2Ea+NsYMA7LVtd1ud3+73b5PxVL3RYbjOb4FNjbSHfkfCd0jgAACCAQEtpEvgjE/5dRnc9i7d+/+8vz8/A9VbLaevbNdtj5WtsdIfwgggAAC/goQ2EasreJTULvtdnvH9LAUfdeurokxHQOb2FQ3iqKovKombpluNpsz02Mfo31W2cZQp08EEEAAgaMAgW3Ea2HM26E6+ha3R498sg/Bj0irvWs20tVOSoMIIIAAAh0ECGwdsHQeenl5uZ/NZo8++1T+Y+P5L9nqmq+3MnXWrMsbtTr7pS0EEEAAAQQIbCNdA2N+3UDH6tpIbKN2K9tINwiCd5IkOR91YHSOAAIIIOC9AIFthBK/+OKLH8rz/Meyrk2vsLG6NqzghN1hfpyNAAIIINBPgMDWz23QWTUfew9MPwtG4BhUuiCO4ywIgstqK6aD9rBRczYCCCCAwNQFCGwjVFB1O9T090NlQVH1GaoRWCbTZRzHbwdBcONNXtO1mwwOA0UAAQQQMCJAYDPCqm5UtbomzjD9S5/VNT3FXi6XX4ii6NuS1vZJkjyhpxdaQQABBBBA4D0BApvFq+Hu3bsPzs/P56ouTa52sbqmt9BxHP9HEAQfl7T6/0mS/LHe3mgNAQQQQODUBQhsFq8A1a3Q4xBMBjZW1/QXOo7j14Ig+CChTb8tLSKAAAII3BQgsFm6IupuhZoObLK+xZcKsiy7tQ+cJQ5vuonj+J0gCG593SHP8y9mWfYdbybKRBBAAAEERhUgsFngf+mll/7m/v3732/qytQKG6trTfLDfq4K43mefz7Lsn8a1jpnI4AAAgggEPDxdxsXgWyHfBHOwjC8EZhNbA3Bvms2KhyI7T4ef6ar3COhzY4/vSCAAAK+C7DCZrjCy+VyH0WR9BNU1V/yJgIbq2uGC1xqntBmz5qeEEAAgVMTILAZrrjsl/jDhw939+7du2M6sLG6Zri4leaXy+XLURR9V9Gr2LvtZ+JnRVH8Q5qm/2x3dPSGAAIIIDBlAQKbweo1baVhOrCxumawuIqmG0Jb7YCKosijKPre9fX15+yPnB4RQAABBFwWILAZqk7drdBjlyYDm+y5uf1+f9hsNrfeaDREcLLNDgxtn2H17WQvHSaOAAIIKAUIbIYuDtnqVp7nhyzLHgcmU4FtsVjcn8/nT5WnZvorCoYYJ9tsKbT9JAiCP2k7ERPPMbbtm+MQQAABBNwVILAZqE3TrVDTK2yy1bXdbvfmdrt92sB0abJG4Orq6pU8zz9bfSNYdQqBjcsJAQQQQEAmQGDTfF20uRVqMrCxuqa5oAabW61Wn46i6Kuii6Io3i/+myTJkwa7pGkEEEAAgYkKENg0Fm65XD6IoujWt0Krt0JNBjZW1zQWlKYQQAABBBBwRIDApqkQqrBW9/UC3c+wsbqmqZg0gwACCCCAgGMCBDYNBVGFtXdvcSmNdQc22YsOPLumocA0gQACCCCAwMgCBLaBBagLa3me77Isu6PqQmdgu7i42J+dnd34ooKpb5MOJON0BBBAAAEEEOgoQGDrCFY+fEhYE+3oDGxskjugkJyKAAIIIICA4wIENkWBlsvlW1mWKd/YGxrWdAY2Vtcc/1fG8BBAAAEEEBgoQGCTAB7DmOqWpo6wpjOwsbo28F8BpyOAAAIIIOC4AIGtUqC6MNZUy6Zn1qrn67glyupaU1X4OQIIIIAAAtMXILCVamgzrOlaYWN1bfr/CJkBAggggAACTQIENg2BrevK2rHLoStsbT+B1XQR8HMEEEAAAQQQcFuAwFapz2q1+mkYhnfFX4sPpoehnEiENPFVg75hTccKG6trbv/jYnQIIIAAAgjoEiCwKSQvLi4eHA6H4Pz8/NanpsQpaZqGq9XqN2maPte3GENW2Fhd66vOeQgggAACCExPgMA2Ys36BrbFYvHmfD6/teVIkiTUc8R60jUCCCCAAAKmBPgFb0q2Rbt9A5vsA+/7/f6w2WzOWnTLIQgggAACCCAwMQEC24gF6xPYFNt4PLpFO+JU6BoBBBBAAAEEDArwS94gblPTfQKb4gPvb22326ea+uPnCCCAAAIIIDBNAQLbiHWrhq88z/Msy258wL08PF40GLFYdI0AAggggMCIAgS2EfGrga0oiiJN00g2JF40GLFQdI0AAggggMDIAgS2EQsgCWzKZ9F40WDEQtE1AggggAACIwsQ2EYsgCyEybbm4EWDEYtE1wgggAACCDggQGAbsQiyZ9JkgY0XDUYsEl0jgAACCCDggACBbcQiLJfLQxRFN55ZqwY22Spc3bNuI06HrhFAAAEEEEDAkACBzRBs22brXjyQrcCJdvmiQVtdjkMAAQQQQMAPAQLbyHWU3e6sG9Jut3t7u93e+izVyNOgewQQQAABBBAwKEBgM4jbpmnVKprsXG6FthHlGAQQQAABBPwTILA5UFPxLJsYRvV5tvLQiqLg81MO1IohIIAAAgggMIYAgW0MdUmfsq07xGHiFuj5+fkd1Ya6jgyfYSCAAAIIIICAQQECm0HcIU2LW6XifILaEEXORQABBBBAwA8BApsfdWQWCCCAAAIIIOCxAIHN4+IyNQQQQAABBBDwQ4DA5kcdmQUCCCCAAAIIeCxAYPO4uEwNAQQQQAABBPwQILD5UUdmgQACCCCAAAIeCxDYPC4uU0MAAQQQQAABPwQIbH7UkVkggAACCCCAgMcCBDaPi8vUEEAAAQQQQMAPAQKbH3VkFggggAACCCDgsQCBzePiMjUEEEAAAQQQ8EOAwOZHHZkFAggggAACCHgsQGDzuLhMDQEEEEAAAQT8ECCw+VFHZoEAAggggAACHgsQ2DwuLlNDAAEEEEAAAT8ECGx+1JFZIIAAAggggIDHAgQ2j4vL1BBAAAEEEEDADwECmx91ZBYIIIAAAggg4LEAgc3j4jI1BBBAAAEEEPBDgMDmRx2ZBQIIIIAAAgh4LEBg87i4TA0BBBBAAAEE/BAgsPlRR2aBAAIIIIAAAh4LENg8Li5TQwABBBBAAAE/BAhsftSRWSCAAAIIIICAxwIENo+Ly9QQQAABBBBAwA8BApsfdWQWCCCAAAIIIOCxAIHN4+IyNQQQQAABBBDwQ4DA5kcdmQUCCCCAAAIIeCxAYPO4uEwNAQQQQAABBPwQILD5UUdmgQACCCCAAAIeCxDYPC4uU0MAAQQQQAABPwQIbH7UkVkggAACCCCAgMcCBDaPi8vUEEAAAQQQQMAPAQKbH3VkFggggAACCCDgsQCBzePiMjUEEEAAAQQQ8EOAwOZHHZkFAggggAACCHgs8HtOcCA3VNjYEAAAAABJRU5ErkJggg=='),'abc', ['mime' => 'image/jpeg'])
                ->attach(public_path('toolbox/'.$folder_name.'/'.$toolbox->name), [
                    'as' => $toolbox->name,
                    'mime' => 'application/pdf',
                ]);

        });

    }
public function addnew(Request $request){

   $folders=Folder::where('type','toolbox')->where('company_id',Auth::user()->company_id)->OrderBy('name','ASC')->get();
  return view('dashboard2.toolbox.add',compact('folders'));


}
    public function store(Request $request)
    {

        if($request->action == 0){

            $already=Folder::where('name',$request->folder_name)->where('type','toolbox')->get();
            if(count($already) > 0){

                Session::flash('errormsg', 'Folder Already Exits');

            }else {
                $folder = new Folder();
                $folder->name = $request->folder_name;
                $folder->type = $request->type;
                $folder->company_id = Auth::user()->company_id;
                $folder->save();
                $path = public_path().'/toolbox/'.$request->folder_name;
                File::makeDirectory($path, $mode = 0777, true, true);
                Session::flash('succesmsg', 'Folder Added Sucessfully');
            }
            return redirect()->back();

        }
        if ($request->action == 1){
            if ($request->folder == ''){
                Session::flash('errormsg', 'Please Choose Folder');
                return redirect()->back();

            }
            if ($request->o_file == ''){
                Session::flash('errormsg', 'Please Choose File');
                return redirect()->back();

            }
            if($request->has('o_file')){

                $folder=Folder::find($request->folder);
                $file = $request->file('o_file')->getClientOriginalName();
                $request->o_file->move(public_path() . '/toolbox/' . $folder->name, $file);

                $doc = new Toolbox();
                $doc->name = $file;
                $doc->folder_id = $request->folder;
                $doc->save();
                Session::flash('succesmsg', 'File Uploaded Sucessfully');

                return redirect()->back();
            }else{
                Session::flash('errormsg', 'Choose only Pdf');

                return redirect()->back();
            }

        }

    }

    public function push_notification($id){

        $user = User::find($id);
        $body['type']='toolbox';
        Notification::send($user, new NewUserNotification($body));




    }
    public function assign(Request $request){


        if ($request->type == 'manager'){
            $mexist=ManagerHasToolbox::where('manager_id',$request->manager_id)->where('toolbox_id',$request->file_id)->count();
            if ($mexist < 1) {
                $add = new ManagerHasToolbox();
                $add->manager_id = $request->manager_id;
                $add->toolbox_id = $request->file_id;
                $add->folder_id = $request->folder_id;
                $add->save();
            }


        }
    if ($request->type == 'user'){

        $already=WorkerHasToolbox::where('worker_id',$request->user_id)->where('toolbox_id',$request->file_id)->count();
        if($already < 1 ) {
            $this->push_notification($request->user_id);
            $add = new WorkerHasToolbox();
            $add->worker_id = $request->user_id;
            $add->toolbox_id = $request->file_id;
            $add->folder_id = $request->folder_id;
            $add->save();
        }

    }
    if ($request->type == 'proj'){

        $workers=Worker::where('job_no',$request->project_id)->get();

        if (count($workers) > 0){
            foreach ($workers as $worker){
                $already=WorkerHasToolbox::where('worker_id',$worker->user->id)->where('toolbox_id',$request->file_id)->count();
                if($already < 1 ) {
                    $this->push_notification($worker->user->id);
                    $add = new WorkerHasToolbox();
                    $add->worker_id=$worker->user->id;
                    $add->toolbox_id=$request->file_id;
                    $add->folder_id = $request->folder_id;
                    $add->save();
                }
            }
        }

    }
        Session::flash('succesmsg','Success');
        return redirect()->back();


}

    public function delfolder(Request $request)
    {

        $del=Folder::find($request->folder_id);
        $path = public_path().'/toolbox/'.$del->name;

        File::deleteDirectory($path);
        $res=Toolbox::where('folder_id',$request->folder_id)->delete();

        $del->delete();
        Session::flash('succesmsg','Deleted Successfully');
        return redirect()->back();

    }

    public function destroy(Request $request)
    {
        $del=Toolbox::find($request->file_id);
        $folder=Folder::find($del->folder->id);
        $path = public_path()."/toolbox/".$folder->name.'/'.$del->name;
        unlink($path);
        $del->delete();
        Session::flash('succesmsg', 'Successfully Accept Invitation');
        return redirect()->back();

    }
    public function edit(Request $request){

            $folder = Folder::find($request->folder_id);

            if ($folder->name != $request->folder_name) {
                $folder_name = $folder->name;
                $name = public_path() . "/toolbox/" . $folder->name;
                $rename = public_path() . "/toolbox/" . $request->folder_name;

                if (is_dir($rename)) {
//            rename($name, $rename);
                    foreach ($folder->toolbox as $files) {

                        copy($name . '/' . $files->name, $rename . '/' . $files->name);
                    }
                } else {
                    File::makeDirectory($rename, $mode = 0777, true, true);
                    foreach ($folder->toolbox as $files) {

                        copy($name . '/' . $files->name, $rename . '/' . $files->name);
                    }

                }

                File::deleteDirectory($name);

                if ($folder->name != $request->folder_name) {
                    $folder->name = $request->folder_name;
                    $folder->save();
                }
            }

        return redirect()->back();
    }

}
