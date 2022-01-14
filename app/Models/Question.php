<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;



        public function course_of()
    {
        return $this->belongsTo(course::class, 'course_id','id');
    }
}
