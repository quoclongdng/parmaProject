<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Bill\CreateBillRequest;
use App\Http\Requests\Client\Bill\UpdateBillRequest;
use App\Models\Bill;
use Illuminate\Http\Request;

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
        $bill = Bill::all();

        return view('pages.bill.create', compact('bill'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBillRequest $request)
    {
        $data = $request->all();
        Bill::create($data);
        toastr()->success('Đã thêm mới dữ liệu thành công');
        return redirect('/bill/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bill::find($id);

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
        $data = Bill::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/bill/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bill::find($id);

        $data->delete();

        return redirect('/bill/create');
    }
}
