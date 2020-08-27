<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table ='purchases';

        public function products()
        {
            return $this->belongsToMany(Product::class, 'purchase_details')
                ->withPivot(['quantity']);
        }
}
