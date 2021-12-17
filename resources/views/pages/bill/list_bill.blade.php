@extends('master')

@section('title')
   Danh Sách Hoá Đơn
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
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
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="text-center" >
                    @if(isset($data))
                    @foreach ($data as $key => $value)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->hash }}</td>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->customer_id }}</td>
                        <td>{{ $value->comment }}</td>
                        <td>{{ $value->type == 0 ? "Bán" : "" }}</td>
                        <td class="text-center text-nowrap">
                            <a class="btn btn-info" href="/admin/bill/update/{{$value->id}}">Edit</a>
                            <a class="btn btn-danger" href="/admin/bill/delete/{{$value->id}}">Delete</a>
                        </td>
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
