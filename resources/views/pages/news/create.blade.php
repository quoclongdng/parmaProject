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
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/news/create">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tiều đề</label>
                      <input name="name" type="text" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input name="description" type="text" class="form-control" placeholder="Nhập Mô tả">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
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
                          <option value="1">danh muc 1</option>
                          <option value="2"> dnah muc 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input name="user_id" name="description" type="text" class="form-control" placeholder="Nhập user id">
                    </div>
                    <div class="form-group">
                        <label>Keyword:</label>
                        <input type="text" class="form-control" placeholder="cách nhau bởi dấu ','">
                    </div>
                    <div class="form-group">
                      <label>Upload Ảnh</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="avatar" type="text" class="form-control-file" multiple>
                        </div>
                      </div>
                    </div>
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
