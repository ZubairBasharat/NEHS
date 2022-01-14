<?php

namespace App\Exports;

use App\Models\Certificate;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CertificatesExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=Certificate::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.certificate', [
            'data' => $data
        ]);
    }
}
