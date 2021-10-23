<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('master');
});

Route::group([], function(){


    Route::get('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'create']);
    Route::post('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'store']);
    Route::get('/product-category/edit/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'edit']);
    Route::post('/product-category/update', [\App\Http\Controllers\ProductCategoryController::class, 'update']);
    Route::get('/product-category/delete/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy']);

    // [NEWS]
    Route::get('/news',[\App\Http\Controllers\NewsController::class, 'index']);
    Route::get('/news/create',[\App\Http\Controllers\NewsController::class, 'create']);
    Route::post('/news/create',[\App\Http\Controllers\NewsController::class, 'store']);
    Route::get('/news/edit/{id}',[\App\Http\Controllers\NewsController::class, 'edit']);
    Route::post('/news/update',[\App\Http\Controllers\NewsController::class, 'update']);
    Route::get('/news/delete/{id}',[\App\Http\Controllers\NewsController::class, 'destroy']);

    // [USER]
    Route::get('/user',[\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/user/create',[\App\Http\Controllers\UserController::class, 'create']);
    Route::post('/user/create',[\App\Http\Controllers\UserController::class, 'store']);
    Route::get('/user/edit/{id}',[\App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/user/update',[\App\Http\Controllers\UserController::class, 'update']);
    Route::get('/user/delete/{id}',[\App\Http\Controllers\UserController::class, 'destroy']);
});
