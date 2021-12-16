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
                <form method="POST" action="/user/update">
                    @csrf
                    <div class="card-body">
                        <input type="text" name="id" value="{{ $data->id }}" hidden>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="{{ $data->email }}" disabled type="text" class="form-control" placeholder="Nhập email" ></input>
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input name="password" value="{{ $data->password }}" type="password" class="form-control" placeholder="********" ></input>
                        </div>

                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder="********" ></input>
                        </div>

                        <div class="form-group">
                        <label>Họ</label>
                        <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control" placeholder="Nhập Họ">
                        </div>

                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control" placeholder="Nhập Tên">
                        </div>



                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input name="address" value="{{ $data->address }}" type="text" class="form-control" placeholder="Nhập vào địa chỉ."></input>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input name="phone" value="{{ $data->phone }}" type="text" class="form-control" rows="3" placeholder="Nhập số điện thoại."></input>
                        </div>

                        <div class="form-group">
                            <label>Loại Tài Khoản</label>
                            <select name="is_admin" class="form-control">
                                <option value=1  {{$data->is_admin == 0 ? 'selected' : ''}}>Admin</option>
                                <option value=0  {{$data->is_admin == 1 ? 'selected' : ''}}>Quản Lý</option>
                                <option value=0  {{$data->is_admin == 2 ? 'selected' : ''}}>Thu Ngân</option>
                                <option value=0  {{$data->is_admin == 3 ? 'selected' : ''}}>Bán Hàng</option>
                                <option value=0  {{$data->is_admin == 4 ? 'selected' : ''}}>Nhân Viên Sale</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Master Admin</label>
                            <select name="is_master" class="form-control">
                                <option value=0 {{$data->is_master == 0 ? 'selected' : ''}}>false</option>
                                <option value=1 {{$data->is_master == 1 ? 'selected' : ''}}>true</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label>Upload Avatar</label>
                       <div class="input-group">
                            <input id="thumbnail" name="avatar" class="form-control" type="text">
                                <span class="input-group-append">
                                    <a data-input="thumbnail" data-preview="holder" class="btn btn-primary uploadimage">
                                        Chọn Hình Ảnh
                                    </a>
                                </span>
                            </div>
                            <img id="holder" src="{{ $data->avatar }}" style="margin-top:15px;max-height:100px;">
                        </div>
                        <a href="/admin/user" class="btn btn-danger">Huỷ</a>
                        <button type="submit" class="btn btn-warning btn-lg float-right">Lưu</button>

                  </div>

                </form>
            </div>
        </div>
    </div>

@endsection
