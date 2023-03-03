@extends('user.app')

@section('userbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">{{ $page }}</h1>
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
                                <th class="text-center">Nomor Handphone Program</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Tanggal Latihan</th>
                                <th class="text-center">Runtutan Latihan Ke</th>
                                <th class="text-center">Lihat Detail Latihan</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->pelatih->name }}</td>
                                <td align="center">{{ $row->pelatih->nmrhp }}</td>
                                <td align="center">{{ $row->pelatih->alamat }}</td>
                                <td align="center">{{ $row->tgl }}</td>
                                <td align="center">{{ $row->runtutanke }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('hasil.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
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