<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\Pivot;



class PurchaseDetail extends Model
{
    protected $table ='purchase_details';

    public $timestamps = false;

    protected $fillable = [
      'purchase_id',
      'product_id',
      'quantity'
    ];

}
