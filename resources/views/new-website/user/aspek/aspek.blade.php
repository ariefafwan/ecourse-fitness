@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container rounded bg-white mb-1">
            <div class="row">
                @foreach ($aspek as $as)
                <div class="col-md-12">
                    <div class="p-3">
                        <div class="col-md-12">
                            <label for="">Apa Target Utama Anda ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->target }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Berapa Kali Anda Bisa Push Up Sekaligus ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->level }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Berat Badan (Kg)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->berat_badan }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Tinggi Badan (Cm)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $as->tinggi_badan }}" readonly>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="{{ route('aspek.edit',$as->id) }}"><button class="btn btn-warning profile-button" type="submit">Edit</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
