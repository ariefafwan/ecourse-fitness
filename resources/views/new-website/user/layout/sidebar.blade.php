<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('user') }}">E-Course Fitness</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('pelatih') }}">EF</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ ($page === "Dashboard User") ? 'active' : ''}}"><a class="nav-link" href="{{ route('user') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Pages</li>
        <li class="{{ ($page === "Tambah Fokus Latihan Anda" || $page == 'Fokus Latihan Anda' || $page == 'Edit Fokus Latihan Anda') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('aspek.index') }}"><i class="fas fa-fw fa-user"></i> <span>Fokus Latihan</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Program Latihan</span></a>
          <ul class="dropdown-menu">
            <li class="{{ ($page == "Anda Sudah Memesan Pelatih" || $page == 'Order Pelatih Anda') ? 'active' : '' }}"><a href="{{ route('permintaan.index') }}">Permintaan Latihan</a></li> 
            <li class="{{ ($page == "Program Berjalan Anda" || $page == 'Detail Latihan Anda') ? 'active' : '' }}"><a href="{{ route('hasil.index') }}">Program Berjalan</a></li>
            <li class="{{ ($page == "Program Latihan Selesai" || $page == 'Hasil Latihan Anda') ? 'active' : '' }}"><a href="{{ route('hasil.create') }}">Hasil Latihan</a></li>
          </ul>
        </li>
      </ul>        
    </aside>
  </div>