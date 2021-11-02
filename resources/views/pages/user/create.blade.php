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
                        <select name="is_admin" id="is_admin" class="form-control">
                          <option value=1>Admin</option>
                          <option value=0>User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                        <label>Master Admin</label>
                        <select name="is_master" id="is_master" class="form-control">
                            <option id="a" value=0>false</option>
                            <option  id="b" value=1>true</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <div class="input-group">
	                    <input id="thumbnail" name="avatar" class="form-control" type="text">
                        <span class="input-group-append">
                            <a data-input="thumbnail" data-preview="holder" class="btn btn-primary uploadimage">
                            Chọn Hình Ảnh
                            </a>
                        </span>
                    </div>
                    <img id="holder" name="avatar" style="margin-top:15px;max-height:100px;">
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
