@extends('master')

@section('title')
    Danh Sách Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Sản Phẩm</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Sản Phẩm</th>
                        <th class="text-center">Mô Tả</th>
                        <th class="text-center">Nội Dung</th>
                        <th class="text-center">Ảnh</th>
                        <th class="text-center">Product-Category_ID</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Ngày Tạo</th>
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
