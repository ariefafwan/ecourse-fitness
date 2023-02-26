@extends('pelatih.app')

@section('pbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Permintaan Program Latihan Diterima</h1>
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
                                <th class="text-center">Status</th>
                                <th class="text-center">Program</th>
                                <th class="text-center">Fokus Latihan</th>
                                <th class="text-center">Berikan Program</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($permintaan as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->user->name }}</td>
                                <td align="center">{{ $row->user->nmrhp }}</td>
                                <td align="center">{{ $row->user->alamat }}</td>
                                <td align="center">{{ $row->aspek->fokus }}</td>
                                <td align="center">{{ $row->status }}</td>
                                <td align="center">{{ $program }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('terima.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('program.create') }}" class="btn btn-primary btn-flat mr-2">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
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
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection