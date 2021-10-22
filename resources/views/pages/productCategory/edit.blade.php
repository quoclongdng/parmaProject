@extends('master')

@section('title')
    Chỉnh Sửa Danh Mục Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Danh Mục</h3>
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
                        <label>Mô Tả</label>
                        <textarea class="form-control" rows="3" placeholder="Nhập vào mô tả"></textarea>
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
                    <button type="submit" class="btn btn-primary">Lưu</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
