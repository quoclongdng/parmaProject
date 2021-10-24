@extends('master')

@section('title')
  Sửa Tin Tức
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Sửa Tin Tức</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/news/update">
                    @csrf
                  <div class="card-body">
                      <input type="text" name="id" hidden value="{{ $data->id }}">
                    <div class="form-group">
                      <label>Tiều đề</label>
                      <input value="{{ $data->name }}" name="name" type="text" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input value="{{ $data->description }}" name="description" type="text" class="form-control" placeholder="Nhập Mô tả">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="content" cols="30" rows="10" class="form-control">{{ $data->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="newcategory_id" class="form-control">
                          <option value="1" {{ $data->newcategory_id=="1"?"selected":"" }}>example1</option>
                          <option value="2" {{ $data->newcategory_id=="2"?"selected":"" }}>example2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keyword:</label>
                        <input name="keyword" value="{{ $data->keyword }}" type="text" class="form-control" placeholder="cách nhau bởi dấu ','">
                    </div>
                    <div class="form-group">
                      <label>Upload Ảnh</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="text" name="avatar" value="{{ $data->avatar }}" class="form-control-file" multiple>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Sửa Tin Tức</button>
                  </div>
                </form>
            </div>
        </div>


    </div>
@endsection
