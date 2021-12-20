@extends('master-homepage')
@section('content')
    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h4 class="mb-30">Danh mục</h4>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#" style="color: rgb(88, 87, 87);">Dược phẩm</a>
                                        <ul class="sub-menu collapse " id="clothing">
                                            <li><a href="#">Thuốc kháng dị ứng</a></li>
                                            <li><a href="#">Thuốc kháng viêm</a></li>
                                            <li><a href="#">Thuốc ngừa thai</a></li>
                                            <li><a href="#">Thuốc cảm lạnh</a></li>
                                            <li><a href="#">Thuốc da liễu</a></li>
                                            <li><a href="#">Thuốc giảm cân</a></li>
                                            <li><a href="#">Thuốc tiêu hoá</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="#" style="color: rgb(88, 87, 87);">Thực phẩm chức năng</a>
                                        <ul class="sub-menu collapse" id="shoes">
                                            <li><a href="#">Nhóm dạ dày</a></li>
                                            <li><a href="#">Nhóm tim mạch</a></li>
                                            <li><a href="#">Nhóm đường huyết</a></li>
                                            <li><a href="#">Nhóm hô hấp</a></li>
                                            <li><a href="#">Nhóm thần kinh</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="#" style="color: rgb(88, 87, 87);">Chăm sóc sắc đẹp</a>
                                        <ul class="sub-menu collapse" id="accessories">
                                            <li><a href="#">Chăm sóc mặt</a></li>
                                            <li><a href="#">sản phẩm chống nắng</a></li>
                                            <li><a href="#">Dụng cụ làm đẹp</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->

                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">

                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                <button class="btn btn-danger"><a href="//user/product/detail/{{$value->id}}"><span style="color: white ; font-size: 20px"> Xem Chi Tiết Sản Phẩm</span></a></button>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                            {{-- </form> --}}

                        </div>
                    </div>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
@endsection
