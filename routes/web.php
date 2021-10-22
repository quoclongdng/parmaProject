<?php

use Illuminate\Support\Facades\Route;

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
    return view('master');
});

Route::get('/product-category/create', function () {
    return view('pages.productCategory.create');
});

Route::get('/customer/create', function () {
    return view('pages.customer.create');
});

Route::get('/customer/update', function () {
    return view('pages.customer.update');
});

Route::get('/bill-details/create', function () {
    return view('pages.billDetails.create');
});

Route::get('/bill-details/update', function () {
    return view('pages.billDetails.update');
});
