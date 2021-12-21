@extends('master-homepage')
@section('content')
    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row" style="margin-top: 20px">
                <div class="col-12 ">
                    <div class="shop_grid_product_area">
                        <h1 class="text-center">Các Sản Phẩm Hiện Có</h1>
                        <div class="row">
                            @foreach ( $data as $key=>$value )
                                    <div class="col-12 col-sm-6 col-lg-4">
                                            <input type="hidden" name="id" value="{{ $value->id}}">
                                        <a href="/user/product/detail/{{ $value->id}}">
                                            <div class="single-product-wrapper border p-2 rounded">
                                                <div class="product-img">
                                                    <img src="{{ $value->avatar }}" alt="">
                                                    <img class="hover-img" src="{{ $value->avatar }}" alt="">
                                                    <div class="product-favourite">
                                                        <a href="#" class="fas fa-shopping-bag"></a>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <span>{{ $value->name_product }}</span>
                                                        <h4>{{ $value->name }}</h4>
                                                    <p style="font-size: 20px;" class="product-price">{{ number_format($value->price) }}VNĐ /chai</p>
                                                </div>
                                                <a href="/user/product/detail/{{$value->id}}">
                                                    <button class="btn btn-danger"><span style="color: white ; font-size: 20px"> Xem Chi Tiết Sản Phẩm</span></button>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection
