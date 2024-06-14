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
        <li class="{{ ($page === "Dashboard Pelatih") ? 'active' : ''}}"><a class="nav-link" href="{{ route('pelatih') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Pages</li>
        @if ($pelatih->isEmpty())
        <li class="{{ ($page === "Profile Pelatih") ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('profile.index') }}"><i class="fas fa-fw fa-user"></i> <span>Tambahkan Profile Anda</span></a>
        </li>
        @else
        <li class="{{ ($page === "Profile Pelatih") ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('profile.index') }}"><i class="fas fa-fw fa-user"></i> <span>Profile Pelatih</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-ruler"></i> <span>Program</span></a>
          <ul class="dropdown-menu">
            <li class="{{ ($page == "Berikan Program Anda") ? 'active' : '' }}"><a href="{{ route('program.index') }}">Menuggu Program Latihan</a></li> 
            <li class="{{ ($page == "Program Berjalan") ? 'active' : '' }}"><a href="{{ route('program.create') }}">Program Latihan Berjalan</a></li>
            <li class="{{ ($page == "Hasil Latihan") ? 'active' : '' }}"><a href="{{ route('selesai.index') }}">Hasil Program</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Permintaan Latihan</span></a>
          <ul class="dropdown-menu">
            <li class="{{ ($page == "Berikan Program Anda") ? 'active' : '' }}"><a href="{{ route('terima.index') }}">Permintaan Masuk</a></li> 
            <li class="{{ ($page == "Program Berjalan") ? 'active' : '' }}"><a href="{{ route('diterima') }}">Permintaan Diterima</a></li>
            <li class="{{ ($page == "Hasil Latihan") ? 'active' : '' }}"><a href="{{ route('ditolak') }}">Perminataan Ditolak</a></li>
          </ul>
        </li>
        <li class="{{ ($page === "Rumus Latihan") ? 'active' : ''}}"><a class="nav-link" href="{{ route('rumus.index') }}"><i class="fas fa-tasks"></i> <span>Rumus Latihan</span></a></li>
        @endif  
      </ul>        
    </aside>
  </div>