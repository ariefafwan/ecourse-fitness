@extends('admin.app')

@section('body')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Latihan</h1>

        <form action="{{ route('latihan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-md-6 mb-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="latihan">Nama Latihan</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="banyak">Banyak</label>
                            <input type="number" name="banyak" class="form-control" id="banyak" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                </div>
            </div>

        </form>
</div>
@endsection