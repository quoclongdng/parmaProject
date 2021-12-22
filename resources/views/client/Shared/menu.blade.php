<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

        <nav class="classy-navbar" id="essenceNav">

            <a class="nav-brand" href="/"><img src="/logo.png" style="width: 80px;height: 50px;" ></a>

            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <div class="classy-menu">

                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <div class="classynav">
                    <ul>
                        <li><a href="/user/contact/index">Giới Thiệu</a></li>
                        <li><a href="#">Danh Mục</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Thực phẩm chức năng</li>
                                    <li><a href="/category/tpcn-ho-tro-tieu-hoa">TPCN hỗ trợ tiêu hóa</a></li>
                                    <li><a href="/category/tpcn-ho-tro-benh-huyet-ap">TPCN hỗ trợ bệnh huyết áp</a></li>
                                    <li><a href="/category/tpcn-ho-tro-giam-dai-thao-duong">TPCN hỗ trợ giảm đái tháo đường</a></li>
                                    <li><a href="/category/tpcn-ho-tro-benh-xuong-khop">TPCN hỗ trợ bệnh xương khớp.</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Dược phẩm</li>
                                    <li>
                                        <a href="/category/thuoc-khang-sinh">Thuốc kháng sinh</a>
                                    </li>
                                    <li><a href="/category/thuoc-ke-don">Thuốc kê đơn</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Chăn sóc sắc đẹp</li>
                                    {{-- <li><a href="/category/cham-soc-mat">Chăm sóc mặt</a></li> --}}
                                    <li><a href="/category/san-pham-chong-nang">Sản phẩm chống nắng</a></li>
                                    <li><a href="/category/dung-cu-lam-dep">Dụng cụ làm đẹp</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="/anh_menu.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="/user/news/index">Tin tức</a></li>
                        <li><a href="/user/product">Sản phẩm</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">


            <!-- User Login Info -->
            <div class="text-nowrap" >
                <div class="row ">
                    @if(Auth::guard('customer')->user())
                        <div style="margin-right: 30px; margin-top: 20px; ">
                            <a href="/logout"><button class="btn btn-outline-warning" style="width: 2.5cm" >LogOut</button></a>
                        </div>
                    @else
                        <div class="mt-3">
                            <a href="/login"><button  class="btn btn-outline-success" style="width: 3cm">LogIn</button></a>
                        </div>
                        <div class="ml-2 mr-4 mt-3">
                            <a href="/register"><button class="btn btn-outline-warning" style="width: 3cm">Register</button></a>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Cart Area -->
            @if(Auth::guard('customer')->user())
            <div class="cart-area">
                <a href="/user/bank "><i class="fas fa-hand-holding-usd fa-2x"></i></a>
            </div>
            <div class="cart-area">
                <a href="/user/gio-hang "><i class="fas fa-shopping-cart fa-2x"></i></a>
            </div>
            <div class="cart-area">
                <a href="/user/profile/{{Auth::guard('customer')->user()->id}}"><i class="fas fa-user fa-2x"></i></a>
            </div>
            @endif
        </div>

    </div>
</header>
