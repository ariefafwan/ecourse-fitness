@extends('pelatih.app')

@section('pbody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Pogram</h1>

        <form action="{{ route('terima.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-md-6 mb-2">
                <div class="box box-primary">
                    <div class="box-body">
                        
                        <div class="col-md-12">
                            <label class="labels">Tanggal Latihan</label>
                            <input type="date" name="tgl" id="tgl" class="form-control" value="{{ $program->tgl }}" placeholder="Tanggal Latihan" required>
                        </div>

                        <input type="hidden" name="status" value="Berjalan" class="form-control" id="status" required>

                        <div class="col-md-12 mt-2">
                            <label for="user_id">Pilih Rumus Latihan</label>
                            <select class="form-select" aria-label="Default select example" name="kind_id" required>
                                <option selected>-- Pilih --</option>
                                @foreach ($rumus as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                </div>

            </div>

        </form>
</div>
@endsection