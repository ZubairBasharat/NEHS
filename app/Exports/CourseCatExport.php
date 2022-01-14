<?php

namespace App\Exports;

use App\Models\course;
use App\Models\CourseCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CourseCatExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view():View
    {
        $data=CourseCategory::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.courses-cat', [
            'data' => $data
        ]);
    }
}
