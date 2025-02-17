<!-- resources/views/layouts/partials/sidebar.blade.php -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="Purwakarta Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Purwakarta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengaduan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Pengaduan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galeri.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('layanan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-concierge-bell"></i>
                        <p>
                            Layanan
                        </p>
                    </a>
                </li>
                <!-- Tambahkan menu lain di sini -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
