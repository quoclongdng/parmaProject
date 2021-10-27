@extends('master')

@section('title')
    Chỉnh Sửa Danh Sách Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh Sửa Sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/product/update">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label>
                        <input name="name" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm" value="{{$data->name}}">
                     </div>

                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea id="text-content" name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả">{{$data->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea id="text-content" name="content" class="form-control" rows="3" placeholder="Nhập vào nội dung">{{$data->content}}</textarea>
                    </div>

                     <div class="form-group">
                        <label>Giá Tiền</label>
                        <input name="price" type="text" class="form-control" placeholder="Nhập vào giá sản phẩm" value="{{$data->price}}">
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

                    <div class="form-group">
                        <label>Mã Danh Mục Sản Phẩm</label>
                        <input name="productcategory_id" type="text" class="form-control" placeholder="Nhập vào ID danh mục sản phẩm" value="{{$data->productcategory_id}}">
                    </div>

                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                </div>

            </form>
        </div>
        </div>
    </div>
@endsection
