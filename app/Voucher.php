<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';
    protected $fillable = [
        'name', 'nominal', 'brands', 'description', 'time', 'image'
    ];
}
