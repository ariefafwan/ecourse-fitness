@extends('user.app')

@section('userbody')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-right">Your Profile</h4>
                        </div>
                        <img class="rounded-circle" width="150px" src="{{ asset('public/profil/' . $user->profile_img) }}">
                        <span class="font-weight-bold mt-1">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                        <span class="font-weight-bold mt-1">{{ $user->jeniskl }}</span>
                        <span>{{ $user->nmrhp }}</span>
                        <span class="font-weight-bold mt-1">{{ $user->alamat }}</span>
                    </div>
                    <div class="btn-group align-items-center d-flex flex-column">
                        <a href="{{ route('edituser.edit',$user->id) }}" class="btn btn-success profile-button">Edit Profile</a>
                    </div>
                </div>
                @if (count($aspek) === 1)
                @foreach ($aspek as $as)
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Your Focus</h4>
                        </div>
                        
                            <div class="col-md-12">
                                <label for="">Pilih Area Fokus Latihan Anda</label>
                                <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->fokus }}" readonly>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Apa Target Utama Anda ?</label>
                                <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->target }}" readonly>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Apa Yang Paling Memotivasi Anda ?</label>
                                <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->motivasi }}" readonly>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="btn-group mt-5 ml-3 align-items-center">
                        <a href="{{ route('aspek.edit',$as->id) }}" class="btn btn-success profile-button">Edit Fokus Latihan</a>
                    </div>
                </div>
                @endforeach
                @elseif (count($aspek) < 1)
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Your Focus</h4>
                        </div>
                        <div class="row mt-2">
                            Anda Belum Menambahkan Fokus Latihan Anda, Tambahkan Lalu Dapatkan Program Latihan Terbaik Dari Pelatih Terbaik Buat Anda
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="btn-group mt-5 ml-3 align-items-center">
                        <a href="{{ route('aspek.create') }}" class="btn btn-primary profile-button">Tambah Fokus Latihan</a>
                    </div>
                </div>
                
                @endif
            </div>
        </div>
        </div>
        </div>

    </div>

@endsection
