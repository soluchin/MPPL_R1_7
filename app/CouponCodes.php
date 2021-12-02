<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponCodes extends Model
{
    protected $table = 'codepromo';
    protected $fillable = [
        'name', 'nominal', 'brands', 'description', 'time', 'image'
    ];
}
