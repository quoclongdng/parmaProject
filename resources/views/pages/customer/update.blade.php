@extends('master')

@section('title')
    Chỉnh Sửa Danh Sách Khách Hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Danh Sách Khách Hàng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên Khách Hàng</label>
                      <input type="text" class="form-control" placeholder="Nhập vào tên khách hàng">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" class="form-control" placeholder="Nhập vào số điện thoại">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" class="form-control" placeholder="Nhập vào địa chỉ">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea class="form-control" rows="3" placeholder="Nhập vào mô tả..."></textarea>
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
