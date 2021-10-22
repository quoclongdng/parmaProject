@extends('master')

@section('title')
    Chi Tiết Hóa Đơn
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Mã Hóa Đơn</label>
                      <input type="text" class="form-control" placeholder="Nhập vào mã hóa đơn">
                    </div>
                    <div class="form-group">
                        <label>Mã Sản Phẩm</label>
                        <input type="text" class="form-control" placeholder="Nhập vào mã sản phẩm">
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
                    <button type="submit" class="btn btn-primary">Tạo Mới Chi Tiết Hóa Đơn</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Mã Hóa Đơn</th>
                        <th class="text-center">Mã Sản Phẩm</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Số Lượng</th>
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
