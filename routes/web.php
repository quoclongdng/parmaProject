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

// [USER]
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
});
