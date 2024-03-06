  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-1 sidebar-dark-lightblue sidebar-gardians">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ url('uploads/logo.png') }}" alt="vbeyond" class="brand-image elevation-0" style="opacity: .8">
          <span class="brand-text font-weight-light">E-Document IT Solution</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ url('uploads/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">คุณ</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{route('users')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                            แดชบอร์ด
                              {{-- <span class="right badge badge-danger">New</span> --}}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            แบบฟรอ์มขอเปิดEmail
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
