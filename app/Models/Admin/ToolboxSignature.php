<?php

namespace App\Models\Admin;

use App\Models\Toolbox;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolboxSignature extends Model
{
    use HasFactory;
    protected $table="toolbox_signatures";


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function file()
    {
        return $this->belongsTo(Toolbox::class,'file_id','id');
    }

}
