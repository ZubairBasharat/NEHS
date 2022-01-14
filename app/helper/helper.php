<?php



function random_code(){

    return rand(1111, 9999);
}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function allUpper($str){
    return strtoupper($str);
}


function course_cat_byid($id){


    $data=\App\Models\CourseCategory::find($id);
    if ($data) {
        return $data;
    }else{
        return $data='';
    }
}
function course_byid($id){

    $data=\App\Models\course::find($id);
    if ($data) {
        return $data;
    }else{
        return $data='';
    }
}
function departments_byid($id){


    $data=\App\Models\department::find($id);
    if ($data) {
        return $data;
    }else{
        return $data='';
    }
}
function count_course_assignments($id){


    $data=\App\Models\Assignment::where('course_id',$id)->where('lng','eng')->count();
    $data1=\App\Models\AcknowledgmentForms::where('course_id',$id)->where('lng','eng')->count();
    $data2=\App\Models\Question::where('course_id',$id)->where('lng','eng')->count();

    if ($data || $data1 || $data2) {
        return $data+$data1+$data2;
    }
    else{
        return $data=0;
    }
}

function count_esp_course_assignments($id){


    $data=\App\Models\Assignment::where('course_id',$id)->where('lng','esp')->count();
    $data1=\App\Models\AcknowledgmentForms::where('course_id',$id)->where('lng','esp')->count();
    $data2=\App\Models\Question::where('course_id',$id)->where('lng','esp')->count();

    if ($data || $data1 || $data2) {
        return $data+$data1+$data2;
    }
    else{
        return $data=0;
    }
}

function count_course_type($id){


    $data=\App\Models\Assignment::where('course_id',$id)->count();
    $data1=\App\Models\AcknowledgmentForms::where('course_id',$id)->count();
    $data2=\App\Models\Question::where('course_id',$id)->count();
    $rr='';
    if($data > 0){
        $rr .='Video';
    }
    if($data1 > 0){
        $rr .=',Form';
    }
    if($data2 > 0){
        $rr .=',Question';
    }

        return $rr;


}

function count_course_type_esp($id){


    $data=\App\Models\Assignment::where('course_id',$id)->where('lng','esp')->count();
    $data1=\App\Models\AcknowledgmentForms::where('course_id',$id)->where('lng','esp')->count();
    $data2=\App\Models\Question::where('course_id',$id)->where('lng','esp')->count();
    $rr='';
    if($data > 0){
        $rr .='Video';
    }
    if($data1 > 0){
        $rr .=',Form';
    }
    if($data2 > 0){
        $rr .=',Question';
    }

    return $rr;


}

/**
 * @param $id
 * @return int
 */
function update_login($id){

    $user=\App\Models\User::find($id);
    $user->last_auth=\Carbon\Carbon::now();
    $user->save();
}

function equipment_byid($id){

    $data=\App\Models\Equipment::find($id);
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}
function group_byid($id){

    $data=\App\Models\Group::find($id);
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}
function folder_byid($id){

    $data=\App\Models\Admin\Folder::find($id);
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}
function assignmnet_by_course_id($id){

    $data=\App\Models\Assignment::where('course_id',$id)->get();
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}
function worker_by_id($id){

    $data=\App\Models\Worker::find($id);
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}

function project_by_id($id){

    $data=\App\Models\Projects::find($id);
    if ($data) {
        return $data->name;
    }else{
        return $data=0;
    }
}
function check_user_has_this_course($c_id,$user_id){

    $data=\App\Models\worker_course::where('w_id',$user_id)->where('course_id',$c_id)->count();
    return $data;


}
function check_user_has_this_group($g_id,$user_id){

    $data=\App\Models\WorkerHasGroups::where('id_worker',$user_id)->where('id_group',$g_id)->count();
    return $data;


}
function ISO8601ToSeconds($ISO8601){
    $interval = new \DateInterval($ISO8601);

    return ($interval->d * 24 * 60 * 60) +
        ($interval->h * 60 * 60) +
        ($interval->i * 60) +
        $interval->s;
}
function toolbox_by_id($id){

    $data=\App\Models\Toolbox::find($id);
    return $data;


}
function mylogo(){
    $company_id=\Illuminate\Support\Facades\Auth::user()->company_id;
    $logo=App\Models\companie::find($company_id);
    return $logo;

}
function is_department_used($id){
    $data=\App\Models\Worker::where('dep_id',$id)->count();
    $data2=\App\Models\course::where('department_id',$id)->count();
    return $data+$data2;

}
function is_proect_used($id){
    $data=\App\Models\Worker::where('job_no',$id)->count();
    return $data;

}
function is_course_used($id){

    $data=count_esp_course_assignments($id);
    $data1=count_course_assignments($id);
    $data3=\App\Models\worker_course::where('course_id',$id)->count();
    return $data+$data1+$data3;
}
function is_certificate_used($id){


    $data=\App\Models\Certificate::where('id',$id)->count();
    return $data;



}
