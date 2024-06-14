@extends('new-website.pelatih.layout.app')

@section('content')


<!-- Begin Page Content -->
    <div class="container-fluid">

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
