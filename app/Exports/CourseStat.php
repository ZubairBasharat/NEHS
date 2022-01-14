<?php

namespace App\Exports;


use App\Models\CourseResults;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CourseStat implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=CourseResults::where('company_id','=',Auth::User()->company_id)->get();;
        return view('exports.course-stat', [
            'data' => $data
        ]);
    }
}
