@extends('new-website.pelatih.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-6 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-right">Your Coach Profile</h4>
                        </div>
                        <img class="rounded-circle" width="200px" height="200px" src="{{ asset('storage/profil/' . Auth::user()->profile_img) }}">
                        <span class="font-weight-bold mt-1">{{ Auth::user()->name }}</span>
                        <span class="text-black-50">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <div class="col-md-6 border-right">
                    <div class="p-3 py-5">
                            <div class="col-md-12">
                                <label for="">Nomor Handphone</label>
                                <input type="text" name="no_hp" id="tb" class="form-control" value="{{ Auth::user()->no_hp }}" readonly>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="tb" class="form-control" value="{{ Auth::user()->jenis_kelamin }}" readonly>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="20" rows="2" class="form-control" readonly>{{ Auth::user()->alamat }}</textarea>
                            </div>
                    </div>
                    <div class="btn-group align-items-center d-flex flex-column">
                        <a href="{{ route('profile.edit', $pelatih[0]->id) }}" class="btn btn-warning profile-button">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>

@endsection
