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
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Mã Hóa Đơn</label>
                      <input type="text" class="form-control" placeholder="Nhập vào tên khách hàng">
                    </div>
                    <div class="form-group">
                        <label>Mã Sản Phẩm</label>
                        <input type="text" class="form-control" placeholder="Nhập vào số điện thoại">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" placeholder="Nhập vào giá">
                    </div>
                    <div class="form-group">
                        <label>Số Lượng</label>
                        <input type="text" class="form-control" placeholder="Nhập vào số lượng">
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
