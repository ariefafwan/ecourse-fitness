@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-whitemb-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column align-items-center text-center p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-right text-dark">Profile Akunmu</h4>
                        </div>
                        <img class="rounded-circle" width="200px" height="200px" src="{{ asset('storage/profil/' . $user->profile_img) }}">
                        <span class="font-weight-bold mt-1">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                        <span class="font-weight-bold mt-1">{{ $user->jenis_kelamin }}</span>
                        <span>{{ $user->no_hp }}</span>
                        <span class="font-weight-bold mt-1">{{ $user->alamat }}</span>
                    </div>
                    <div class="btn-group align-items-center d-flex flex-column">
                        <a href="{{ route('edituser.edit',$user->id) }}" class="btn btn-success profile-button">Edit Profile</a>
                    </div>
                </div>
                @if ($aspek !== null)
                <div class="col-md-6">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right text-dark">Fokus Latihanmu</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="">Apa Target Utama Anda ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $aspek->target }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Level Latihan ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $aspek->level }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Berat Badan (Kg)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $aspek->berat_badan }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Tinggi Badan (Cm)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $aspek->tinggi_badan }}" readonly>
                        </div>
                        <div class="btn-group mt-5 ml-3 align-items-center">
                            <a href="{{ route('aspek.edit',$aspek->id) }}" class="btn btn-success profile-button">Edit Fokus Latihan</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-6">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Fokus Latihanmu</h4>
                        </div>
                        <div class="row">
                            Anda Belum Menambahkan Fokus Latihan Anda, Tambahkan Lalu Dapatkan Program Latihan Terbaik Dari Pelatih Terbaik Buat Anda
                        </div>
                        <div class="btn-group mt-5 ml-3 align-items-center">
                            <a href="{{ route('aspek.create') }}" class="btn btn-primary profile-button">Tambah Fokus Latihan</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
