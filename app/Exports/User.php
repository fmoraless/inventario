<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class User implements FromView
{
    public function view(): View
    {
        return view('exports.users', [
            'users' => \App\User::all()
        ]);
    }
}
