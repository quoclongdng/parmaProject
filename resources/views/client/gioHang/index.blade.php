@extends('master-homepage')

@section('title')
    <h1 style="margin-top: 100px; margin-left: 30px ; margin-bottom: 20px">Đơn Hàng Của Bạn</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 ml-4">
            <div class="row">
                @foreach ( $data as $key=>$value )
                    <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper border p-2 rounded">
                                <input type="hidden" name="id" value="{{$value->id}}">
                                <div class="product-img">
                                    <img src="{{ $value->avaterProduct }}" alt="">
                                    <img class="hover-img" src="{{ $value->avaterProduct }}" alt="">
                                    <div class="product-favourite">
                                        <a href="#" class="fas fa-shopping-bag"></a>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <span>{{ $value->nameProduct }}</span>
                                        <h4>{{ $value->name }}</h4>
                                    <p style="font-size: 20px;" class="product-price">{{ number_format($value->price) }}VNĐ /chai</p>
                                    <span style="font-size: 15px">Số Lượng : {{$value->quantity}}</span>
                                </div>
                                <button class="btn btn-danger mt-3"><a href="/user/gio-hang/delete/{{$value->id}}"><i class="fas fa-trash-alt" style="color: white"></i></a></button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-muted">Hoá Đơn Của Bạn</span>
                    </h4>
                    <ul class="list-group mb-3">
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                          <h6 class="my-0">Họ và Tên</h6>
                        </div>
                        <span class="text-muted">{{$customer_total->name}}</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                          <h6 class="my-0">Số Lượng Đơn hàng</h6>
                        </div>
                        @foreach ( $count as $value)
                            <span class="text-muted">{{$value->total}}</span>
                        @endforeach
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                          <h6 class="my-0">Tiền</h6>
                        </div>
                        <span class="text-muted">{{number_format($total_money)}} VNĐ</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                          <h6 class="my-0">Khuyến Mãi</h6>
                          <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng Tiền (VNĐ)</span>
                        <strong style="margin-left: 30px">{{number_format($sum_price)}} VNĐ</strong>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                        <span>Số Dư</span>
                        <strong style="margin-left: 30px">{{number_format($customer_total->amount)}} VNĐ</strong>
                      </li>
                    </ul>
                    <form action="/user/thanh-toan" method="post">
                        @csrf
                        <input type="hidden" name="thanhToan" value="{{$sum_price}}">
                        <input type="hidden" name="soDu" value="{{$customer_total->amount}}">
                        {{-- <div class="input-group">
                            <input type="text" name="freeship" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Free Ship</button>
                            </div>
                        </div> --}}
                        @if($sum_price == 0 || $customer_total->amount < $sum_price)
                            <button class="btn btn-info col-12 mt-4" disabled>Thanh Toán</button>
                        @else
                            <button class="btn btn-info col-12 mt-4" ><span style="color: white; font-size: 20px"> Thanh Toán </span></button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
