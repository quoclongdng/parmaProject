@extends('master')

@section('title')
    Chi Tiết Hóa Đơn
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Khách Hàng</th>
                        <th class="text-center">Mã Hóa Đơn</th>
                        <th class="text-center">Tên Sản Phẩm</th>
                        <th class="text-center">Giá Từng Sản Phẩm</th>
                        <th class="text-center">Tổng Giá</th>
                        <th class="text-center">Số Lượng</th>
                        <th class="text-center">Ngày Nhập</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value_data)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{$key + 1}}</td>
                            <td>{{$value_data->nameCustomer_bill}}</td>
                            <td>{{$value_data->maHoaDon}}</td>
                            <td>{{$value_data->nameProduct}}</td>
                            <td>{{$value_data->price }}</td>
                            <td>{{$value_data->price * $value_data->quantity }}</td>
                            <td>{{$value_data->quantity}}</td>
                            <td>{{$value_data->created_at}}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/bill-details/edit/{{$value_data->id}}">Sửa</a>
                                <a class="btn btn-danger" href="/admin/bill-details/delete/{{$value_data->id}}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
        </div>
    </div>
@endsection


