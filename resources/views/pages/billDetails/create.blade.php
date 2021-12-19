@extends('master')

@section('title')
    Chi Tiết Hóa Đơn
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/bill-details/create">
                  @csrf
                  <div class="card-body">

                    <div class="form-group">
                        <label>Tên Khách Hàng</label>
                        <select name="bill_id" class="custom-select">
                            @foreach ($bill as $key => $value_bill)
                                <option value={{$value_bill->id}}> {{$value_bill->nameCustomer}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- @foreach ( $bill as $key_bill => $value_bill )
                        <div class="form-group">
                        <input type="hidden" name="bill_id" id="" value="{{ $value_bill->id }}">
                        </div>
                    @endforeach --}}

                    <div class="form-group">
                        <label>Mã Sản Phẩm</label>
                        <select name="product_id" class="custom-select">
                            @foreach ($product as $key => $value_product)
                                <option value={{$value_product->id}}> {{$value_product->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số Lượng</label>
                        <input name="quantity" type="number" class="form-control" placeholder="Nhập vào số lượng">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo Mới Chi Tiết Hóa Đơn</button>
                  </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">
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
                        <th class="text-center">Giá</th>
                        <th class="text-center">Số Lượng</th>
                        <th class="text-center">Ngày Nhập</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value_data)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{$key + 1}}</td>
                            <td>{{$value_data->nameCustomer_bill}}</td>
                            <td>{{$value_data->maHoaDon}}</td>
                            <td>{{$value_data->nameProduct}}</td>
                            <td>{{$value_data->price * $value_data->quantity }}</td>
                            <td>{{$value_data->quantity}}</td>
                            <td>{{$value_data->created_at}}</td>
                            {{-- <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/bill-details/edit/{{$value_data->id}}">Sửa</a>
                                <a class="btn btn-danger" href="/admin/bill-details/delete/{{$value_data->id}}">Xóa</a>
                            </td> --}}
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


