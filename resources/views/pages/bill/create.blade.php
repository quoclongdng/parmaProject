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
                  <h3 class="card-title">Thêm Mới Hóa Đơn Xuất</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/admin/bill/create">
                    @csrf
                    <div class="card-body">
                         <div class="form-group">
                            <label>Thông Tin Khách Hàng</label>
                            <select name="customer_id" class="custom-select">
                                @foreach ($customer as $key => $value)
                                    <option value={{$value->id}}> {{ $value->name}}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="form-group">
                            <label>Ghi chú</label>
                            <textarea id="text-content" name="comment" class="form-control" rows="3" placeholder="Nhập vào ghi chú"></textarea>
                         </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select name="type" class="form-control">
                                <option value=0>Bán</option>
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
              <h3 class="card-title">Danh Mục Hóa Đơn Xuất</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Mã Hóa Đơn</th>
                    <th class="text-center">Mã id Nhân Viên</th>
                    <th class="text-center">Mã id khách hàng</th>
                    <th class="text-center">Ghi chú</th>
                    <th class="text-center">Thể loại</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    @if(isset($bill))
                    @foreach ($bill as $key => $value)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->hash }}</td>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->customer_id }}</td>
                        <td>{{ $value->comment }}</td>
                        <td>{{ $value->type == 0 ? "Bán" : "" }}</td>
                        {{-- <td class="text-center text-nowrap">
                            <a class="btn btn-info" href="/admin/bill/update/{{$value->id}}">Edit</a>
                            <a class="btn btn-danger" href="/admin/bill/delete/{{$value->id}}">Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                    @endif
                </tbody>
              </table>
              <br>
              {{-- {{ $data->links() }}  --}}
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
