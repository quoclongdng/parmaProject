@extends('master')

@section('title')
   Hóa Đơn Xuất Nhập
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Hóa Đơn Xuất Nhập</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã Hóa Đơn</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Mã Hóa Đơn ">
                         </div>
                         <div class="form-group">
                            <label>Mã id</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Mã id ">
                         </div>
                         <div class="form-group">
                            <label>Ghi chú</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Ghi chú ">
                         </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select class="form-control">
                                <option>Nhập</option>
                                <option>Bán</option>
                            </select>
                         </div>

                        <!-- /.card-body -->
                         <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm Mới Hóa Đơn Xuất Nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Danh Mục Hóa Đơn Xuất Nhập</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Mã Hóa Đơn</th>
                    <th class="text-center">Mã id</th>
                    <th class="text-center">Ghi chú</th>
                    <th class="text-center">Thể loại</th>
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
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
