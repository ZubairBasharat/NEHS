<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('exports.personel', [
            'users' => Worker::where('company_id','=',Auth::User()->company_id)->get()
        ]);
    }
//    public function drawings()
//    {
//        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
//        $drawing->setName('Logo');
//        $drawing->setDescription('This is my logo');
//        $drawing->setPath(public_path('assets/media/logos/logo2.png'));
//        $drawing->setHeight(90);
//        $drawing->setCoordinates('A1');
//
//        return $drawing;
//    }

}
