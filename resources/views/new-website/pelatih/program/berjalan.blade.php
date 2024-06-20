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
                                <th class="text-center">Runtutan Ke</th>
                                <th class="text-center">Program Latihan</th>
                                <th class="text-center">Tanggal Latihan</th>
                                <th class="text-center">Status</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($program as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->dataPelatih->dataUser->name }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->nmrhp }}</td>
                                <td align="center">{{ $row->dataPelatih->dataUser->alamat }}</td>
                                <td align="center">{{ $row->latihan_ke }}</td>
                                <td align="center">{{ $row->dataLatihanPelatih->nama_latihan }}</td>
                                <td align="center">{{ $row->tanggal }}</td>
                                <td>
                                    <div class="btn-group" >
                                        <form id="program-update-form-{{$row->id}}" action="{{ route('program.update',$row->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select class="form-control" name="status" id="status" aria-label="Floating label select example" required>
                                                <option selected aria-required="true">{{ $row->status }}</option>
                                                <option value="Selesai">Selesai</option>
                                            </select>
                                        </form>
                                        <a href="javascript:void(0)" class="btn btn-success ml-3 rounded"
                                            onclick="event.preventDefault();
                                                document.getElementById('program-update-form-{{$row->id}}').submit();">
                                            <i class="fa fa-check" aria-hidden="true"></i>
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