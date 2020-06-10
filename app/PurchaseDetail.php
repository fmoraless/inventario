<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class PurchaseDetail extends Model
{
    public $timestamps = false;

    public function purchase()
    {
        $this->belongsTo(Purchase::class);
    }

}
