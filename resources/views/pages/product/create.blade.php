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
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label>
                        <input type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                     </div>

                    <div class="form-group">
                        <label>Mô Tả</label>
                        <textarea class="form-control" rows="3" placeholder="Nhập vào mô tả"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea class="form-control" rows="3" placeholder="Nhập vào nội dung"></textarea>
                    </div>

                     <div class="form-group">
                        <label>Giá Tiền</label>
                        <input type="text" class="form-control" placeholder="Nhập vào giá sản phẩm">
                    </div>

                    <div class="form-group">
                        <label>Upload Avatar</label>
                            <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                 </div>
                            </div>
                    </div>

                    <div class="form-group">
                        <label>Product-Category_ID</label>
                        <input type="text" class="form-control" placeholder="Nhập vào ID danh mục sản phẩm">
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
