@extends('user.app')

@section('userbody')

<!-- Begin Page Content -->
    <div class="container-fluid">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Fokus Latihan Anda</h1>
        </div>

        <div class="container rounded bg-white mt-3 mb-1">
            <form action="{{ route('aspek.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
            <div class="row">
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">

                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}" class="form-control" placeholder="..." required>

                    <div class="col-md-12">
                        <label for="">Pilih Area Fokus Latihan Anda</label>
                        <select class="form-select" aria-label="Default select example" name="fokus" required>
                            <option selected>-- Pilih --</option>
                            <option value="Seluruh Tubuh">Seluruh Tubuh</option>
                            <option value="Lengan">Lengan</option>
                            <option value="Dada">Dada</option>
                            <option value="Otot Perut">Otot Perut</option>
                            <option value="Kaki">Kaki</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Apa Target Utama Anda ?</label>
                        <select class="form-select" aria-label="Default select example" name="target" required>
                            <option selected>-- Pilih --</option>
                            <option value="Kurangi Berat">Kurangi Berat</option>
                            <option value="Membangun Otot">Membangun Otot</option>
                            <option value="Tetap Bugar">Tetap Bugar</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Apa Yang Paling Memotivasi Anda ?</label>
                        <select class="form-select" aria-label="Default select example" name="motivasi" required>
                            <option selected>-- Pilih --</option>
                            <option value="Merasa Percaya Diri">Merasa Percaya Diri</option>
                            <option value="Mengurangi Stress">Mengurangi Stress</option>
                            <option value="Meningkatkan Kesehatan">Meningkatkan Kesehatan</option>
                            <option value="Meningkatkan Energi">Meningkatkan Energi</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">                        
                        <div class="col-md-12 mt-2">
                            <label for="">Berapa Kali Anda Bisa Push Up Sekaligus ?</label>
                            <select class="form-select" aria-label="Default select example" name="tingkat" required>
                                <option selected>-- Pilih --</option>
                                <option value="Pemula">Pemula (3-5 Push Up)</option>
                                <option value="Menengah">Menengah (5-10 Push Up)</option>
                                <option value="Lanjutan">Lanjutan (Setidaknya 10)</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="">Bagaimana Tingkat Aktivitas Anda Sehari-Hari ?</label>
                            <select class="form-select" aria-label="Default select example" name="aktivitas" required>
                                <option selected>-- Pilih --</option>
                                <option value="Tidak Bergerak">Tidak Bergerak (Saya Hanya Duduk Di Depan Meja Setiap Harinya)</option>
                                <option value="Sedikit Aktif">Sedikit Aktif ( Saya Terkadang Olahraga Atau Berjalan Selama 30 Menit)</option>
                                <option value="Lumayan Aktif">Lumayan Aktif (Saya Menyisihkan Satu Jam Atau Lebih Untuk Berolahraga Setiap Harinya)</option>
                                <option value="Sangat Aktif">Sangat Aktif (Saya Suka Berolahraga, dan Ingin Lebih Banyak Berolahraga)</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Berat Badan (Kg)</label>
                            <input type="number" name="bb" id="bb" class="form-control" placeholder="...." required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="labels">Tinggi Badan (Cm)</label>
                            <input type="number" name="tb" id="tb" class="form-control" placeholder="..." required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <div class="col-md-12 mt-2">
                            <label for="">Tetapkan Target Mingguan Anda (Kami Sarankan Berlatih Setidaknya 3 Hari Per Minggu Untuk Hasil Yang Lebih Maksimal)</label>
                            <select class="form-select" aria-label="Default select example" name="runtutan" required>
                                <option selected>-- Pilih --</option>
                                <option value="1">1x Seminggu</option>
                                <option value="2">2x Seminggu</option>
                                <option value="3">3x Seminggu</option>
                                <option value="4">4x Seminggu</option>
                                <option value="5">5x Seminggu</option>
                                <option value="6">6x Seminggu</option>
                                <option value="7">7x Seminggu</option>
                            </select>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Tambah</button></div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>

    </div>

@endsection
