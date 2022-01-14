<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function file()
    {
        return $this->belongsTo(Resource::class,'file_id','id');
    }
}
