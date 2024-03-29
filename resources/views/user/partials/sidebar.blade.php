<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route ('home') }}">
        {{-- <div class="sidebar-brand-icon">
            <img src="/img/logo.png" style="width: 60%;margin-left:5px"/>
        </div> --}}
        <div class="sidebar-brand-text mx-3" style="color:#ffffff;font-size:20pt">FITNESS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">

    <div class="sidebar-heading">
        Menu
    </div>

    {{-- <!-- Nav Item - Akun Saya -->
    <li class="nav-item {{ ($page === "Akun Saya") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('layaruser.index') }}">
            <i class="fas fa-fw fa-id-card-alt"></i>
            <span>Akun Saya</span></a>
    </li> --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($page === "Dashboard User") ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-columns"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ ($page === "Hasil Penilaian")  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route ('aspek.index') }}">
            <i class="fas fa-file-alt fa-cog"></i>
            <span>Fokus Latihan</span>
        </a>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item {{ ($page === "Edit User")  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('permintaan.index') }}">
            <i class="fa fa-address-book" aria-hidden="true"></i>
            <span>Permintaan Latihan</span>
        </a>
    </li>

    <li class="nav-item {{ ($page === "Program Berjalan Anda")  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route ('hasil.index') }}">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <span>Program Berjalan</span>
        </a>
    </li>
    
    <li class="nav-item {{ ($page === "Program Latihan Selesai")  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route ('hasil.create') }}">
            <i class="fa fa-percent" aria-hidden="true"></i>
            <span>Hasil Latihan</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        @if ($nippos)
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-laptop"></i>
            <span>Daftar Permohonan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pemohonan Cuti</h6>
                <a class="collapse-item" href="{{ route('izin.index') }}">Permohonan Cuti Dikirim</a>
                <a class="collapse-item" href="{{ route('diterima') }}">Permohonan Cuti Diterima</a>
                <a class="collapse-item" href="{{ route('ditolak') }}">Permohonan Cuti Ditolak</a>
            </div>
        </div>
        @else
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-laptop"></i>
            <span>Anda Belum Isi Biodata</span>
        </a>
        @endif
    </li> --}}

    <!-- Divider -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
