@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container rounded bg-white mb-1">
            <form action="{{ route('aspek.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3">
                            <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}" class="form-control" placeholder="..." required>
                            <div class="col-md-12">
                                <label for="">Pilih Target Latihan Anda</label>
                                <select class="form-control" aria-label="Default select example" name="target" required>
                                    <option selected>-- Pilih --</option>
                                    <option value="Menurunkan Berat Badan">Menurunkan Berat Badan</option>
                                    <option value="Membesarkan Otot">Membesarkan Otot</option>
                                    <option value="Menjaga Kebugaran">Menjaga Kebugaran</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Berapa Kali Anda Bisa Push Up Sekaligus ?</label>
                                <select class="form-control" aria-label="Default select example" name="level" required>
                                    <option selected>-- Pilih --</option>
                                    <option value="Pemula">Pemula (3-5 Push Up)</option>
                                    <option value="Menengah">Menengah (5-10 Push Up)</option>
                                    <option value="Mahir">Mahir (Setidaknya 10)</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">Berat Badan (Kg)</label>
                                <input type="number" name="berat_badan" id="berat_badan" class="form-control" placeholder="...." required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">Tinggi Badan (Cm)</label>
                                <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control" placeholder="..." required>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Tambah</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
