<?php

namespace App\Http\Controllers;

use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use App\Product;
use Chart;
use DB;

class ChartController extends Controller
{
    public function index()
    {
        $products = Product::where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"),date('Y'))->get();
        $chart = Charts::database($products, 'bar','highcharts')
                    ->title("Product Details")
                    ->elementLabel("Total products")
                    ->dimensions(1000,500)
                    ->responsive(false)
                    ->groupByMonth(date('Y'), true);
        return view('charts', compact('chart'));
        ;
    }
}
