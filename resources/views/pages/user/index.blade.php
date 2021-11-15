@extends('master')

@section('title')
    Danh Sách Người Dùng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Mục Người Dùng</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên người dùng</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Địa chỉ</th>
                        <th class="text-center">Số điện thoại</th>
                        <th class="text-center">Ảnh</th>
                        <th class="text-center">Loại tài khoản</th>
                        <th class="text-center">Master admin</th>
                        <th class="text-center">Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->phone }}</td>
                            <td><img src="{{ $value->avatar }}" style="width: 20%" alt="{{ $value->first_name }} {{ $value->last_name }}"></td>
                            <td>{{ $value->is_admin==1?"Admin":"User"  }}</td>
                            <td>{{ $value->is_master==1?"Yes":"No"  }}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/user/edit/{{ $value->id }}">Edit</a>
                                <a class="btn btn-danger" href="/user/delete/{{ $value->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <hr>
                      {{ $data->links() }}
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
