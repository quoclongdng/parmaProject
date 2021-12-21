@extends('master')

@section('title')
    Thêm Mới Danh Mục Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Danh Mục</h3>
                </div>

                <form method="post" action="/admin/product-category/create">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tên Danh Mục</label>
                      <input name="name" type="text" class="form-control" placeholder="Nhập vào tên danh mục">
                    </div>
                    <div class="form-group">
                        <label>Tình Trạng</label>
                        <select name="is_open" class="form-control">
                            <option value=1>Hoạt động</option>
                            <option value=0>Tạm dừng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Upload Avatar</label>
                      <div class="input-group">
                        <input id="thumbnail" name="avatar" class="form-control" type="text" name="filepath">
                        <span class="input-group-append">
                            <a data-input="thumbnail" data-preview="holder" class="btn btn-primary uploadimage">
                                Chọn Hình Ảnh
                            </a>
                        </span>
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới Danh Mục</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
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
                        {{-- <th class="text-center">Action</th> --}}
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
                            {{-- <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/product-category/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/admin/product-category/delete/{{$value->id}}">Delete</a>
                            </td> --}}
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
