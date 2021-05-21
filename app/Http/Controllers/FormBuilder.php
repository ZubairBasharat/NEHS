<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
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
        $pdf = PDF::loadHTML($request->formm);
        $path = public_path('pdf_docs/'); // <--- folder to store the pdf documents into the server;
        $fileName =  time().'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        sleep(3);
        $generated_pdf_link = url('pdf_docs/'.$fileName);
//        return response()->json($generated_pdf_link);
        return response()->download('pdf_docs/'.$fileName);

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


//        return view('show',compact('data'));


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
