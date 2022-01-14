<?php

namespace App\Exports;

use App\Models\Form;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class FormPdf implements FromView
{
    public function __construct(int $id)
    {
        $this->id=$id;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function view():View
    {
        $id=$this->id;
        $data=Form::find($id);
        return view('exports.form', [
            'data' => $data,
            'id' => $id
        ]);
    }
}
