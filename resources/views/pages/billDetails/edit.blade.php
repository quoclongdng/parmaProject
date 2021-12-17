@extends('master')

@section('title')
    Chỉnh Sửa Chi Tiết Hóa Đơn
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/bill-details/update">
                  @csrf
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Mã Hóa Đơn</label>
                      <input name="bill_id" type="text" class="form-control" placeholder="Nhập vào tên khách hàng" value="{{$data->bill_id}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label>
                        <input name="product_id" type="text" class="form-control" placeholder="Nhập vào số điện thoại" value="{{$data->product_id}}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Giá Từng Sản Phẩm</label>
                        <input name="price" type="text" class="form-control" placeholder="Nhập vào giá" value="{{$data->price}}">
                    </div>
                    <div class="form-group">
                        <label>Số Lượng</label>
                        <input name="quantity" type="text" class="form-control" placeholder="Nhập vào số lượng" value="{{$data->quantity}}">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hủy bỏ</font></font></a>
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Lưu thay đổi" class="btn btn-success float-right"></font></font>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
