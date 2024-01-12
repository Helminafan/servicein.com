
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon">
        <i class="fas fa-laugh-wink"></i>
      </div> -->
        <div class="sidebar-brand-text">
            <p>Servicein<span>.</span> Com</p>
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('user/home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fa-brands fa-microsoft"></i>
            <span>Halaman Utama</span></a>
    </li>

    <!-- Divider -->

    <!-- Nav Item - Charts -->
    <li class="nav-item {{request()->is('user/tabelresi*')  ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tabelresi.index') }}">
            <i class="fa-solid fa-box"></i>

            <span>Cek Resi</span></a>
    </li>
   
  

    <!-- Nav Item - Tables -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>

