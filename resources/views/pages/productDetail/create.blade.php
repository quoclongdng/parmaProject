@extends('master')

@section('title')
   Chi tiết sản phẩm
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thêm chi tiết sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/productDetail/create">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input name="product_id" type="text" class="form-control" placeholder="Nhập vào mã sản phẩm ">
                         </div>
                         <div class="form-group">
                            <label>Ngày sản xuất</label>
                            <input name="mfg_date" type="text" class="form-control" placeholder="Nhập vào ngày sản xuất ">
                         </div>
                         <div class="form-group">
                            <label>Ngày hết hạn</label>
                            <input name="exp_date" type="text" class="form-control" placeholder="Nhập vào ngày hết hạn">
                         </div>
                         <div class="form-group">
                            <label>Giá</label>
                            <input name="price" type="text" class="form-control" placeholder="Nhập vào giá sản phẩm ">
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
              <h3 class="card-title">Danh Mục Chi Tiết Sản Phẩm</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Mã sản phẩm</th>
                    <th class="text-center">Ngày sản xuất</th>
                    <th class="text-center">Ngày hết hạn</th>
                    <th class="text-center">Giá</th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($data))
                    @foreach ($data as $key => $value)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->product_id }}</td>
                        <td>{{ $value->mfg_date }}</td>
                        <td>{{ $value->exp_date }}</td>
                        <td>{{ $value->price }}</td>
                        <td class="text-center text-nowrap">
                            <a class="btn btn-info" href="/productDetail/update/{{$value->id}}">Edit</a>
                            <a class="btn btn-danger" href="/productDetail/delete/{{$value->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
