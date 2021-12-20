@extends('master')

@section('title')
    Thêm Mới Danh Sách Khách Hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
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
                        <th class="text-center">Action</th>
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
                                <td class="text-center text-nowrap">
                                    <a class="btn btn-info" href="/admin/customer/edit/{{$value->id}}">Sửa</a>
                                    <a class="btn btn-danger" href="/admin/customer/delete/{{$value->id}}">Xóa</a>
                                </td>
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
