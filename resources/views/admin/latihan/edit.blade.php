@extends('admin.app')

@section('body')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Latihan</h1>

        <form action="{{ route('latihan.update',$latihan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-md-6 mb-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="prodi">Nama Latihan</label>
                            <input type="text" name="name" value="{{ $latihan->name }}" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Banyak</label>
                            <input type="number" name="banyak" value="{{ $latihan->banyak }}" class="form-control" id="banyak" required>
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