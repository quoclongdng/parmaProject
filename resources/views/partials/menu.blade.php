<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
            </p>
          </a>
        </li>
        </li>
            {{-- User --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                <p>
                    Danh Sách Người Dùng
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh Sách Người Dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tạo mới người dùng</p>
                    </a>
                </li>
                </ul>
            </li>


            {{-- Customer --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-secret"></i>
                <p>
                    Danh Sách Khách Hàng
                    <i class=" fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="/customer/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách Khách Hàng</p>
                        </a>
                    </li>
                <li class="nav-item">
                    <a href="/customer/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                    <p>Tạo mới khách hàng</p>
                    </a>
                </li>
                </ul>
            </li>


        {{-- Product-Category --}}
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Danh Mục Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/product-category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product-category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới danh mục</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Product --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Danh Sách Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới danh sách</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- Product-Detail --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
              <p>
                Chi Tiết Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/productDetail/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi Tiết Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/productDetail/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới Hóa Đơn </p>
                </a>
              </li>
            </ul>
          </li>



          {{-- News --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-newspaper"></i>
              <p>
                Danh Sách Tin Tức
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/news/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới tin tức</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- News-Category --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Danh Mục Tin Tức
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/news-category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Mục Tin Tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/news-category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới danh mục</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- Bill --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Danh Mục Hóa Đơn
                <i class=" fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/bill/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hóa Đơn Nhập Xuất</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bill/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới hóa đơn</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- Bill-Detail --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Chi Tiết Hóa Đơn
                <i class=" fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="/bill-details/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi Tiết Hóa Đơn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bill-details/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới hóa đơn</p>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
