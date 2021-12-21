@extends('master')

@section('title')
    Chỉnh Sửa Danh Mục Tin Tức
@endsection

@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Chỉnh Sửa Danh Mục Tin Tức</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/admin/news-category/update">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Danh Mục Tin Tức</label>
                                <input name="name" type="text" class="form-control" placeholder="Nhập vào tên danh mục" value="{{$data->name}}">
                             </div>

                             <div class="form-group">
                                <label>Tình Trạng</label>
                                <select name="is_open" class="form-control">
                                    <option value=1 {{$data->is_open == 1 ? 'selected' : ''}}>Hoạt động</option>
                                    <option value=0 {{$data->is_open == 0 ? 'selected' : ''}}>Tạm dừng</option>
                                </select>
                            </div>

                            <!-- /.card-body -->
                             <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
