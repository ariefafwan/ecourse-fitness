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
                                <th class="text-center">Fokus Latihan</th>
                                <th class="text-center">Program Telah Diberikan</th>
                                <th class="text-center">Berikan Rumus & Tanggal Latihan</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($permintaan as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->dataUser->name }}</td>
                                <td align="center">{{ $row->dataUser->no_hp }}</td>
                                <td align="center">{{ $row->dataUser->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('terima.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td align="center">{{ $row->dataProgramLatihan->count() }}</td>
                                <td>
                                <div class="btn-group">
                                    <form id="program-create-form" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" id="id_pelatih" name="id_pelatih" value="{{ $pelatih[0]->id }}" required>
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ $row->id_user }}" required>
                                        <input type="hidden" class="form-control" id="id_permintaan" name="id_permintaan" value="{{ $row->id }}" required>
                                        <input type="hidden" class="form-control" id="status" name="status" value="Belum Dikerjakan" required>
                                        <div class="col-md-12">
                                            <label class="tanggal">Tanggal Latihan</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Latihan" required>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <label for="id_latihan_pelatih">Pilih Rumus Latihan</label>
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
                                        <i class="fa fa-plus" aria-hidden="true"></i> <span>Tambah Program Latihan</span>
                                    </a>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        {{-- <tfoot>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                    {{-- <div class="d-flex justify-content-center">
                        {{ $permintaan->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection