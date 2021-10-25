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
                <form method="POST" action="/user/create">
                    @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Họ</label>
                        <input name="first_name" type="text" class="form-control" placeholder="Nhập Họ">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tên</label>
                        <input name="last_name" type="text" class="form-control" placeholder="Nhập Tên">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Nhập Email">
                      </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input name="password" type="password" class="form-control" placeholder="**********">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nhập lại Mật Khẩu</label>
                        <input name="re-password" type="password" class="form-control" placeholder="**********">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Địa chỉ</label>
                    <input name="address" type="text" class="form-control " placeholder="Nhập Địa Chỉ">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Số điện thoại</label>
                    <input name="phone" type="text" class="form-control " placeholder="Nhập Số điện thoại">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Loại Tài Khoản</label>
                        <select name="is_admin" class="form-control">
                          <option value=1>Admin</option>
                          <option value=0>User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                        <label>Master Admin</label>
                        <select name="is_master" class="form-control">
                            <option value=0>false</option>
                            <option value=1>true</option>
                        </select>
                    </div>
                  <div class="form-group">
                      <label>Upload Avatar</label>
                      <div class="input-group">
                        {{-- <div class="custom-file"> --}}
                          <input type="text" name="avatar" class="">
                          {{-- <label class="custom-file-label">Choose file</label> --}}
                        {{-- </div> --}}
                        {{-- <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div> --}}
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="col-form-label">Token</label>
                    <input name="token" type="text" class="form-control" placeholder="Nhập token">
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
