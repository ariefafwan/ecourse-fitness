@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container rounded bg-white mb-1">
            <form action="{{ route('aspek.update', $aspek->id) }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3">
                            <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}" class="form-control" placeholder="..." required>
                            <div class="col-md-12">
                                <label for="">Apa Target Utama Anda ?</label>
                                <select class="form-control" aria-label="Default select example" name="target" required>
                                    <option selected aria-required="true" value="{{ $aspek->target }}">{{ $aspek->target }}</option>
                                    <option value="Menurunkan Berat Badan">Menurunkan Berat Badan</option>
                                    <option value="Membesarkan Otot">Membesarkan Otot</option>
                                    <option value="Menjaga Kebugaran">Menjaga Kebugaran</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Berapa Kali Anda Bisa Push Up Sekaligus ?</label>
                                <select class="form-control" aria-label="Default select example" name="level" required>
                                    <option selected aria-required="true" value="{{ $aspek->level }}">{{ $aspek->level }}</option>
                                    <option value="Pemula">Pemula (3-5 Push Up)</option>
                                    <option value="Menengah">Menengah (5-10 Push Up)</option>
                                    <option value="Lanjutan">Lanjutan (Setidaknya 10)</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">Berat Badan (Kg)</label>
                                <input type="number" name="berat_badan" id="bb" class="form-control" placeholder="...." value="{{ $aspek->berat_badan }}" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">Tinggi Badan (Cm)</label>
                                <input type="number" name="tinggi_badan" id="tb" class="form-control" placeholder="..." value="{{ $aspek->tinggi_badan }}" required>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Edit</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
