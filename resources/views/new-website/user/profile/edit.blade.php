@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container rounded bg-white mt-3 mb-1">
            <form action="{{ route('edituser.update', $user->id) }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column align-items-center text-center p-3"><img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset ('storage/profil/' . $user->profile_img) }}"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
                        <div class="col-md-12">
                            <input type="hidden" name="oldImage" value="{{ $user->profile_img }}">
                            <input type="file" id="profile_img" name="profile_img" class="form-control align-item center" value="{{ $user->profile_img }}" placeholder="first name">
                            *JPG|PNG
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $user->name }}" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Nomor Handphone</label><input type="number" name="no_hp" id="nmrhp" class="form-control" placeholder="enter phone number" value="{{ $user->nmrhp }}" required></div>
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
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
