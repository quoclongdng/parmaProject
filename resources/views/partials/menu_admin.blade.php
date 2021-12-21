<div class="sidebar">

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
                    <a href="/admin/user" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh Sách Người Dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/user/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tạo mới người dùng</p>
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
                <a href="/admin/news-category/list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Mục Tin Tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/news-category/create" class="nav-link">
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
                <a href="/admin/bill/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hóa Đơn Nhập Xuất</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/bill/create" class="nav-link">
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
                <a href="/admin/bill-details/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi Tiết Hóa Đơn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/bill-details/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới hóa đơn</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
                <a href="/admin/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Đăng Xuất
                  </p>
                </a>
              </li>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
