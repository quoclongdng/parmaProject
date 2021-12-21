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
                <form method="POST" action="/admin/news/update">
                    @csrf
                  <div class="card-body">
                      <input type="text" name="id" hidden value="{{ $data->id }}">
                    <div class="form-group">
                      <label>Tiều đề</label>
                      <input value="{{ $data->name }}" name="name" type="text" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả">{{ $data->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  name="content" class="form-control" rows="3" placeholder="Nhập vào nội dung">{{ $data->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="newcategory_id" class="form-control">
                            @foreach ($newsCategory as $key=>$value)
                            <option value="{{ $value->id }}" {{ $data->newcategory_id==$value->id?"selected":"" }}>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tình trạng</label>
                        <select name="is_open" class="form-control">

                            <option value=1 {{ $data->is_open==1?"selected":"" }}>Open</option>
                            <option value=0 {{ $data->is_open==0?"selected":"" }}>Close</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keyword:</label>
                        <input name="keyword" value="{{ $data->keyword }}" type="text" class="form-control" placeholder="cách nhau bởi dấu ','">
                    </div>
                    <div class="input-group">
                        <input id="thumbnail" value="{{ $data->avatar }}" name="avatar" class="form-control" type="text" >
                        <span class="input-group-append">
                            <a data-input="thumbnail" data-preview="holder" class="btn btn-primary uploadimage">
                                Chọn Hình Ảnh
                            </a>
                        </span>
                    </div>
                    <img id="holder" src="{{ $data->avatar }}" style="margin-top:15px;max-height:100px;">
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
