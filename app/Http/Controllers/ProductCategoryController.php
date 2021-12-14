<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\ProductCategory\CreateProductCategoryRequest;
use App\Http\Requests\Client\ProductCategory\UpdateProductCategoryRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductCategoryController extends Controller
{
    public function create()
    {
        $data = ProductCategory::all();

        toastr()->info('Đã load data...');

        return view('pages.productCategory.create', compact('data'));
    }

    public function store(CreateProductCategoryRequest $request)
    {
        $data = $request->all();

        $data['slug']   = Str::slug($request->name);

        ProductCategory::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/admin/product-category/create');
    }

    public function show(ProductCategory $productCategory)
    {
        //
    }

    public function edit($id)
    {
        $data = ProductCategory::find($id);

        return view('pages.productCategory.edit', compact('data'));
    }

    public function update(UpdateProductCategoryRequest $request)
    {
        $data = ProductCategory::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/admin/product-category/create');
    }

    public function destroy($id)
    {
        $data = ProductCategory::find($id);
        if($data){
            $data->delete();
            toastr()->success("Đã xoá thành công");
            return redirect('/admin/product-category/create');
        }else{
            toastr()->error("Đã có lỗi xảy ra");
        }
    }

    public function viewCategories($slug)
    {
        $data = ProductCategory::where('slug' , $slug)->where("is_open" , 1)->first();

        if($data){
            $product = Product::join('product_categories' , 'products.productcategory_id' , 'product_categories.id')
                        ->select('products.*', 'product_categories.name as name_product')->get();
        }

        return view('client.ProductDetail.thucPhamChucNang' , compact('product'));
    }
}
