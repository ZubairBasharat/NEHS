<?php

namespace App\Models\Admin;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerHasForms extends Model
{
    use HasFactory;
    protected $table='worker_has_forms';




    public function forms()
    {
        return $this->belongsTo(Resource::class,'form_id','form_id');
    }
}
