<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">E-Course Fitness</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">EF</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
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
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
          <ul class="dropdown-menu">
            <li><a href="utilities-contact.html">Contact</a></li>
            <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
            <li><a href="utilities-subscribe.html">Subscribe</a></li>
          </ul>
        </li>            
        <li>
          <a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a>
        </li>
      </ul>        
    </aside>
  </div>