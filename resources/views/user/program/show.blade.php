@extends('user.app')

@section('userbody')

<!-- Begin Page Content -->
    <div class="container-fluid">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Program Anda</h1>
        </div>
            
        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                    <div class="col-md-12">
                        <label for="">Nama Latihan</label>
                        <input type="text" name="name" id="name" value="{{ $program->kind->name }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Oleh</label>
                        <input type="text" name="name" id="name" value="{{ $program->pelatih->name }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Tanggal Latihan</label>
                        <input type="text" name="name" id="name" value="{{ $program->tgl }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Runtutan Latihan Anda Ke</label>
                        <input type="text" name="name" id="name" value="{{ $program->runtutan }}" class="form-control" readonly>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-right">Latihan Anda</h4>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 1</label>
                            <input type="text" name="latihan1" id="latihan1" class="form-control" value="{{ $program->kind->latihan1 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 2</label>
                            <input type="text" name="latihan2" id="latihan1" class="form-control" value="{{ $program->kind->latihan2 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 3</label>
                            <input type="text" name="latihan3" id="latihan1" class="form-control" value="{{ $program->kind->latihan3 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 4</label>
                            <input type="text" name="latihan4" id="latihan1" class="form-control" value="{{ $program->kind->latihan4 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 5</label>
                            <input type="text" name="latihan5" id="latihan1" class="form-control" value="{{ $program->kind->latihan5 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 6</label>
                            <input type="text" name="latihan6" id="latihan1" class="form-control" value="{{ $program->kind->latihan6 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 7</label>
                            <input type="text" name="latihan7" id="latihan1" class="form-control" value="{{ $program->kind->latihan7 }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 8</label>
                            <input type="text" name="latihan8" id="latihan1" class="form-control" value="{{ $program->kind->latihan8 }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-left">Optional (Boleh Tidak Dikerjakan)</h4>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 9</label>
                            <input type="text" name="latihan10" id="latihan1" class="form-control" value="{{ $program->kind->latihan10 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 10</label>
                            <input type="text" name="latihan11" id="latihan1" class="form-control" value="{{ $program->kind->latihan11 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 11</label>
                            <input type="text" name="latihan12" id="latihan1" class="form-control" value="{{ $program->kind->latihan12 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 13</label>
                            <input type="text" name="latihan13" id="latihan1" class="form-control" value="{{ $program->kind->latihan13 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 14</label>
                            <input type="text" name="latihan14" id="latihan1" class="form-control" value="{{ $program->kind->latihan14 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 15</label>
                            <input type="text" name="latihan15" id="latihan1" class="form-control" value="{{ $program->kind->latihan15 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 16</label>
                            <input type="text" name="latihan16" id="latihan1" class="form-control" value="{{ $program->kind->latihan16 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 17</label>
                            <input type="text" name="latihan17" id="latihan1" class="form-control" value="{{ $program->kind->latihan17 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 18</label>
                            <input type="text" name="latihan18" id="latihan1" class="form-control" value="{{ $program->kind->latihan18 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 19</label>
                            <input type="text" name="latihan19" id="latihan1" class="form-control" value="{{ $program->kind->latihan19 }}" readonly >
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Latihan 20</label>
                            <input type="text" name="latihan20" id="latihan1" class="form-control" value="{{ $program->kind->latihan20 }}" readonly >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
