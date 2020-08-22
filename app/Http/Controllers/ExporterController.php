<?php

namespace App\Http\Controllers;

use App\Export;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;


class ExporterController extends Controller
{
    public function __construct (){
        set_time_limit(0);
        ini_set('max_execution_time',3000);
        ini_set('memory_limit', '256M');
    }

    public function index(){
        return view('exporter.form');
    }

    public function export() {
        //validacion de modelo pendiente

        $model = request('exportable');
        $exportable = "App\\Exports\\{$model}";
//        dd($exportable);
        Export::create([
            "model" => $exportable,
            "created_at" => Carbon::now()
        ]);
        return Excel::download(new $exportable, "{$model}.xlsx");
    }
}
