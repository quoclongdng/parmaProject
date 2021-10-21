@extends('master')

@section('title')
    Chỉnh Sửa Người Dùng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Người Dùng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Nhập email" ></input>
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="********" ></input>
                    </div>

                    <div class="form-group">
                      <label>Họ</label>
                      <input type="text" class="form-control" placeholder="Nhập Họ">
                    </div>

                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" placeholder="Nhập Tên">
                    </div>



                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" placeholder="Nhập vào địa chỉ."></input>
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" rows="3" placeholder="Nhập số điện thoại."></input>
                    </div>

                    <div class="form-group">
                        <label>Loại tài khoản</label>
                        <select class="form-control">
                            <option>Admin</option>
                            <option>Master admin</option>
                        </select>
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
                    <button type="submit" class="btn btn-warning btn-lg">Lưu</button>

                  </div>

                </form>
            </div>
        </div>
    </div>

@endsection
