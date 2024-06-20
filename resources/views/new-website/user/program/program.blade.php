@extends('new-website.user.layout.app')

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
                                <th class="text-center">Nama Pelatih</th>
                                <th class="text-center">Nomor HP Pelatih</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Tanggal Latihan</th>
                                <th class="text-center">Runtutan Latihan Ke</th>
                                <th class="text-center">Lakukan Latihan</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->dataPelatih->dataUser->name }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->no_hp }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->alamat }}</td>
                                <td align="center">{{ $row->tanggal }}</td>
                                <td align="center">{{ $row->latihan_ke }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('hasil.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
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
    </div>
    </div>
</div>
@endsection