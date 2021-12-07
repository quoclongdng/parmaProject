@extends('master-homepage')

@section('content')
<section class="single_product_details_area d-flex align-items-center mb-3">

    <!-- Single Product Thumb -->
    @foreach ( $data as $key=>$value )
    @php
        dd($data);
    @endphp
    <div class="single_product_thumb clearfix ">
        <div class="product_thumbnail_slides owl-carousel">
            <img src="{{ $value->avatar }}" alt="">
            {{-- <img src="/assets_homepage/img/2.jpg" alt=""> --}}
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span>{{$value->productcategory_id}}</span>
        <h2>{{$value->description}}</h2>
        <p class="product-price"> {{format_number( $value->price)}} VND</p>
        <p class="product-desc">Mỗi ống chứa hơn 2 tỷ bào tử lợi khuẩn Bacillus Clausii và nước cất vừa đủ trong ống 5ml.</p>

        <!-- Form -->
        <div class="cart-form clearfix">
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                <select name="select" id="productSize" class="mr-5">
                    <option value="value">1</option>
                    <option value="value">2</option>
                    <option value="value">3</option>
                    <option value="value">4</option>
                    <option value="value">5</option>
                    <option value="value">6</option>
                    <option value="value">7</option>
                    <option value="value">8</option>
                    <option value="value">9</option>
                    <option value="value">10</option>
                </select>
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <button class="btn essence-btn">Buy Now</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <button class="btn essence-btn">
                        <a class="fas fa-shopping-cart"> Add to cart</a>
                   </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
                    <div class="single-product-wrapper border p-2 rounded ">
                        <div class="product-img">
                            <img src="img/2.jpg" alt="">
                            <img class="hover-img" src="img/2.jpg" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>Drug store</span>
                            <a href="single-product-details.html">
                                <h6>Cồn 70 độ</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">$80.00/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-wrapper border p-2 rounded">
                        <div class="product-img">
                            <img src="img/2.jpg" alt="">
                            <img class="hover-img" src="img/2.jpg" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>Drug store</span>
                            <a href="single-product-details.html">
                                <h6>Cồn 70 độ</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">$80.00/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-wrapper border p-2 rounded">
                        <div class="product-img">
                            <img src="img/2.jpg" alt="">
                            <img class="hover-img" src="img/2.jpg" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>Drug store</span>
                            <a href="single-product-details.html">
                                <h6>Cồn 70 độ</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">$80.00/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-wrapper border p-2 rounded">
                        <div class="product-img">
                            <img src="img/2.jpg" alt="">
                            <img class="hover-img" src="img/2.jpg" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>Drug store</span>
                            <a href="single-product-details.html">
                                <h6>Cồn 70 độ</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">$80.00/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-wrapper border p-2 rounded">
                        <div class="product-img">
                            <img src="/assets_homepage/img/2.jpg" alt="">
                            <img class="hover-img" src="/assets_homepage/img/2.jpg" alt="">
                            <div class="product-favourite">
                                <a href="#" class="fas fa-shopping-bag"></a>
                            </div>
                        </div>
                        <div class="product-description">
                            <span>Drug store</span>
                            <a href="single-product-details.html">
                                <h6>Cồn 70 độ</h6>
                            </a>
                            <p style="font-size: 20px;" class="product-price">$80.00/chai</p>
                            <div class="hover-content">
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Buy now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
