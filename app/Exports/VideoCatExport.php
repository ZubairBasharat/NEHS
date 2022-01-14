<?php

namespace App\Exports;


use App\Models\video_categorie;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class VideoCatExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data=video_categorie::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.video-cat', [
            'data' => $data
        ]);
    }
}
