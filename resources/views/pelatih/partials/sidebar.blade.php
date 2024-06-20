<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        {{-- <div class="sidebar-brand-icon">
            <img src="/img/gym.jpg" style="width: 60%;margin-left:5px"/>
        </div> --}}
        <div class="sidebar-brand-text mx-3" style="color:#0e0000;font-size:20pt">FITNESS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">
    <div class="sidebar-heading">
        Menu
    </div>

    @if ($pelatih->isEmpty())
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($page === "Dashboard Admin") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ ($page === "Proflie Pelatih") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('profile.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Tambahkan Profile Anda</span></a>
    </li>

    @else

    <li class="nav-item {{ ($page === "Dashboard Admin") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ ($page === "Proflie Pelatih") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('profile.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile Pelatih</span></a>
    </li>

    <li class="nav-item  {{ ($page == "Berikan Program Anda") ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('program.index') }}">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Menuggu Program Latihan</span>
        </a>
    </li>
    
    <li class="nav-item  {{ ($page == "Program Berjalan") ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('program.create') }}">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <span>Program Latihan Berjalan</span>
        </a>
    </li>

    <li class="nav-item  {{ ($page == "Hasil Latihan") ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('selesai.index') }}">
            <i class="fa fa-id-card" aria-hidden="true"></i>
            <span>Hasil Program</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Permintaan Latihan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Permintaan</h6>
                <a class="collapse-item" href="{{ route('terima.index') }}">Masuk</a>
                <a class="collapse-item" href="{{ route('diterima') }}">Diterima</a>
                <a class="collapse-item" href="{{ route('ditolak') }}">Ditolak</a>
            </div>
        </div>
    </li>

    <li class="nav-item  {{ ($page == "Rumus Latihan") ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('rumus.index') }}">
            <i class="fa fa-tasks" aria-hidden="true"></i>
            <span>Rumus Latihan</span>
        </a>
    </li>

    @endif
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
