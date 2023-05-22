@extends('pelatih.app')

@section('pbody')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mt-3 mb-1">
            <form action="{{ route('profile.update', $p->id) }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset('storage/profil/' . $p->profile_img) }}">
                        <span class="font-weight-bold">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" name="oldImage" value="{{ $p->profile_img }}">
                        <input type="file" id="profile_img" name="profile_img" class="form-control align-item center" placeholder="first name" required>
                        *JPG|PNG
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Profile</h4>
                        </div>
                        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ old('user_id', Auth::user()->id) }}" required autofocus>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $p->name) }}" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Nomor Handphone</label>
                                <input type="number" name="nmrhp" id="nmrhp" class="form-control" placeholder="enter phone number" value="{{ old('nmrhp', $p->nmrhp) }}" required></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jeniskl" required>
                                    <option selected value="{{ $p->jeniskl }}">{{ $p->jeniskl }}</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="20" rows="2" class="form-control" required>{{ old('alamat', $p->alamat) }}</textarea>
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
