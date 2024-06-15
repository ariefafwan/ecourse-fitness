@extends('new-website.pelatih.layout.app')

@section('content')

<div class="container-fluid">
    <div class="row">
    <div class="container">
        <div class="box-footer mb-3">
            <a href="{{ route('rumus.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>  CREATE NEW</a>
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama Rumus</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($rumus as $index => $row)
                            <tr align="center">
                                <th>{{ $loop->iteration }}</th>
                                <td align="left">{{ $row->nama_latihan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button id="buttonmodal" data-nama="{{ $row->nama_latihan }}" data-id="{{ $row->id }}" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary btn-flat rounded mr-2"><i class="fa fa-pen" aria-hidden="true"></i></button>
                                        <a href="{{ route('rumus.edit',$row->id) }}" class="btn btn-warning btn-flat rounded mr-2"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <hr>
                                        <a href="javascript:void(0)" class="btn btn-danger rounded btn-flat"
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
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('include')
    @include('new-website.pelatih.rumus.edit')
@endpush

@push('js')
    <script>
        $('body').on('click', '#buttonmodal', function() {
            id = $(this).attr('data-id');
            nama_latihan = $(this).attr('data-nama');
            $("#edit_nama_latihan").val(nama_latihan);
            $("#editform").attr("action", `http://ecourse-fitness.test/pelatih/rumus/${id}`);
        });

        $('#staticBackdrop').on('hidden.bs.modal', function (event) {
            $("#edit_nama").val('');
            $("#editform").attr("action", ``);
        });
    </script>
@endpush