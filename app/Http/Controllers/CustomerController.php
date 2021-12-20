<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Customer\CreateCustomerRequest;
use App\Http\Requests\Client\Customer\UpdateCustomerRequest;
use App\Http\Requests\updateProfile;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegiserRequest;
use App\Models\BillDetails;
use App\Models\Customer;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function create()
    {
        $data = Customer::paginate(10);

        toastr()->info('Đã load data...');

        return view('pages.customer.create', compact('data'));
    }

    public function list_customer()
    {
        $data = Customer::paginate(10);

        toastr()->info('Đã load data...');

        return view('pages.customer.list_customer', compact('data'));
    }



    public function store(CreateCustomerRequest $request)
    {
        $data = $request->all();

        Customer::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/customer/create');
    }



    public function edit($id)
    {
        $data = Customer::find($id);

        return view('pages.customer.edit', compact('data'));
    }

    public function update(UpdateCustomerRequest $request)
    {
        $data = Customer::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/customer/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Customer::find($id);

        $data->delete();

        return redirect('/customer/create');
    }

    public function homePage()
    {
        $data = Product::join('product_categories', 'products.productcategory_id', 'product_categories.id')
                        ->select('products.*', 'product_categories.name as categori_name')
                        ->get();

        $new = News::all();
        return view('client.Shared.product' , compact('data' , 'new' ));
    }

    public function viewregister()
    {
        return view('Customer.customer_register');
    }

    public function viewLogin()
    {
        return view('Customer.customer_login');
    }


    public function register(RegiserRequest $request)
    {
        $data =  $request->all();

        Customer::create($data);
        toastr()->success("Bạn đã đăng kí thành công");
        return redirect('/login');
    }

    public function Login(LoginRequest $request)
    {
        $data =  $request->only('email' , 'password');

        $checklogin = Auth::guard('customer')->attempt($data);
        if($checklogin == true){
            $user = Auth::guard('customer')->user();
            if($user->is_active == 1){
                toastr()->success('Đã Đăng Nhập Thành Công');
                return redirect('/');
            }else{
                toastr()->warning('Tài khoản hiện đang tạm khoá');
                return redirect('/login');
            }
        }else{
            toastr()->error("Email hoặc mật khẩu không chính xác");
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        return redirect('/');
    }

    public function profile($id)
    {
        $data = Customer::find($id);
        // dd($data);
        return view('client.profile.index', compact('data'));
    }

    public function updateProfile(updateProfile $request)
    {
        $data = Customer::find($request->id);

        $all = $request->all();

        $data->update($all);

        toastr()->success("Đã Update thông tin thành công");

        return redirect("/user/profile/".$request->id);
    }
}
