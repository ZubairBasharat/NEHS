<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video_categorie extends Model
{
    //    this category model belongs to video library
    use HasFactory;


    public function videos(){

        return $this->hasMany(VideoLibrary::class,'video_cat_it','id');
    }
}
