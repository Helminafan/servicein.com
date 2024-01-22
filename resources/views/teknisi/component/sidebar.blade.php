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
    <li class="nav-item {{ request()->is('teknisi/dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('dashboard.teknisi')}}">
        <i class="fa-brands fa-microsoft"></i>
        <span>Dashboard</span></a
      >
    <li class="nav-item {{ request()->is('teknisi/service') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('home_teknisi')}}">
        <i class="fa-brands fa-microsoft"></i>
        <span>Service</span></a
      >
    </li>
    <li class="nav-item {{ request()->is('teknisi/riwayatPesanan') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('teknisi.riwayat')}}">
        <i class="fa-solid fa-clock"></i>
        <span>Riwayat</span></a
      >
    </li>

    <!-- Divider -->

    <!-- Nav Item - Charts -->
 

    <!-- Nav Item - Tables -->
   

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
  </ul>
