@extends('master-homepage')
@section('content')
<section class="welcome_area bg-img background-overlay" style="background-image: url(/assets_homepage/img/banner.webp); background-size: contain;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        </div>
    </div>
</section>
<div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/1.jpg);">
                    <div class="catagory-content">
                        <a style="font-size: 20px;" href="#">Dược phẩm</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/1.jpg);">
                    <div class="catagory-content">
                        <a style="font-size: 20px;" href="#">Thực phẩm chức năng</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/1.jpg);">
                    <div class="catagory-content">
                        <a style="font-size: 20px;" href="#">Sản phẩm làm đẹp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Sản phẩm mới</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">
                    @foreach ( $data as $key => $value )
                    <div class="single-product-wrapper border p-2 rounded ">
                            <a href="/user/product/detail/{{$value->id}}">
                            <div class="product-img">
                                <img src="{{$value->avatar}}" style="object-fit: cover; width:300px; height:300px" alt="">
                                <img class="hover-img" src="{{$value->avatar}}" style="object-fit: cover; width:300px; height:300px" alt="">
                                <div class="product-favourite">
                                    <a href="#" class="fas fa-shopping-bag"></a>
                                </div>
                            </div>
                            <div class="product-description">
                                <span>{{$value->categori_name}}</span>
                                    <h6>{{$value->name}}</h6>
                                <p style="font-size: 20px;" class="product-price">${{$value->price}}/chai</p>
                                <div class="hover-content">

                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Tin Mới</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">
                    @foreach ( $new as $key => $value )
                    <div class="single-product-wrapper border p-2 rounded">
                        <div class="product-img">
                            <img src="{{$value->avatar}}" alt="">
                            <img class="hover-img" src="{{$value->avatar}}" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <a href="">
                                <h6>{{ $value->name}}</h6>
                            </a>
                            <p class="product-price">{{$value->description}}</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="/user/news/detail/{{$value->id}}" class="btn essence-btn">Go to</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<div class="brands-area d-flex align-items-center justify-content-between ">
    <!-- Brand Logo -->
    <div class="single-brands-logo border">
        <div class="bg-img background-overlay" style="background-image: url(img/1.jpg);"></div>
        <h4> Miễn phí vận chuyển</h4>
        <span>áp dụng cho đơn hàng trên 300.000vnđ</span>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo ">
        <h4>Thuốc tốt giá rẻ</h4>
        <span>Nếu không rẻ, hoàn tiền chênh lệch</span>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo ">
        <h4>Nhà thuốc gần bạn</h4>
        <span>Tìm ngay nhà thuốc nơi gần bạn sống và ghé thăm</span>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo ">
        <h4>Tích luỹ điểm thưởng</h4>
        <span>Điểm thưởng sử dụng cho mọi giao dịch</span>
    </div>
</div>
@endsection

