@extends('new-website.pelatih.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mt-3 mb-1">
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset ('storage/profil/profil_img.jpg') }}"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
                    <div class="col-md-12">
                        <input type="file" id="profile_img" name="profile_img" class="form-control align-item center" placeholder="first name">
                        *JPG|PNG
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Tambah Profile</h4>
                        </div>
                        <input type="hidden" name="id_user" id="id_user" class="form-control" value="{{ Auth::user()->id }}" required>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Nama</label><input type="text" name="name" id="name" class="form-control" placeholder="enter your name" value="{{ $user->name }}" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Nomor Handphone</label><input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="enter phone number" value="{{ $user->nmrhp }}" required></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                <select class="form-control" aria-label="Default select example" name="jenis_kelamin" required>
                                    <option selected>-- Pilih --</option>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Alamat</label> <textarea name="alamat" id="alamat" cols="20" rows="2" class="form-control" required></textarea></div>
                        </div>
                        <div class="p-3 py-5">
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
@endsection
