@extends('master')

@section('title')
    Đơn hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh sửa Hóa Đơn Xuất Nhập</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã Hóa Đơn</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Mã Hóa Đơn ">
                         </div>
                         <div class="form-group">
                            <label>Mã id</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Mã id ">
                         </div>
                         <div class="form-group">
                            <label>Ghi chú</label>
                            <input type="text" class="form-control" placeholder="Nhập vào Ghi chú ">
                         </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select class="form-control">
                                <option>Nhập</option>
                                <option>Bán</option>
                            </select>
                         </div>

                        <!-- /.card-body -->
                         <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button type="submit" class="btn btn-primary">Trở lại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
