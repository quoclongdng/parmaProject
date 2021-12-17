@extends('master')

@section('title')
    Đơn hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chỉnh sửa Hóa Đơn Xuất</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/bill/update">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã Hóa Đơn</label>
                            <input value="{{$data->hash}}" name="hash" type="text" class="form-control" placeholder="Nhập vào Mã Hóa Đơn " disabled>
                         </div>
                         <div class="form-group">
                            <label>Mã id Người Nhập</label>
                            <input value="{{$data->user_id}}" name="user_id" type="text" class="form-control" placeholder="Nhập vào Mã id người dùng" >
                         </div>
                         <div class="form-group">
                            <label>Mã id khách hàng</label>
                            <input value="{{$data->customer_id}}" name="customer_id" type="text" class="form-control" placeholder="Nhập vào Mã id khách hàng" disabled>
                         </div>
                         <div class="form-group">
                            <label>Ghi chú</label>
                            <input value="{{$data->comment}}" name="comment" type="text" class="form-control" placeholder="Nhập vào Ghi chú ">
                         </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select class="form-control">
                                <option value=0 {{$data->type == 0 ? 'selected' : ''}}>Bán</option>
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
