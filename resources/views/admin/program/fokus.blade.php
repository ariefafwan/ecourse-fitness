@extends('admin.app')

@section('body')

<!-- Begin Page Content -->
    <div class="container-fluid">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $page }}</h1>
        </div>

        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                    <div class="col-md-12">
                        <label for="">Pilih Area Fokus Latihan Anda</label>
                        <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->fokus }}" readonly>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Apa Target Utama Anda ?</label>
                        <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->target }}" readonly>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Apa Yang Paling Memotivasi Anda ?</label>
                        <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->motivasi }}" readonly>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">                        
                        <div class="col-md-12 mt-2">
                            <label for="">Berapa Kali Anda Bisa Push Up Sekaligus ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->tingkat }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Bagaimana Tingkat Aktivitas Anda Sehari-Hari ?</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->aktivitas }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Berat Badan (Kg)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->bb }}" readonly>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Tinggi Badan (Cm)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->tb }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="col-md-12 mt-2">
                            <label for="">Tetapkan Target Mingguan Anda (Kami Sarankan Berlatih Setidaknya 3 Hari Per Minggu Untuk Hasil Yang Lebih Maksimal)</label>
                            <input type="text" name="tb" id="tb" class="form-control" value="{{ $permintaan->aspek->runtutan }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
        </div>

    </div>

@endsection
