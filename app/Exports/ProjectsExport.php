<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProjectsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $projects= \App\Models\Projects::where('company_id','=',Auth::User()->company_id)->get();
        return view('exports.projects', [
            'projects' => $projects
        ]);
    }
}