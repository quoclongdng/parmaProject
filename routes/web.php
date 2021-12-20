<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , [\App\Http\Controllers\CustomerController::class , 'homePage']);

Route::get('/login' , [\App\Http\Controllers\CustomerController::class , 'viewLogin']);
Route::post('/login' , [\App\Http\Controllers\CustomerController::class , 'Login']);
Route::get('/register' , [\App\Http\Controllers\CustomerController::class , 'viewregister']);
Route::post('/register' , [\App\Http\Controllers\CustomerController::class , 'register']);
Route::get('/logout', [\App\Http\Controllers\CustomerController::class, 'logout']);

Route::get('/admin/login' , [\App\Http\Controllers\AdminUserController::class , 'loginAdmin']);
Route::post('/admin/login', [\App\Http\Controllers\AdminUserController::class, 'login']);
Route::get('/admin/logout', [\App\Http\Controllers\AdminUserController::class, 'logout']);

Route::get('/category/{slug}' , [\App\Http\Controllers\ProductCategoryController::class , 'viewCategories']);

Route::group(['prefix' => '/admin' , 'middleware' => 'adminLogin' ], function(){

    Route::get('/home' , [\App\Http\Controllers\AdminUserController::class , 'home']);

    Route::get('/product-category/create', [\App\Http\Controllers\ProductCategoryController::class, 'create']);
    Route::get('/product-category/list', [\App\Http\Controllers\ProductCategoryController::class, 'list_catagory']);
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
    Route::get('/customer/list', [\App\Http\Controllers\CustomerController::class, 'list_customer']);
    Route::post('/customer/create', [\App\Http\Controllers\CustomerController::class, 'store']);
    Route::get('/customer/edit/{id}', [\App\Http\Controllers\CustomerController::class, 'edit']);
    Route::post('/customer/update', [\App\Http\Controllers\CustomerController::class, 'update']);
    Route::get('/customer/delete/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy']);

    // bill detail
    Route::get('/bill-details/create', [\App\Http\Controllers\BillDetailsController::class, 'create']);
    Route::get('/bill-details/list_bill', [\App\Http\Controllers\BillDetailsController::class, 'list_bill']);
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
    Route::get('/bill/list', [\App\Http\Controllers\BillController::class, 'list']);
    Route::post('/bill/create', [\App\Http\Controllers\BillController::class, 'store']);
    Route::get('/bill/update/{id}', [\App\Http\Controllers\BillController::class, 'edit']);
    Route::post('/bill/update', [\App\Http\Controllers\BillController::class, 'update']);
    Route::get('/bill/delete/{id}', [\App\Http\Controllers\BillController::class, 'destroy']);

    // productDetails
    Route::get('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'create']);
    Route::get('/productDetail/list', [\App\Http\Controllers\ProductDetailController::class, 'list_product']);
    Route::post('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'store']);
    Route::get('/productDetail/update/{id}', [\App\Http\Controllers\ProductDetailController::class, 'edit']);
    Route::post('/productDetail/update', [\App\Http\Controllers\ProductDetailController::class, 'update']);
    Route::get('/productDetail/delete/list/{id}', [\App\Http\Controllers\ProductDetailController::class, 'destroy_table']);

});



Route::group(['prefix' => '/user','middleware' => 'checkLogin'], function () {
    // Route::get('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'create']);
    // Route::post('/productDetail/create', [\App\Http\Controllers\ProductDetailController::class, 'store']);
    // Route::get('/productDetail/update/{id}', [\App\Http\Controllers\ProductDetailController::class, 'edit']);
    // Route::post('/productDetail/update', [\App\Http\Controllers\ProductDetailController::class, 'update']);
    // Route::get('/productDetail/delete/{id}', [\App\Http\Controllers\ProductDetailController::class, 'destroy']);

    Route::get('/profile/{id}' , [\App\Http\Controllers\CustomerController::class , 'profile']);

    Route::post('/profile/update' , [\App\Http\Controllers\CustomerController::class , 'updateProfile']);

    Route::get('/product/index' , [\App\Http\Controllers\ProductDetailController::class , 'viewThucPhamChucNang']);

    Route::get('/product/detail/{id}' , [\App\Http\Controllers\ProductDetailController::class , 'viewDetail']);

    Route::get('/news/index' , [\App\Http\Controllers\ProductDetailController::class , 'viewNews']);

    Route::get('/news/detail/{id}' , [\App\Http\Controllers\ProductDetailController::class , 'viewNewsDetail']);

    Route::get('/checkout/index' , [\App\Http\Controllers\ProductDetailController::class , 'viewCheckout']);

    Route::get('/contact/index' , [\App\Http\Controllers\ProductDetailController::class , 'viewContact']);

    Route::get('/product/bill' , [\App\Http\Controllers\ProductDetailController::class , 'productBill']);

    Route::post('/bill/add' , [\App\Http\Controllers\BillDetailsController::class , 'addBill']);

    Route::get('/gio-hang' ,[\App\Http\Controllers\BillController::class , 'gioHang']);

    Route::get('/gio-hang/delete/{id}' ,[\App\Http\Controllers\BillController::class , 'deleteDonHang']);

    Route::post('/thanh-toan' ,[\App\Http\Controllers\BillController::class , 'thanhToan']);

    Route::get('/bank' , [\App\Http\Controllers\bankController::class , 'index']);

    Route::post('/bank' , [\App\Http\Controllers\bankController::class , 'bank']);
    // Route::get('/cout-don-hang' ,[\App\Http\Controllers\BillController::class , 'coutDonHang']);
});

