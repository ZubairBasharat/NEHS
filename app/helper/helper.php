<?php



function random_code(){

    return rand(1111, 9999);
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


    $data=\App\Models\Assignment::where('course_id',$id)->count();
    if ($data) {
        return $data;
    }else{
        return $data=0;
    }
}
