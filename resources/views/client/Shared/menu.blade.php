<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

        <nav class="classy-navbar" id="essenceNav">

            <a class="nav-brand" href="/"><img src="/assets_homepage/img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="/category/cham-soc-mat">Chăm sóc mặt</a></li>
                                    <li><a href="/category/san-pham-chong-nang">Sản phẩm chống nắng</a></li>
                                    <li><a href="/category/dung-cu-lam-dep">Dụng cụ làm đẹp</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="/assets_homepage/img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="/user/news/index">Tin tức</a></li>
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
                            <button class="btn btn-outline-warning" style="width: 2.5cm" ><a href="/logout">LogOut</a></button>
                        </div>
                    @else
                        <div class="mt-3">
                            <button  class="btn btn-outline-success" style="width: 3cm"><a href="/login">LogIn</a></button>
                        </div>
                        <div class="ml-2 mr-4 mt-3">
                            <button class="btn btn-outline-warning" style="width: 3cm"><a href="/register">Register</a></button>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="/assets_homepage/img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>
<div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="/assets_homepage/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="/assets_homepage/img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="/assets_homepage/img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="/assets_homepage/img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="/checkout/index" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
