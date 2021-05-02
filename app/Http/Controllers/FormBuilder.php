<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

//use App\Mail\FormSubmitted;

class FormBuilder extends Controller
{
    /**
     * show the builder
     */

    public function show(Request $request){


        $data=$request->formm;

//        dd($data);
//        foreach ($data as $key=>$value){
//           foreach ($value as $key2=>$val){
//            if ($key2=='type') {
//                echo $value[$key2] . '<br>';
//
//                switch ($val) {
//                    case 'select':
//                        $field_config_data = [
//                            'type' => 'select',
//                            'additionalConfig' => [
//                                'listOptions' =>
//                            ]
//                        ];
//
//                        break;
//
//
//
//                    default:
//
//                }
//            }
//           }
//        }


        return view('show',compact('data'));


    }
    public function save(Request $request){

//        dd($request->all());
        $data=$request->all();

        return view('pdf',compact('data'));


    }


    public function showBuilder() {


        return view('builder');
    }





}
