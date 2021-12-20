@extends('master')

@section('title')
    Thêm Mới Danh Sách Khách Hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Danh Sách Khách Hàng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/customer/create">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên Khách Hàng</label>
                      <input name="name" type="text" class="form-control" placeholder="Nhập vào tên khách hàng">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input name="phone" type="text" class="form-control" placeholder="Nhập vào số điện thoại">
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input name="address" type="text" class="form-control" placeholder="Nhập vào địa chỉ">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Nhập vào email">
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea id="text-description" name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả..."></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới Danh Sách Khách Hàng</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Khách Hàng</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Khách Hàng</th>
                        <th class="text-center">Điện Thoại</th>
                        <th class="text-center">Địa Chỉ</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mô Tả</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{$key + 1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->email}}</td>
                                <td>{!!$value->description!!}</td>
                                {{-- <td class="text-center text-nowrap">
                                    <a class="btn btn-info" href="/customer/edit/{{$value->id}}">Sửa</a>
                                    <a class="btn btn-danger" href="/customer/delete/{{$value->id}}">Xóa</a>
                                </td> --}}
                            </tr>
                            </tbody>
                        @endforeach
                  </table>
                  {{ $data->links() }}
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
