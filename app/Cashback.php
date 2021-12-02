<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashback extends Model
{
    protected $table = 'cashback';
    protected $fillable = [
        'name', 'nominal', 'brands', 'description', 'time', 'image'
    ];
}
