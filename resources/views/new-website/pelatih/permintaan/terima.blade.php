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
                                <th class="text-center">Status</th>
                                <th class="text-center">Program</th>
                                <th class="text-center">Berikan Program</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($permintaan as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->dataUser->name }}</td>
                                <td align="center">{{ $row->dataUser->no_hp }}</td>
                                <td align="center">{{ $row->dataUser->alamat }}</td>
                                <td align="center">
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('terima.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td align="center">{{ $row->status }}</td>
                                <td align="center">{{ $row->dataProgramLatihan->count() }}</td>
                                <td align="center">
                                    <div class="btn-group">
                                        <a href="{{ route('tambahprogram', $row->id_user) }}" class="btn btn-primary btn-flat mr-2">
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
    </div>
    </div>
</div>
@endsection