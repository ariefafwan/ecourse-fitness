@extends('new-website.pelatih.layout.app')

@section('content')

<div class="container-fluid">
    <h1 class="mb-2 text-gray-800">Belum Bisa Mengisi Profile Pelatih</h1>
    <div class="row">
    <div class="container text-dark">
        
        Anda Belum Mengisi Form Profile Pelatih!
        
        <div class="box-footer mb-3 mt-4">
            <a href="{{ route('aspek.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Fokus Latihan Anda</a>
        </div>
        
    </div>
    </div>
</div>
@endsection