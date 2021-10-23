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

Route::group([], function () {

    // Route::get('/product-category/create', function () {
    //     return view('pages.productCategory.create');
    // });

    Route::get('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'create']);
    Route::post('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'store']);
    Route::get('/product-category/edit/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'edit']);
    Route::post('/product-category/update', [\App\Http\Controllers\ProductCategoryController::class, 'update']);
    Route::get('/product-category/delete/{id}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy']);

    Route::get('/customer/create', [\App\Http\Controllers\CustomerController::class, 'create']);
    Route::post('/customer/create', [\App\Http\Controllers\CustomerController::class, 'store']);
    Route::get('/customer/edit/{id}', [\App\Http\Controllers\CustomerController::class, 'edit']);
    Route::post('/customer/update', [\App\Http\Controllers\CustomerController::class, 'update']);
    Route::get('/customer/delete/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy']);

    Route::get('/bill-details/create', [\App\Http\Controllers\BillDetailsController::class, 'create']);
    Route::post('/bill-details/create', [\App\Http\Controllers\BillDetailsController::class, 'store']);
    Route::get('/bill-details/edit/{id}', [\App\Http\Controllers\BillDetailsController::class, 'edit']);
    Route::post('/bill-details/update', [\App\Http\Controllers\BillDetailsController::class, 'update']);
    Route::get('/bill-details/delete/{id}', [\App\Http\Controllers\BillDetailsController::class, 'destroy']);
});




Route::get('/user', function () {
    return view('pages.user.index');
});

Route::get('/user/create', function () {
    return view('pages.user.create');
});

Route::get('/user/edit/{id}', function ($id) {
    return view('pages.user.edit');
});

// [NEWS]
Route::get('/news', function () {
    return view('pages.news.index');
});

Route::get('/news/create', function () {
    return view('pages.news.create');
});

Route::get('/news/edit/{id}', function ($id) {
    return view('pages.news.edit');
});




// Route::get('/bill-details/create', function () {
//     return view('pages.billDetails.create');
// });

// Route::get('/bill-details/update', function () {
//     return view('pages.billDetails.update');
// });



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
});

Route::get('/bill/create', function () {
    return view('pages.bill.create');
});

Route::get('/bill/update', function () {
    return view('pages.bill.update');
});
