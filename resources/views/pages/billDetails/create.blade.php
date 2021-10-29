@extends('master')

@section('title')
    Chi Tiết Hóa Đơn
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Chi Tiết Hóa Đơn</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/bill-details/create">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Mã Hóa Đơn</label>
                      <select name="bill_id" class="custom-select">
                        @foreach ($bill as $key => $value)
                            <option value='{{$value->id}}'> {{ $value->hash }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label>Mã Sản Phẩm</label>
                        <select name="product_id" class="custom-select">

                            @foreach ($product as $key => $value)
                                <option value={{$value->id}}> {{$value->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input name="price" type="number" class="form-control" placeholder="Nhập vào giá">
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

        <div class="col-md-7">
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
                        <th class="text-center">Mã Hóa Đơn</th>
                        <th class="text-center">Mã Sản Phẩm</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Số Lượng</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{$key + 1}}</td>
                            <td>{{$value->bill_id}}</td>
                            <td>{{$value->product_id}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->quantity}}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/bill-details/edit/{{$value->id}}">Sửa</a>
                                <a class="btn btn-danger" href="/bill-details/delete/{{$value->id}}">Xóa</a>
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


