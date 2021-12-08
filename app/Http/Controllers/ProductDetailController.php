<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\ProductDetail\CreateProductDetailRequest;
use App\Http\Requests\Client\ProductDetail\UpdateProductDetailRequest;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{

    // public function create()
    // {
    //     $data = ProductDetail::paginate(10);

    //     $product = Product::all();

    //     toastr()->info('Đã load data...');

    //     return view('pages.productDetail.create', compact('data', 'product'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(CreateProductDetailRequest $request)
    // {
    //     $data = $request->all();

    //     for($i = 0; $i < $request->qty; $i++){
    //         ProductDetail::create($data);
    //     }

    //     toastr()->success('Đã thêm mới dữ liệu thành công');

    //     return redirect('/productDetail/create');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\ProductDetail  $productDetail
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(ProductDetail $productDetail)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\ProductDetail  $productDetail
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $data = ProductDetail::find($id);

    //     return view('pages.productDetail.update', compact('data'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\ProductDetail  $productDetail
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateProductDetailRequest $request)
    // {
    //     $data = ProductDetail::find($request->id);

    //     $data->update($request->all());

    //     toastr()->success('Đã cập nhật dữ liệu thành công');

    //     return redirect('/productDetail/create');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\ProductDetail  $productDetail
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $data = ProductDetail::find($id);

    //     $data->delete();

    //     return redirect('/productDetail/create');
    // }


    public function viewThucPhamChucNang()
    {
        $data = Product::all();
        return view('client.ProductDetail.thucPhamChucNang' , compact('data'));
    }

    public function viewNews()
    {
        $data = News::all();
        return view('client.news.index' , compact('data'));
    }

    public function viewNewsDetail($id)
    {
        $data = News::find($id);
        $slide = News::all();
        return view('client.news.detail' , compact('data', 'slide'));
    }

    public function viewCheckout()
    {
        return view('client.checkout.index');
    }

    public function viewContact()
    {
        return view('client.contact.index');
    }

    public function viewDetail($id)
    {
        $data = Product::find($id);

        $slide = Product::all();
        return view('client.ProductDetail.Detail' , compact('data', 'slide'));
    }
}
