@extends('master')

@section('title')
    Đơn hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Chi Tiết Sản Phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/productDetail/update">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input value="{{$data->name_product}}" name="product_id" type="text" class="form-control" placeholder="Nhập vào Mã Hóa Đơn ">
                         </div>
                         <div class="form-group">
                            <label>Ngày sản xuất</label>
                            <input value="{{$data->mfg_date}}" name="mfg_date" type="text" class="form-control" placeholder="Nhập vào Mã id người dùng">
                         </div>
                         <div class="form-group">
                            <label>Ngày hết hạn</label>
                            <input value="{{$data->exp_date}}" name="exp_date" type="text" class="form-control" placeholder="Nhập vào Mã id khách hàng ">
                         </div>
                         <div class="form-group">
                            <label>Giá</label>
                            <input value="{{$data->price}}" name="price" type="text" class="form-control" placeholder="Nhập vào Ghi chú ">
                         </div>

                        <!-- /.card-body -->
                         <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
