<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\BillDetails\CreateBillDetailsRequest;
use App\Http\Requests\Client\BillDetails\UpdateBillDetailsRequest;
use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class BillDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hash)
    {
        $bill = Bill::where('hash', $hash)->first();

        if($bill) {

            $product = Product::all();

            $data = BillDetails::all();

            toastr()->info('Đã load data...');

            return view('pages.billDetails.create', compact('data', 'bill', 'product'));

        } else {
            toastr()->error('Hoá đơn không tồn tại...');
            return redirect('/bill/create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBillDetailsRequest $request)
    {
        $data = $request->all();

        $product = Product::find($request->product_id);

        $data['price']  = $product->price;

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
        $bill = Bill::all();

        $product_details = Product::all();

        $data = BillDetails::find($id);

        return view('pages.billDetails.edit', compact(['data', 'bill', 'product']));
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
        $data = BillDetails::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/bill-details/create');
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

        $data->delete();

        return redirect('/bill-details/create');
    }
}
