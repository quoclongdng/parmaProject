<?php

namespace App\Http\Controllers;

use App\Models\BillDetails;
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
    public function create()
    {
        $data = BillDetails::all();

        toastr()->info('Đã load data...');

        return view('pages.billDetails.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        BillDetails::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/bill-details/create');
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

        return view('pages.billDetails.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillDetails  $billDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
