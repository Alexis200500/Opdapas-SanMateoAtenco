<?php

namespace App\Exports;

use App\Models\usuarios;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutosize;

class UsersExport implements FromView,ShouldAutosize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): view
    {
        return view('export',['usuarios' => usuarios::all()]);
    }
}
