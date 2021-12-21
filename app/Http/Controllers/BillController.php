<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Bill\CreateBillRequest;
use App\Http\Requests\Client\Bill\UpdateBillRequest;
use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Bills;
use App\Models\Customer;
use App\Models\hoaDon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        return redirect('/admin/bill/list');
    }

    public function list()
    {
        $data = hoaDon::all();
        return view('pages.bill.list_bill', compact('data'));
    }

    public function gioHang()
    {

        $customerID = Auth::guard('customer')->user()->id;

        // // dd($customerID);
        // $product = BillDetails::join('products', 'bill_details.product_id', 'products.id')
        //     ->select('bill_details.*', 'products.name as product_name', 'products.content as product_content', 'products.avatar as product_image', 'products.price as product_price')
        //     ->get();


        $data = BillDetails::join('hoa_dons', 'bill_details.bill_id', 'hoa_dons.customer_id')
            ->join('customers', 'bill_details.bill_id', 'customers.id')
            ->join('products', 'bill_details.product_id', 'products.id')
            ->select('bill_details.*', 'hoa_dons.id as idHoaDon', 'customers.name as nameCus', 'products.name as nameProduct', 'products.avatar as avaterProduct')
            ->where('customer_id', $customerID)->get();
        // dd($data->toArray());
        $customer_total  = Customer::find($customerID);

        // dd($customer_total);

        $count = BillDetails::where('bill_id', $customerID)
            ->select(DB::raw('sum(quantity) as total'))
            ->get();
        // dd($count->toArray());
        $total_money = 0;
        foreach ($data as $key => $value) {
            $total_money = $total_money + ($value->price * $value->quantity);
        }
        $sum_price = $total_money - $total_money * 0.05;
        return view('client.gioHang.index', compact('data', 'customer_total', 'count', 'total_money', 'sum_price'));
    }

    public function deleteDonHang($id)
    {
        $data = BillDetails::find($id);

        if ($data) {
            $data->delete();
            toastr()->success("Đã Xoá Sản Phẩm Khỏi Giỏ Hàng");
            return redirect('/user/gio-hang');
        } else {
            toastr()->error("Đã Có Lỗi Xảy Ra");
        }
    }

    public function thanhToan(Request $request)
    {
        // dd($request->toArray());
        $SoDu       = $request->soDu;
        $TongTien   = $request->thanhToan;
        if ($SoDu < $TongTien) {
            toastr()->warning("Số Tiền Trong Tài Khoản Của Bạn Không Đủ");
            return redirect('/user/gio-hang');
        } else {

            $ID_Cus = Auth::guard('customer')->user()->id;

            $SoDu = $SoDu - $TongTien;
            $data = Customer::find(Auth::guard('customer')->user()->id);
            $data['amount'] = $SoDu;
            $data->update();

            $bill = BillDetails::where('bill_id', $ID_Cus)->get();
            foreach ($bill as $key => $value) {
                $dataBill = BillDetails::find($value->id);
                $dataBill->delete();
            }
            $dataHoaDon = hoaDon::where('customer_id', $ID_Cus)->first();
            $deleteHoaDon = hoaDon::find($dataHoaDon->id);
            $deleteHoaDon->delete();
            toastr()->success('Đã thanh toán thành công');
            $data_total['hash']           = Str::uuid();
            $data_total['customer_id']    = $ID_Cus;

            hoaDon::create($data_total);
            return redirect('/user/gio-hang');
        }
    }

    // public function coutDonHang()
    // {
    //     $Bill_id = Auth::guard('customer')->user()->id;

    //     $count = BillDetails::where('bill_id' , $Bill_id )
    //                 ->select(DB::raw('count(id) as total'))
    //                 ->get();
    //     dd($count->toArray());
    //     return view('master-homepage', compact('count'));
    // }
}
