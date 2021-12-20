<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\BillDetails\CreateBillDetailsRequest;
use App\Http\Requests\Client\BillDetails\UpdateBillDetailsRequest;
use App\Http\Requests\gioHang;
use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\hoaDon;
use App\Models\Product;
use Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class BillDetailsController extends Controller
{

    public function create()
    {
        $bill = hoaDon::join('customers' , 'hoa_dons.customer_id' , 'customers.id' )
                ->select('hoa_dons.*' , 'customers.name as nameCustomer')->get();
        $product = Product::all();

        $data = BillDetails::join('products' , 'bill_details.product_id' , 'products.id')
                ->join('hoa_dons' ,  'bill_details.bill_id' , 'hoa_dons.id')
                ->join('customers' , 'hoa_dons.customer_id' , 'customers.id' )
                ->select('bill_details.*' , 'products.name as nameProduct' , 'hoa_dons.hash as maHoaDon' , 'customers.name as nameCustomer_bill')
                ->get();
        // dd($data->toArray(), $bill->toArray());
        toastr()->info('Đã load data...');

        return view('pages.billDetails.create', compact('data', 'bill', 'product'));

    }

    public function list_bill()
    {
        $bill = hoaDon::all();
        $product = Product::all();

        $data = BillDetails::join('products' , 'bill_details.product_id' , 'products.id')
                ->join('hoa_dons' ,  'bill_details.bill_id' , 'hoa_dons.id')
                ->join('customers' , 'hoa_dons.customer_id' , 'customers.id' )
                ->select('bill_details.*' , 'products.name as nameProduct' , 'hoa_dons.hash as maHoaDon' , 'customers.name as nameCustomer_bill')
                ->get();
        // dd($data->toArray());
        toastr()->info('Đã load data...');

        return view('pages.billDetails.list', compact('data', 'bill', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBillDetailsRequest $request)
    {
        // dd($request->toArray());
        $data = $request->all();

        $product = Product::find($request->product_id);
        // dd($product);
        $data['price']  = $product->price;
        // dd($data);
        BillDetails::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillDetails  $billDetails
     * @return \Illuminate\Http\Response
     */
    public function show(BillDetails $billDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillDetails  $billDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BillDetails::find($id);
        // dd($data);
        return view('pages.billDetails.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillDetails  $billDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillDetailsRequest $request)
    {
        // dd($request->toArray());
        $data = BillDetails::find($request->id);
        // dd($data);
        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/admin/bill-details/list_bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillDetails  $billDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BillDetails::find($id);
        // dd($data->toArray());
        $data->delete();
        toastr()->success("Đã Xoá Thành Công");
        return redirect('/admin/bill-details/list_bill');
    }

    public function addBill(gioHang $request)
    {
        // dd($request->toArray());
        $data = Product::find($request->id);
        // dd($data);
        // $bill['hash']        = Str::uuid();
        // $bill['comment']     = $data->description;
        // $bill['type']        = 1 ;
        // $bill['customer_id'] = Auth::guard('customer')->user()->id;

        // hoaDon::create($bill);

        $hoadon = hoaDon::find(Auth::guard('customer')->user()->id);

        $bill_detail['bill_id']         = $hoadon->id;
        $bill_detail['product_id']      = $request->id;
        $bill_detail['price']           = $data->price;
        $bill_detail['quantity']        = $request->quantity;

        // dd($bill_detail);
        BillDetails::create($bill_detail);
        toastr()->success("Đã thêm vào giỏ hàng");

        return redirect('/user/product/detail/' . $request->id);

    }
}
