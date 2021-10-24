@extends('master')

@section('title')
   Hóa Đơn Xuất Nhập
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm Mới Hóa Đơn Xuất Nhập</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/bill/create">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã Hóa Đơn</label>
                            <input name="hash" type="text" class="form-control" placeholder="Nhập vào Mã Hóa Đơn ">
                         </div>
                         <div class="form-group">
                            <label>Mã id người dùng</label>
                            <input name="user_id" type="text" class="form-control" placeholder="Nhập vào Mã id ">
                         </div>
                         <div class="form-group">
                            <label>Mã id khách hàng</label>
                            <input name="customer_id" type="text" class="form-control" placeholder="Nhập vào Mã id khách hàng ">
                         </div>
                         <div class="form-group">
                            <label>Ghi chú</label>
                            <input name="comment" type="text" class="form-control" placeholder="Nhập vào Ghi chú ">
                         </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select name="type" class="form-control">
                                <option value=1>Nhập</option>
                                <option value=0 >Bán</option>
                            </select>
                         </div>

                        <!-- /.card-body -->
                         <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm Mới Hóa Đơn Xuất Nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Danh Mục Hóa Đơn Xuất Nhập</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Mã Hóa Đơn</th>
                    <th class="text-center">Mã id người dùng</th>
                    <th class="text-center">Mã id khách hàng</th>
                    <th class="text-center">Ghi chú</th>
                    <th class="text-center">Thể loại</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->hash }}</td>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->customer_id }}</td>
                        <td>{{ $value->comment }}</td>
                        <td>{{ $value->type == 1 ? "Nhập" : "Bán" }}</td>
                        <td class="text-center text-nowrap">
                            <a class="btn btn-info" href="/bill/update/{{$value->id}}">Edit</a>
                            <a class="btn btn-danger" href="/bill/delete/{{$value->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
