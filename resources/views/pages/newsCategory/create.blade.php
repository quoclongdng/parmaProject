@extends('master')

@section('title')
    Thêm Mới Danh Mục Tin Tức
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Thêm Mới Danh Mục Tin Tức</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Danh Mục Tin Tức</label>
                                <input type="text" class="form-control" placeholder="Nhập vào tên tin tức">
                             </div>

                             <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" placeholder="Nhập vào slug tin tức">
                             </div>

                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <select class="form-control">
                                    <option>Hoạt động</option>
                                    <option>Tạm dừng</option>
                                </select>
                             </div>

                            <!-- /.card-body -->
                             <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm Mới Danh Mục Tin Tức</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Danh Mục Tin Tức</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Tin Tức</th>
                        <th class="text-center">Tình Trạng</th>
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
