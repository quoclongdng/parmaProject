@extends('master')

@section('title')
    Thêm Mới Danh Sách Khách Hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Danh Sách Khách Hàng</h3>
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
                    <button type="submit" class="btn btn-primary">Thêm Mới Danh Sách Khách Hàng</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Khách Hàng</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Khách Hàng</th>
                        <th class="text-center">Điện Thoại</th>
                        <th class="text-center">Địa Chỉ</th>
                        <th class="text-center">Mô Tả</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>1</td>
                            <td>example</td>
                            <td>example</td>
                            <td>example</td>
                            <td>example</td>
                            <td class="text-center text-nowrap">
                                <button class="btn btn-info">Sửa</button>
                                <button class="btn btn-danger">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
