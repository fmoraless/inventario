<?php

namespace App\Widgets;

use App\Purchase;
use DB;
use Arrilot\Widgets\AbstractWidget;

class Purchases extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
       $purchases = Purchase::select(
           DB::raw('MONTH(created_at) as month'),
           DB::raw('COUNT(1) as count')
       )->groupBy('month')->get()->toArray();
       //dd($purchases);
        $counts = array_fill(0,12,0);
        foreach ($purchases as $purchase){
            $index = ($purchase['month']-1);
            $counts[$index] = $purchase['count'];
        }
        //dd($counts);
        return view('widgets.purchases', array_merge($this->config, [
            'counts', $counts
            ]));
    }

    public function shouldbeDisplayed()
    {
        return true;
    }
}
