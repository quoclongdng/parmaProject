@extends('master')

@section('title')
    Thêm Mới Danh Sách Sản Phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/product/create">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label>
                        <input name="name" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                     </div>

                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea id="text-description" name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea id="text-content" name="content" class="form-control" rows="3" placeholder="Nhập vào nội dung"></textarea>
                    </div>

                     <div class="form-group">
                        <label>Giá Tiền</label>
                        <input name="price" type="text" class="form-control" placeholder="Nhập vào giá sản phẩm">
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
                        <select name="productcategory_id" class="custom-select">
                            @foreach ($product_category as $key => $value)
                                <option value={{$value->id}}> {{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm Mới Sản phẩm</button>
                </div>

            </form>
        </div>
        </div>
    </div>
@endsection
