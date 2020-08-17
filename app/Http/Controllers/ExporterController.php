<?php

namespace App\Http\Controllers;

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
}
