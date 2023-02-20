@extends('pelatih.app')

@section('pbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Rumus</h1>

        <form action="{{ route('rumus.update',$rumus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-md-6 mb-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="prodi">Nama Rumus</label>
                            <input type="text" name="name" value="{{ $rumus->name }}" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="user_id">Pilih Latihan 1</label>
                            <select class="form-select" aria-label="Default select example" name="latihan1_id" required>
                                <option selected>-- Pilih --</option>
                                @foreach ($latihan as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-flat">Edit</button>
                </div>
            </div>

        </form>
</div>
@endsection