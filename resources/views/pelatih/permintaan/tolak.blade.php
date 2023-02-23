@extends('pelatih.app')

@section('pbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Permintaan Program Latihan Di Tolak</h1>
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
                                <th class="text-center">Aksi</th>
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
                                {{-- <td align="center">{{ $row->status }}</td> --}}
                                <td align="center">
                                    <div class="btn-group" >
                                        <form id="user-update-form-{{$row->id}}" action="{{ route('terima.update',$row->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select class="form-select" name="status" id="status" aria-label="Floating label select example" required>
                                                <option selected aria-required="true">{{ $row->status }}</option>
                                                <option value="Terima">Terima</option>
                                                <option value="Tolak">Tolak</option>
                                            </select>
                                        </form>
                                        <a href="javascript:void(0)" class="btn btn-success ml-3"
                                            onclick="event.preventDefault();
                                                document.getElementById('user-update-form-{{$row->id}}').submit();">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </a>
                                    </div>    
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('rumus.edit',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        
                                        <a href="javascript:void(0)" class="btn btn-danger btn-flat"
                                            onclick="event.preventDefault();
                                                document.getElementById('rumus-delete-form-{{$row->id}}').submit();">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <form id="rumus-delete-form-{{$row->id}}" action="{{ route('rumus.destroy',$row->id) }}" method="POST" style="display: none;">
                                            @csrf 
                                            @method('DELETE')
                                        </form>
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