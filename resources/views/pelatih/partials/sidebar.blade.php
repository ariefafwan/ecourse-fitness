<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="/img/gym.jpg" style="width: 60%;margin-left:5px"/>
        </div>
        <div class="sidebar-brand-text mx-3" style="color:#ff9a01;font-size:12pt">GYM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">

    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($page === "Dashboard Admin") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item {{ ($page === "Permohonan")  ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('permohonan.index') }}">
            <i class="fas fa-file-alt fa-cog"></i>
            <span>Permohonan</span>
        </a>
    </li> --}}
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Permohonan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Permohonan</h6>
                <a class="collapse-item" href="#">Masuk</a>
                <a class="collapse-item" href="#">Diterima</a>
                <a class="collapse-item" href="#">Diproses</a>
                <a class="collapse-item" href="#">Ditolak</a>
                <a class="collapse-item" href="#">Selesai</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->


    <li class="nav-item  {{ ($page == "Daftar Latihan") ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('program.index') }}">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <span>Program Latihan Berjalan</span>
        </a>
    </li>

    <li class="nav-item  {{ ($page == "Hasil Latihan") ? 'active' : '' }}">
        <a class="nav-link" href="#">
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
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
