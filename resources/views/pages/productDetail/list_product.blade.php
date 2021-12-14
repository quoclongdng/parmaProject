@extends('master')

@section('title')
   Chi tiết sản phẩm
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
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
                        @if(isset($product))
                        @foreach ($product as $key => $value)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name_product }}</td>
                            <td>{{ $value->mfg_date }}</td>
                            <td>{{ $value->exp_date }}</td>
                            <td>{{ number_format($value->price, 0, ',', '.') }}</td>
                            <td class="text-center text-nowrap">
                                <a class="btn btn-info" href="/admin/productDetail/update/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/admin/productDetail/delete/list/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <br>
                {{-- {{ $data->links() }} --}}
            </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
</div>
@endsection
