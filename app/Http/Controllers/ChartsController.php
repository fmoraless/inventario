<?php

namespace App\Http\Controllers;
use App\Purchase;
use Illuminate\Http\Request;
use DB;

class ChartsController extends Controller
{
    public function purchases(){
        $purchases = Purchase::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total) as mount')
        )->groupBy('month')->get()->toArray();
        //dd($purchases);
        $mounts = array_fill(0,12,0);
        foreach ($purchases as $purchase){
            $index = ($purchase['month']-1);
            $mounts[$index] = $purchase['mount'];
        }
        $mounts = array_map('intval', $mounts);
        //dd($mounts);

        //******* Con PLUCK ****************//
        //Hasta acá pasa los datos como array, pero no carga el char (blanco) *********///
        /*$categories = \Illuminate\Support\Facades\DB::table('products')
            ->selectRaw('categories.name, COUNT(products.category_id) as y')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->groupByRaw('categories.name')
            ->get()->pluck('y', 'name');
            //dd($categories);*/
        //*************************************************************************************///

        //*** Prueba con 2 arrays: uno para labels y otro para data ///****
       /* $data = DB::table('products')
            ->select(
                DB::raw('category_id as category'),
                DB::raw('COUNT(*) as number')
            )->groupBy('category')
            ->get();
        $array[] = ['Categoria', 'Valor'];
        foreach ($data as $key => $value)
        {
            $array[++$key] = [$value->category, $value->number];
        }
        //dd($array);*/

        $categories = \Illuminate\Support\Facades\DB::table('products')
            ->selectRaw('categories.name, COUNT(products.category_id) as y')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->groupByRaw('categories.name')
            ->get()->toArray();

        return view('charts.purchases', compact('mounts', 'categories'));
    }

}
