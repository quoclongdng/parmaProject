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
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Danh Mục Tin Tức</label>
                                <input type="text" class="form-control" placeholder="Nhập vào tên danh mục ">
                             </div>

                             <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" placeholder="Nhập vào slug tin tức">
                             </div>

                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <select class="form-control">
                                    <option>Hoạt động</option>
                                    <option>Tạm dừng</option>
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
