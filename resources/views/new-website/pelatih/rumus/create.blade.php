@extends('new-website.pelatih.layout.app')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('rumus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="rounded bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-3">
                            <div class="col-md-12 mt-2">
                                <label class="labels">Nama Rumus Latihan Anda</label>
                                <input type="text" name="nama_latihan" id="berat_badan" class="form-control" placeholder="Nama Rumus Latihan" required>
                            </div>
                            <div id="latihan1" class="row col-md-12 mt-2">
                                <div class="col-2">
                                    <label class="labels">Urutan Gerakan</label>
                                    <input type="number" name="urutan[]" id="berat_badan" class="form-control" placeholder="Urutan Gerakan" required>
                                </div>
                                <div class="col-4">
                                    <label class="labels">Nama Gerakan</label>
                                    <input type="text" name="nama[]" id="berat_badan" class="form-control" placeholder="Nama Gerakan" required>
                                </div>
                                <div class="col-4">
                                    <label class="labels">Video Gerakan (Max 2Mb)</label>
                                    <input type="file" name="file[]" id="file" class="form-control" placeholder="Video Gerakan" required>
                                </div>
                            </div>
                            <div id="buttonaksi" class="col-md-12 mt-4">
                                <button id="tambahlatihan" onclick="tambahLatihan()" type="button" class="btn btn-warning mr-auto"><i class="fa fa-plus-circle m-auto" aria-hidden="true"></i><span> Tambah Gerakan</span></button>
                                <button class="btn btn-primary profile-button" type="submit">Simpan Latihan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
      <script>
            var latihanke = 1
            const tambahLatihan = () => {
                latihanke += 1;
                $( "#buttonaksi" ).before( `
                            <div id="latihan${latihanke}" class="row col-md-12 mt-2">
                                <div class="col-2">
                                    <label class="labels">Urutan Gerakan</label>
                                    <input type="number" name="urutan[]" id="berat_badan" class="form-control" placeholder="Urutan Gerakan" required>
                                </div>
                                <div class="col-4">
                                    <label class="labels">Nama Gerakan</label>
                                    <input type="text" name="nama[]" id="berat_badan" class="form-control" placeholder="Nama Latihan" required>
                                </div>
                                <div class="col-4">
                                    <label class="labels">Video Gerakan (Max 2Mb)</label>
                                    <input type="file" name="file[]" id="file" class="form-control" placeholder="Video Latihan" required>
                                </div>
                                <div class="col-2 mt-auto mb-1">
                                    <button id="hapuslatihanke${latihanke}" onClick='hapusLatihanKe(${latihanke})' type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                            </div>
                ` );
            }

            const hapusLatihanKe = (urutan) => {
                $( `#latihan${urutan}` ).remove()
            }
      </script>
@endpush
