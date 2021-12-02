<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodePromoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$couponcode = \App\CouponCodes::all();
    	return view('couponcode', ['couponcode' => $couponcode]);
    }
}
