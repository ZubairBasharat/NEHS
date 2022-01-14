<?php

namespace App\Models;

use App\Http\Controllers\Admin\WorkerCoursesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;





//    public function course()
//    {
//        return $this->hasOne(Worker::class,'user_id','id');
//    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function equipments()
    {
        return $this->hasMany(WorkerHasEquipment::class,'id_worker','id');
    }

    public function groups()
    {
        return $this->hasMany(WorkerHasGroups::class,'id_worker','id');
    }

    public function coursess()
    {
        return $this->hasMany(worker_course::class,'w_id','id');
    }
    public function certificates()
    {
        return $this->hasMany(CourseResults::class,'worker_id','id');
    }


}
