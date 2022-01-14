<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class CardDetailController extends Controller
{
    public function show($id){

        $worker=Worker::find($id);
        $user=$worker;
        $certificates=Worker::find($id)->certificates()->get();
        return view('partial.QrScanDetail',compact('worker','certificates','user'));




    }
}
