<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    use HasFactory;



    public function admin(){

        return $this->hasOne(User::class,'company_id');


    }
}
