<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Bill\CreateBillRequest;
use App\Http\Requests\Client\Bill\UpdateBillRequest;
use App\Models\Bill;
use App\Models\Bills;
use App\Models\Customer;
use App\Models\hoaDon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BillController extends Controller
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
    public function create()
    {
        $bill = hoaDon::paginate(10);

        $customer = Customer::all();

        return view('pages.bill.create', compact('bill', 'customer'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBillRequest $request)
    {
        $user = Auth::guard('users')->user();
        // dd($user->id);
        $data = $request->all();
        $data['hash']   = Str::uuid();
        $data['user_id']    = $user->id;
        // dd($data);
        hoaDon::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/admin/bill/create');
    }


    public function edit($id)
    {
        $data = hoaDon::find($id);

        return view('pages.bill.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request)
    {
        $data = hoaDon::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/admin/bill/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = hoaDon::find($id);

        $data->delete();

        return redirect('/admin/bill/create');
    }

    public function list()
    {
        $data = hoaDon::all();
        return view('pages.bill.list_bill' , compact('data'));
    }
}
