<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('pelatih') }}">E-Course Fitness</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('pelatih') }}">EF</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ ($page === "Dashboard Admin") ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Pages</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Pengguna</span></a>
          <ul class="dropdown-menu">
            <li class="{{ ($page == "Daftar User") ? 'active' : '' }}"><a href="{{ route('daftaruser.index') }}">Daftar User</a></li> 
            <li class="{{ ($page == "Daftar Pelatih") ? 'active' : '' }}"><a href="{{ route('daftarpelatih.index') }}">Daftar Pelatih</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-ruler"></i> <span>Program</span></a>
          <ul class="dropdown-menu">
            <li class="{{ ($page == "Daftar Program Berjalan") ? 'active' : '' }}"><a href="{{ route('program.berjalan') }}">Daftar Program Berjalan</a></li> 
            <li class="{{ ($page == "Daftar Program Selesai") ? 'active' : '' }}"><a href="{{ route('program.selesai') }}">Daftar Program Selesai</a></li>
          </ul>
        </li>
      </ul>        
    </aside>
  </div>