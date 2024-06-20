@extends('new-website.user.layout.app')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
            
        <div class="container rounded bg-white mt-3 mb-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 py-5">
                    <div class="col-md-12">
                        <label for="">Nama Latihan</label>
                        <input type="text" name="name" id="name" value="{{ $program->dataLatihanPelatih->nama_latihan }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Oleh</label>
                        <input type="text" name="name" id="name" value="{{ $program->dataPelatih->dataUser->name }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Tanggal Latihan</label>
                        <input type="text" name="name" id="name" value="{{ $program->tanggal }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="">Runtutan Latihan Anda Ke</label>
                        <input type="text" name="name" id="name" value="{{ $program->latihan_ke }}" class="form-control" readonly>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 border-right border-left border-top border-bottom">
                    <div class="p-3 py-5">
                        <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Urutan Gerakan</th>
                                    <th class="text-center">Nama Gerakan</th>
                                    <th class="text-center">Video Gerakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latihan as $index => $row)
                                <tr align="center">
                                    <th align="center">{{ $row->urutan }}</th>
                                    <td align="left">{{ $row->nama }}</td>
                                    <td align="left">
                                        <video width="300" height="150" controls>
                                            <source src="{{ asset('storage/video/' . $row->file) }}" type="video/mp4">
                                        </video>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="btn-group mt-5 ml-3 align-items-center">
                            {{-- <a href="" class="btn btn-primary profile-button"><i class="fa fa-check" aria-hidden="true"></i> <span>Selesaikan Latihan</span></a> --}}
                            <form id="program-update-form-{{$program->id}}" action="{{ route('hasil.update',$program->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            </form>
                            <a href="javascript:void(0)" class="btn btn-success rounded"
                                onclick="event.preventDefault();
                                    document.getElementById('program-update-form-{{$program->id}}').submit();">
                                <i class="fa fa-check" aria-hidden="true"></i> <span>Selesaikan Latihan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
