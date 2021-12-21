@extends('master')

@section('title')
   Thêm Mới Tin Tức
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Tin Tức</h3>
                </div>
                <form method="POST" action="/admin/news/create">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tiều đề</label>
                      <input name="name" type="text" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea  name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  name="content" class="form-control" rows="5" placeholder="Nhập vào nội dung"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tình trạng</label>
                        <select name="is_open" class="form-control">
                          <option value=1>Open </option>
                          <option value=0> Close</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="newcategory_id" class="form-control">
                          @foreach ($newsCategory as $key=>$value)
                              <option value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label>User_id</label>
                        <input name="user_id" name="description" type="text" class="form-control" placeholder="Nhập user id">
                    </div> --}}
                    <div class="form-group">
                        <label>Keyword:</label>
                        <input name="keyword" type="text" class="form-control" placeholder="cách nhau bởi dấu ','">
                    </div>
                    <div class="input-group">
                        <input id="thumbnail" name="avatar" class="form-control" type="text" >
                        <span class="input-group-append">
                            <a data-input="thumbnail" data-preview="holder" class="btn btn-primary uploadimage">
                                Chọn Hình Ảnh
                            </a>
                        </span>
                    </div>
                    <img id="holder"  style="margin-top:15px;max-height:100px;">
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới Tin Tức</button>
                  </div>
                </form>
            </div>
        </div>


    </div>
@endsection
