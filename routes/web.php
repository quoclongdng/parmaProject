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

Route::group([], function(){

    // Route::get('/product-category/create', function () {
    //     return view('pages.productCategory.create');
    // });

    Route::get('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'create']);
    Route::post('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'store']);
    Route::get('/product-category/edit/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'edit']);
    Route::post('/product-category/update', [\App\Http\Controllers\ProductCategoryController::class, 'update']);
    Route::get('/product-category/delete/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy']);



        // product
    Route::get('/product', [\App\Http\Controllers\ProductController::class,'index']);
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class,'create']);
    Route::post('/product/create', [\App\Http\Controllers\ProductController::class,'store']);
    Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class,'edit']);
    Route::post('/product/update', [\App\Http\Controllers\ProductController::class,'update']);
    Route::get('/product/delete/{id}', [\App\Http\Controllers\ProductController::class,'destroy']);

        // newCategory
    Route::get('/news-category/create', [\App\Http\Controllers\NewsCategoryController::class,'create']);
    Route::post('/news-category/create', [\App\Http\Controllers\NewsCategoryController::class,'store']);
    Route::get('/news-category/edit/{id}', [\App\Http\Controllers\NewsCategoryController::class,'edit']);
    Route::post('/news-category/update', [\App\Http\Controllers\NewsCategoryController::class,'update']);
    Route::get('/news-category/delete/{id}', [\App\Http\Controllers\NewsCategoryController::class,'destroy']);





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




Route::get('/bill/create', function () {
    return view('pages.bill.create');
});

Route::get('/bill/update', function () {
    return view('pages.bill.update');
});
