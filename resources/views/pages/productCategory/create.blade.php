@extends('master')

@section('title')
    Thêm Mới Danh Mục Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Danh Mục</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên Danh Mục</label>
                      <input type="text" class="form-control" placeholder="Nhập vào tên danh mục">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="Nhập vào slug danh mục">
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select class="form-control">
                            <option>Hoạt động</option>
                            <option>Tạm dừng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <textarea class="form-control" rows="3" placeholder="Nhập vào mô tả..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Upload Avatar</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input">
                          <label class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới Danh Mục</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Mục Loại Sản Phẩm</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Danh Mục</th>
                        <th class="text-center">Mô Tả</th>
                        <th class="text-center">Tình Trạng</th>
                        <th class="text-center">Ảnh</th>
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
            <!-- /.card -->
        </div>
    </div>
@endsection
