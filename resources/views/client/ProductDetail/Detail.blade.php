@extends('master-homepage')

@section('content')
<section class="single_product_details_area d-flex align-items-center mb-3">

    <!-- Single Product Thumb -->
    @isset($data)
    <div class="single_product_thumb clearfix " style="margin-top: 100px">
        <img src="{{$data->avatar}}" style="margin-left: 250px ; width: 500px;" >
    </div>
    <!-- Single Product Description -->
    <div class="single_product_desc clearfix" style="margin-top: 100px">
        <form action="/user/bill/add" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}" >
            <span>{{$data->nameProduct}}</span>
            <h2>{{$data->name}}</h2>
            <p class="product-price"> {{$data->price}} VND</p>
            <p class="product-desc">{{ $data->content }}</p>

            <!-- Form -->
            <div class="cart-form clearfix">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="quantity" id="quantity" class="mr-5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button class="btn essence-btn">Buy Now</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <button class="btn essence-btn" type="submit">
                            <a class="fas fa-shopping-cart" > Add to cart</a>
                    </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endisset



</section>

<hr>
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h5>Sản phẩm tương tự:</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">
                    @foreach ( $slide as $key=>$value )
                    <div class="single-product-wrapper border p-2 rounded ">
                        <div class="product-img">
                            <img src="{{ $value->avatar}}" alt="">
                            <img class="hover-img" src="{{ $value->avatar}}" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>{{$value->productcategory_id}}</span>
                            <a href="single-product-details.html">
                                <h6>{{$value->name}}</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">${{$value->price}}/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

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

@endsection
