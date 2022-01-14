<?php

namespace App\Exports;

use App\Models\department;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DepartmentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=department::where('company_id','=',Auth::User()->company_id)->get();;
        return view('exports.department', [
            'data' => $data
        ]);
    }
}
