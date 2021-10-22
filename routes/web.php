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

Route::get('/bill/create', function () {
    return view('pages.bill.create');
});

Route::get('/bill/update', function () {
    return view('pages.bill.update');
});
