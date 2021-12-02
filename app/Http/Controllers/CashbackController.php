<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$cashback = \App\Cashback::all();
    	return view('cashback', ['cashback' => $cashback]);
    }
}
