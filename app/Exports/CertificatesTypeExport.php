<?php

namespace App\Exports;


use App\Models\CertificatesType;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CertificatesTypeExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=CertificatesType::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.certificates-type', [
            'data' => $data
        ]);
    }
}
