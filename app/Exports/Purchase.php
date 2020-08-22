<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Purchase implements FromView
{
    public function view(): View
    {
        return view('exports.purchases', [
           'purchases' => \App\Purchase::all()
        ]);
    }
}
