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

Route::get('/user',function(){
    return view('pages.user.index');
});

Route::get('/user/create',function(){
    return view('pages.user.create');
});

Route::get('/user/edit/{id}',function($id){
    return view('pages.user.edit');
});

// [NEWS]
Route::get('/news',function(){
    return view('pages.news.index');
});

Route::get('/news/create',function(){
    return view('pages.news.create');
});

Route::get('/news/edit/{id}',function($id){
    return view('pages.news.edit');
=======

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


Route::get('/product-category/edit', function () {
    return view('pages.productCategory.edit');
});

Route::get('/product/create', function () {
    return view('pages.product.create');
});

Route::get('/product/index', function () {
    return view('pages.product.index');
});
Route::get('/product/edit', function () {
    return view('pages.product.edit');
});


Route::get('/news-category/create', function () {
    return view('pages.newsCategory.create');
});

Route::get('/news-category/edit', function () {
    return view('pages.newsCategory.edit');

Route::get('/bill/create', function () {
    return view('pages.bill.create');
});

Route::get('/bill/update', function () {
    return view('pages.bill.update');
});
