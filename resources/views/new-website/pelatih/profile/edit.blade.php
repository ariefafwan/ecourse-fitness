@extends('new-website.pelatih.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mt-3 mb-1">
            <form action="{{ route('profile.update', $p->id) }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset('storage/profil/' . $user->profile_img) }}">
                        <span class="font-weight-bold">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" name="oldImage" value="{{ $user->profile_img }}">
                        <input type="file" id="profile_img" name="profile_img" class="form-control align-item center" placeholder="first name">
                        *JPG|PNG
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Profile</h4>
                        </div>
                        <input type="hidden" name="id_user" id="id_user" class="form-control" value="{{ old('id_user', Auth::user()->id) }}" required autofocus>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Nomor Handphone</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="enter phone number" value="{{ old('no_hp', $user->nmrhp) }}" required></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                <select class="form-control" aria-label="Default select example" name="jenis_kelamin" required>
                                    <option selected value="{{ $user->jenis_kelamin }}">{{ $user->jenis_kelamin }}</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="20" rows="2" class="form-control" required>{{ old('alamat', $user->alamat) }}</textarea>
                            </div>
                        </div>
                        <div class="p-3 py-5">
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>
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
