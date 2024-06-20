@extends('pelatih.app')

@section('pbody')


<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">
        <div class="container text-dark">
        
            Anda Belum Mengisi Profile Anda, Tambah Lalu Jalankan Petualangan Anda Sebagai Pelatih
        
        <div class="box-footer mb-3 mt-4">
            <a href="{{ route('profile.index') }}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Profile Anda</a>
        </div>
        
        </div>
        </div>

    </div>

@endsection
