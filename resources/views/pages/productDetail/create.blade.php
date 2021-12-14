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
                <form method="post" action="/admin/productDetail/create">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <select name="product_id" class="custom-select">
                                @foreach ($product as $key => $value)
                                    <option value={{$value->id}}> {{ $value->name}}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="form-group">
                            <label>Ngày sản xuất</label>
                            <input name="mfg_date" type="date" class="form-control" placeholder="Nhập vào ngày sản xuất ">
                         </div>
                         <div class="form-group">
                            <label>Ngày hết hạn</label>
                            <input name="exp_date" type="date" class="form-control" placeholder="Nhập vào ngày hết hạn">
                         </div>
                         <div class="form-group">
                            <label>Giá</label>
                            <input name="price" type="number" class="form-control" placeholder="Nhập vào giá sản phẩm ">
                         </div>
                         <div class="form-group">
                            <label>Số Lượng</label>
                            <input name="qty" type="number" class="form-control" placeholder="Nhập vào số lượng nhập">
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
                <tbody class="text-center">
                    @if(isset($data))
                    @foreach ($data as $key => $value)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->product->name }}</td>
                        <td>{{ $value->mfg_date }}</td>
                        <td>{{ $value->exp_date }}</td>
                        <td>{{ number_format($value->price, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <br>
            {{ $data->links() }}
        </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
