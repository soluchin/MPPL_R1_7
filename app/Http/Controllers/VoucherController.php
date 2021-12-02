<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$voucher = \App\Voucher::all();
    	return view('voucher', ['voucher' => $voucher]);
    }
}
