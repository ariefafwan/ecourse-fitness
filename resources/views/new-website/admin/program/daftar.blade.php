@extends('new-website.admin.layout.app')

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
                                <th class="text-center">Rumus Latihan</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Runtutan Ke</th>
                                <th class="text-center">Pelatih</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->user->name }}</td>
                                <td align="center">{{ $row->user->nmrhp }}</td>
                                <td align="center">{{ $row->user->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('fokus',$row->permintaan_id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td align="center">{{ $row->kind->name }}</td>
                                <td align="center">{{ $row->tgl }}</td>
                                <td align="center">{{ $row->runtutanke }}</td>
                                <td align="center">{{ $row->pelatih->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection