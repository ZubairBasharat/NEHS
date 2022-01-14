<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerHasToolbox extends Model
{
    use HasFactory;

    protected $table="worker_has_toolbox";
    public $timestamps=false;
}
