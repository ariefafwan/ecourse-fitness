@extends('new-website.pelatih.layout.app')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Program Latihan Selesai</h1>
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
                                <th class="text-center">Rumus Program</th>
                                <th class="text-center">Tanggal Latihan</th>
                                <th class="text-center">Runtutan Ke</th>
                                <th class="text-center">Tambah Program Latihan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->user->name }}</td>
                                <td align="center">{{ $row->user->nmrhp }}</td>
                                <td align="center">{{ $row->user->alamat }}</td>
                                <td align="center">{{ $row->kind->name }}</td>
                                <td align="center">{{ $row->tgl }}</td>
                                <td align="center">{{ $row->runtutanke }}</td>
                                <td>
                                <div class="btn-group">
                                    <form id="program-create-form" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($pelatih as $p)
                                        <input type="hidden" class="form-control" id="pelatih_id" name="pelatih_id" value="{{ $p->id }}" required>
                                        @endforeach
                                        <input type="hidden" class="form-control" id="id_user_pelatih" name="id_user_pelatih" value="{{ Auth::user()->id }}" required>
                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $row->user->id }}" required>
                                        <input type="hidden" class="form-control" id="permintaan_id" name="permintaan_id" value="{{ $row->permintaan->id }}" required>
                                        <input type="hidden" class="form-control" id="status" name="status" value="Berjalan" required>
                                        <div class="col-md-8">
                                            <label class="labels">Runtutan Ke?</label>
                                            <input type="number" name="runtutanke" id="runtutanke" class="form-control" required>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="labels">Tanggal Latihan</label>
                                            <input type="date" name="tgl" id="tgl" class="form-control" placeholder="Tanggal Latihan" required>
                                        </div>
                                        <label for="user_id">Pilih Rumus Latihan</label>
                                        <div class="col-md-8">
                                            <select class="form-select" aria-label="Default select example" name="kind_id" required>
                                                <option selected>-- Pilih --</option>
                                                @foreach ($rumus as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="btn-group mt-1">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-flat"
                                        onclick="event.preventDefault();
                                        document.getElementById('program-create-form').submit();">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
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
        <div class="d-flex justify-content-center">
            {{ $program->links() }}
        </div>
    </div>
    </div>
</div>
@endsection