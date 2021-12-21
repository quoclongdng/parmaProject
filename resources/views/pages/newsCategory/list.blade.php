@extends('master')

@section('title')
    Thêm Mới Danh Mục Tin Tức
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Danh Mục Tin Tức</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Tin Tức</th>
                        <th class="text-center">Tình Trạng</th>
                        <th class="text-center">Ngày Tạo</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->is_open == 1 ? "Hoạt động" : "Tạm dừng" }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/news-category/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/admin/news-category/delete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
@endsection
