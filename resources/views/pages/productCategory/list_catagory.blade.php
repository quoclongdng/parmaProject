@extends('master')

@section('title')
    Thêm Mới Danh Mục Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Mục Loại Sản Phẩm</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Danh Mục</th>
                        <th class="text-center">Mô Tả</th>
                        <th class="text-center">Tình Trạng</th>
                        <th class="text-center">Ảnh</th>
                        <th class="text-center">Ngày Tạo</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->slug }}</td>
                            <td>{{ $value->is_open == 1 ? "Hoạt động" : "Tạm dừng" }}</td>
                            <td><img src="{{ $value->avatar }}" class="img-fluid mb-2" style="max-width: 200px;" alt="black sample"></td>
                            <td>{{ $value->created_at }}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/product-category/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/admin/product-category/delete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
