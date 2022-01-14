<?php

namespace App\Models;

use App\Models\Admin\Folder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toolbox extends Model
{
    use HasFactory;
    protected $table='toolbox';



    public function folder(){

        return $this->belongsTo(Folder::class,'folder_id');

    }
}
