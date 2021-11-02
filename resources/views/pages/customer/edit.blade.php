@extends('master')

@section('title')
    Chỉnh Sửa Danh Sách Khách Hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Danh Sách Khách Hàng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/customer/update">
                  @csrf
                  <input hidden name="id" value="{{$data->id}}">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên Khách Hàng</label>
                      <input name ="name" type="text" class="form-control" placeholder="Nhập vào tên khách hàng" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input name ="phone" type="text" class="form-control" placeholder="Nhập vào số điện thoại" value="{{$data->phone}}">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input name ="address" type="text" class="form-control" placeholder="Nhập vào địa chỉ" value="{{$data->address}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" disabled placeholder="Nhập vào email" value="{{$data->email}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea id="text-description" name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả...">{{$data->description}}</textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Lưu thay đổi" class="btn btn-success float-right"></font></font>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
