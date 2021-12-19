@extends('master')

@section('title')
    Thêm Mới người dùng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Thêm Mới Nhân Viên</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="/admin/user/create">
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
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input name="phone" type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Giới Tính</label>
                        <select name="gender" id="gender" class="form-control">
                            <option selected>Chọn Giới Tính</option>
                            <option value=1>Nam</option>
                            <option value=0>Nữ</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Loại Tài Khoản</label>
                        <select name="is_admin" id="is_admin" class="form-control">
                          <option selected >Lựa chọn</option>
                          <option value=0>Admin</option>
                          <option value=1>Quản Lý</option>
                          <option value=2>Thu Ngân</option>
                          <option value=3>Bán Hàng</option>
                          <option value=4>Nhân Viên Sale</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <input type="text" hidden name="is_master" value=0>
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
