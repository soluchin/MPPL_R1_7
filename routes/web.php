<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/voucher', 'VoucherController@index')->name('voucher');

Route::get('/couponcode', 'CodePromoController@index')->name('couponcode');

Route::get('/mycoupons', 'HomeController@mycoupons')->name('mycoupons');

Route::get('/cashback', 'CashbackController@index')->name('cashback');

Route::get('/admin/login', function () {
	return view('admin.login');
});

Route::get('/admin/register', function () {
	return view('admin.register');
});

Route::get('/admin/dashboard', function () {
	return view('admin.dashboard');
});

Route::get('/admin/voucher', function () {
	return view('admin.voucher');
});

Route::get('/admin/couponcode', function () {
	return view('admin.couponcode');
});

Route::get('/admin/voucher/create', function () {
	return view('admin.createvoucher');
});

Route::get('/admin/voucher/edit', function () {
	return view('admin.editvoucher');
});