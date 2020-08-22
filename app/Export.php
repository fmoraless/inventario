<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Export extends Model
{
    protected $fillable = [
      'model',
      'created_at'
    ];

    public $timestamps = false;
}
