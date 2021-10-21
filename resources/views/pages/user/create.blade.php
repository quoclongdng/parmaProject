@extends('master')

@section('title')
    Thêm Mới người dùng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Thêm Mới Người Dùng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Họ</label>
                        <input type="text" class="form-control" placeholder="Nhập Họ">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" placeholder="Nhập Tên">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Nhập Email">
                      </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="password" class="form-control" placeholder="**********">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nhập lại Mật Khẩu</label>
                        <input type="password" class="form-control" placeholder="**********">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Địa chỉ</label>
                    <input type="text" class="form-control " placeholder="Nhập Địa Chỉ">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Số điện thoại</label>
                    <input type="text" class="form-control " placeholder="Nhập Số điện thoại">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Loại Tài Khoản</label>
                        <select class="form-control">
                          <option>Admin</option>
                          <option>Master Admin</option>
                        </select>
                      </div>
                    </div>
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

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Thêm Mới Người Dùng</button>
                </div>
                </div>

                </form>
              </div>
            </div>
        </div>


    </div>
@endsection
