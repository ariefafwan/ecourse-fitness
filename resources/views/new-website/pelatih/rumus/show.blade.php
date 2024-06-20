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
                                    <th class="text-center">Urutan Gerakan</th>
                                    <th class="text-center">Nama Gerakan</th>
                                    <th class="text-center">Video Gerakan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latihanDetail as $index => $row)
                                <tr align="center">
                                    <th align="center">{{ $row->urutan }}</th>
                                    <td align="left">{{ $row->nama }}</td>
                                    <td align="left">
                                        <video width="300" height="150" controls>
                                            <source src="{{ asset('storage/video/' . $row->file) }}" type="video/mp4">
                                        </video>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button id="buttonmodal" data-urutan="{{ $row->urutan }}" data-nama="{{ $row->nama }}" data-id="{{ $row->id }}" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary btn-flat rounded mr-2"><i class="fa fa-pen" aria-hidden="true"></i></button>
                                            <hr>
                                            <a href="javascript:void(0)" class="btn rounded btn-danger btn-flat"
                                                onclick="event.preventDefault();
                                                    document.getElementById('rumus-detail-delete-form-{{$row->id}}').submit();">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <form id="rumus-detail-delete-form-{{$row->id}}" action="{{ route('detailrumus.delete', $row->id) }}" method="POST" style="display: none;">
                                                @csrf 
                                                @method('DELETE')
                                            </form>
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

@push('include')
    @include('new-website.pelatih.rumus.editdetail')
@endpush

@push('js')
    <script>
        $('body').on('click', '#buttonmodal', function() {
            id = $(this).attr('data-id');
            nama = $(this).attr('data-nama');
            urutan = $(this).attr('data-urutan');
            $("#edit_nama").val(nama);
            $("#edit_urutan").val(urutan);
            $("#editform").attr("action", `http://ecourse-fitness.test/pelatih/update_detail_rumus/${id}`);
        });

        $('#staticBackdrop').on('hidden.bs.modal', function (event) {
            $("#edit_nama").val('');
            $("#edit_urutan").val('');
            $("#editform").attr("action", ``);
        });
    </script>
@endpush