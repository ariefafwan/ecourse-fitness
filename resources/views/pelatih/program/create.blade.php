@extends('pelatih.app')

@section('pbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Berikan Program Latihan Kepada Costumer</h1>
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
                                <th class="text-center">Jumlah Program</th>
                                <th class="text-center">Berikan Rumus & Tanggal Latihan</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($permintaan as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="center">{{ $row->user->name }}</td>
                                <td align="center">{{ $row->user->nmrhp }}</td>
                                <td align="center">{{ $row->user->alamat }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('terima.show',$row->id) }}" class="btn btn-warning btn-flat mr-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                                <td align="center">{{ $program }}</td>
                                <td>
                                <div class="btn-group">
                                    <form id="program-create-form" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($pelatih as $p)
                                        <input type="hidden" class="form-control" id="pelatih_id" name="pelatih_id" value="{{ $p->id }}" required>
                                        @endforeach
                                        <input type="hidden" class="form-control" id="id_user_pelatih" name="id_user_pelatih" value="{{ Auth::user()->id }}" required>
                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $row->user->id }}" required>
                                        <input type="hidden" class="form-control" id="permintaan_id" name="permintaan_id" value="{{ $row->id }}" required>
                                        <input type="hidden" class="form-control" id="status" name="status" value="Berjalan" required>
                                        <input type="hidden" class="form-control" id="runtutanke" name="runtutanke" value="1" required>
                                        <div class="col-md-12">
                                            <label class="labels">Tanggal Latihan</label>
                                            <input type="date" name="tgl" id="tgl" class="form-control" placeholder="Tanggal Latihan" required>
                                        </div>
                
                                        <div class="col-md-12 mt-2">
                                            <label for="user_id">Pilih Rumus Latihan</label>
                                            <select class="form-select" aria-label="Default select example" name="kind_id" required>
                                                <option selected>-- Pilih --</option>
                                                @foreach ($rumus as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                    {{-- <a href="javascript:void(0)" class="btn btn-primary btn-flat"
                                        onclick="event.preventDefault();
                                        document.getElementById('program-create-form-{{$row->id}}').submit();">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a> --}}
                                </div>
                                <div class="btn-group">
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