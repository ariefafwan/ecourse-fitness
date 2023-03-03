@extends('pelatih.app')

@section('pbody')

<!-- Begin Page Content -->
    <div class="container-fluid">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buat Rumus Anda</h1>
        </div>
        
        <form action="{{ route('rumus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                    <div class="col-md-12">
                        <label for="">Nama Rumus</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <input type="hidden" name="pelatih_id" id="pelatih_id" value="{{ Auth::user()->id }}" class="form-control" required>
                    </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Tambah</button>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-right">Jenis Latihan</h4>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 1</label>
                            <input type="text" name="latihan1" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 2</label>
                            <input type="text" name="latihan2" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 3</label>
                            <input type="text" name="latihan3" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 4</label>
                            <input type="text" name="latihan4" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 5</label>
                            <input type="text" name="latihan5" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 6</label>
                            <input type="text" name="latihan6" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 7</label>
                            <input type="text" name="latihan7" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 8</label>
                            <input type="text" name="latihan8" id="latihan1" class="form-control" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-left">Optional (Boleh Dikosongkan)</h4>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 9</label>
                            <input type="text" name="latihan10" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 10</label>
                            <input type="text" name="latihan11" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 11</label>
                            <input type="text" name="latihan12" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 13</label>
                            <input type="text" name="latihan13" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 14</label>
                            <input type="text" name="latihan14" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 15</label>
                            <input type="text" name="latihan15" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 16</label>
                            <input type="text" name="latihan16" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 17</label>
                            <input type="text" name="latihan17" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 18</label>
                            <input type="text" name="latihan18" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 19</label>
                            <input type="text" name="latihan19" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 20</label>
                            <input type="text" name="latihan20" id="latihan1" placeholder="Contoh : Push Up 20X atau Plank 2 Menit....." class="form-control" >
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </form>
    </div>

@endsection
