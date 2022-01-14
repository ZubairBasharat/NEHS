<?php

namespace App\Exports;

use App\Models\course;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CoursesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=course::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.courses', [
            'data' => $data
        ]);
    }
}
