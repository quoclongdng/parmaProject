<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bankController extends Controller
{
    public function index()
    {
        $customerID = Auth::guard('customer')->user()->id;

        $data = Customer::where('id' , $customerID)->first();
        // dd($data[0]);
        return view('Customer.bank' , compact('data'));
    }

    public function bank(Request $request)
    {
        $customerID = Auth::guard('customer')->user()->id;

        $data = Customer::find($customerID);

        $data->amount = $request->soTien;

        // dd($data['amount']);

        $data->update();

        toastr()->success("Đã Nạp Tiền Thành Công");
        return redirect('/user/bank');
    }
}
