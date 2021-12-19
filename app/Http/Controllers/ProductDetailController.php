<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\ProductDetail\CreateProductDetailRequest;
use App\Http\Requests\Client\ProductDetail\UpdateProductDetailRequest;
use App\Models\BillDetails;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{

    public function create()
    {
        $data = ProductDetail::paginate(10);

        $product = Product::all();

        toastr()->info('Đã load data...');

        return view('pages.productDetail.create', compact('data', 'product'));
    }

    public function list_product()
    {

        $product = ProductDetail::join('products' , 'product_details.product_id' , 'products.id')
                            ->select('product_details.*', 'products.name as name_product')->get();

        toastr()->info('Đã load data...');

        return view('pages.productDetail.list_product', compact('product'));
    }

    public function store(CreateProductDetailRequest $request)
    {
        $data = $request->all();

        for($i = 0; $i < $request->qty; $i++){
            ProductDetail::create($data);
        }

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/admin/productDetail/create');
    }

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
    public function edit($id)
    {
        $data = ProductDetail::join('products' , 'product_details.product_id' , 'products.id')
                ->select('product_details.*' , 'products.name as name_product')->find($id);

        return view('pages.productDetail.update', compact('data'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\ProductDetail  $productDetail
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(UpdateProductDetailRequest $request)
    {
        $data = ProductDetail::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/admin/productDetail/create');
    }

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

    //     return redirect('/admin/productDetail/create');
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

    public function destroy_table($id)
    {
        $data = ProductDetail::find($id);

        $data->delete();

        return redirect('/admin/productDetail/list');
    }

    public function productBill()
    {
        $data = BillDetails::join('bills' , 'bill_details.bill_id' , 'bills.id')
                ->select('bill_details.*' , 'bills.user_id')->get();
        dd($data->toArray());
        return view('client.Shared.menu' , compact('data'));
    }


}
