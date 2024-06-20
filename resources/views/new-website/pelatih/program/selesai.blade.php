@extends('new-website.pelatih.layout.app')

@section('content')

<div class="container-fluid">
    <div class="row">
    <div class="container">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Nomor Handphone</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Latihan Sebelumnya</th>
                                <th class="text-center">Tanggal Latihan</th>
                                <th class="text-center">Runtutan Ke</th>
                                <th class="text-center">Tambah Program Latihan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->dataPelatih->dataUser->name }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->nmrhp }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->alamat }}</td>
                                <td align="center">{{ $row->dataLatihanPelatih->nama_latihan }}</td>
                                <td align="center">{{ $row->tanggal }}</td>
                                <td align="center">{{ $row->latihan_ke }}</td>
                                <td>
                                <div class="btn-group">
                                    <form id="program-create-form" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" id="id_pelatih" name="id_pelatih" value="{{ $pelatih[0]->id }}" required>
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ $row->id_user }}" required>
                                        <input type="hidden" class="form-control" id="id_permintaan" name="id_permintaan" value="{{ $row->id_permintaan }}" required>
                                        <input type="hidden" class="form-control" id="status" name="status" value="Belum Dikerjakan" required>
                                        <div class="col-md-12">
                                            <label class="tanggal">Tanggal Latihan</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Latihan" required>
                                        </div>
                                        <label for="id_latihan_pelatih">Pilih Rumus Latihan</label>
                                        <div class="col-md-12">
                                            <select id="id_latihan_pelatih" class="form-control" aria-label="Default select example" name="id_latihan_pelatih" required>
                                                <option selected>-- Pilih --</option>
                                                @foreach ($rumus as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nama_latihan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="btn-group mt-1">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-flat"
                                        onclick="event.preventDefault();
                                        document.getElementById('program-create-form').submit();">
                                        <i class="fa fa-plus" aria-hidden="true"></i> <span>Berikan Latihan Selanjutnya</span>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            {{ $program->links() }}
        </div> --}}
    </div>
    </div>
</div>
@endsection