@extends('new-website.pelatih.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        
        <div class="container rounded bg-white mb-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3">
                        <div class="col-md-12 mt-2">
                            <label for="">Target Utama User</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $fokusUser->target }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Level User</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $fokusUser->level }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Berat Badan (Kg)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $fokusUser->berat_badan }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Tinggi Badan (Cm)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $fokusUser->tinggi_badan }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection
