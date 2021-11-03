<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

// Route::group(['middleware' => 'checklogin'], function () {
Route::group([], function () {

    Route::get('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'create']);
    Route::post('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'store']);
    Route::get('/product-category/edit/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'edit']);
    Route::post('/product-category/update', [\App\Http\Controllers\ProductCategoryController::class, 'update']);
    Route::get('/product-category/delete/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy']);

    // product
    Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::post('/product/create', [\App\Http\Controllers\ProductController::class, 'store']);
    Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit']);
    Route::post('/product/update', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::get('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);

    // newCategory
    Route::get('/news-category/create', [\App\Http\Controllers\NewsCategoryController::class, 'create']);
    Route::post('/news-category/create', [\App\Http\Controllers\NewsCategoryController::class, 'store']);
    Route::get('/news-category/edit/{id}', [\App\Http\Controllers\NewsCategoryController::class, 'edit']);
    Route::post('/news-category/update', [\App\Http\Controllers\NewsCategoryController::class, 'update']);
    Route::get('/news-category/delete/{id}', [\App\Http\Controllers\NewsCategoryController::class, 'destroy']);

    // customer
    Route::get('/customer/create', [\App\Http\Controllers\CustomerController::class, 'create']);
    Route::post('/customer/create', [\App\Http\Controllers\CustomerController::class, 'store']);
    Route::get('/customer/edit/{id}', [\App\Http\Controllers\CustomerController::class, 'edit']);
    Route::post('/customer/update', [\App\Http\Controllers\CustomerController::class, 'update']);
    Route::get('/customer/delete/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy']);

    // bill detail
    Route::get('/bill-details/create/{hash}', [\App\Http\Controllers\BillDetailsController::class, 'create']);
    Route::post('/bill-details/create', [\App\Http\Controllers\BillDetailsController::class, 'store']);
    Route::get('/bill-details/edit/{id}', [\App\Http\Controllers\BillDetailsController::class, 'edit']);
    Route::post('/bill-details/update', [\App\Http\Controllers\BillDetailsController::class, 'update']);
    Route::get('/bill-details/delete/{id}', [\App\Http\Controllers\BillDetailsController::class, 'destroy']);

    // [NEWS]
    Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
    Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create']);
    Route::post('/news/create', [\App\Http\Controllers\NewsController::class, 'store']);
    Route::get('/news/edit/{id}', [\App\Http\Controllers\NewsController::class, 'edit']);
    Route::post('/news/update', [\App\Http\Controllers\NewsController::class, 'update']);
    Route::get('/news/delete/{id}', [\App\Http\Controllers\NewsController::class, 'destroy']);

    // [USER]
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create']);
    Route::post('/user/create', [\App\Http\Controllers\UserController::class, 'store']);
    Route::get('/user/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/user/update', [\App\Http\Controllers\UserController::class, 'update']);
    Route::get('/user/delete/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);

    Route::get('/bill/create', [\App\Http\Controllers\BillController::class, 'create']);
    Route::post('/bill/create', [\App\Http\Controllers\BillController::class, 'store']);
    Route::get('/bill/update/{id}', [\App\Http\Controllers\BillController::class, 'edit']);
    Route::post('/bill/update', [\App\Http\Controllers\BillController::class, 'update']);
    Route::get('/bill/delete/{id}', [\App\Http\Controllers\BillController::class, 'destroy']);

    // productDetails
    Route::get('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'create']);
    Route::post('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'store']);
    Route::get('/productDetail/update/{id}', [\App\Http\Controllers\ProductDetailController::class, 'edit']);
    Route::post('/productDetail/update', [\App\Http\Controllers\ProductDetailController::class, 'update']);
    Route::get('/productDetail/delete/{id}', [\App\Http\Controllers\ProductDetailController::class, 'destroy']);
});
