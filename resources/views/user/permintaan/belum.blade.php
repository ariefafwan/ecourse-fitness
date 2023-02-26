@extends('user.app')

@section('userbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Belum Bisa Melakukan Permintaan Program</h1>
    <div class="row">
    <div class="container text-dark">
        
        Anda Belum Mengisi Form Fokus Latihan Anda, Mari Isi Agar Pelatih Anda Dapat Memberikan Program Terbaik Untuk Anda :
        
        <div class="box-footer mb-3 mt-4">
            <a href="{{ route('aspek.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Fokus Latihan Anda</a>
        </div>
        
    </div>
    </div>
</div>
@endsection