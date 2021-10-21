@extends('master')

@section('title')
   Thêm Mới Tin Tức
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Tin Tức</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tiều đề</label>
                      <input type="text" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Nhập Mô tả">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea  cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select class="form-control">
                          <option>example1</option>
                          <option>example2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keyword:</label>
                        <input type="text" class="form-control" placeholder="cách nhau bởi dấu ','">
                    </div>
                    <div class="form-group">
                      <label>Upload Ảnh</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="form-control-file" multiple>
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
