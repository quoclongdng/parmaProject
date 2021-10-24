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
                        <textarea name="description" class="form-control" rows="3" placeholder="Nhập vào mô tả"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea name="content" class="form-control" rows="3" placeholder="Nhập vào nội dung"></textarea>
                    </div>

                     <div class="form-group">
                        <label>Giá Tiền</label>
                        <input name="price" type="text" class="form-control" placeholder="Nhập vào giá sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Upload Avatar</label>
                        <div class="input-group">
                            <input id="thumbnail" name="hinhAnh" class="form-control" type="text" name="filepath">
                            <span class="input-group-append">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    Chọn Hình Ảnh
                                </a>
                            </span>
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                        <script>
                             $('#lfm').filemanager('image');
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Product-Category_ID</label>
                        <input name="productcategory_id" type="text" class="form-control" placeholder="Nhập vào ID danh mục sản phẩm">
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
