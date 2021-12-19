<div class="sidebar">
    <!-- Sidebar user panel (optional) -->

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
                <a href="/admin/news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/news/create" class="nav-link">
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
                <a href="/admin/news-category/create" class="nav-link">
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
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
