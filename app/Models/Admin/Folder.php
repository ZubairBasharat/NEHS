<?php

namespace App\Models\Admin;

use App\Models\Resource;
use App\Models\Toolbox;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;



    public function resources()
    {
        return $this->hasMany(Resource::class,'folder_id','id');
    }
    public function toolbox()
    {
        return $this->hasMany(Toolbox::class,'folder_id','id');
    }

}
