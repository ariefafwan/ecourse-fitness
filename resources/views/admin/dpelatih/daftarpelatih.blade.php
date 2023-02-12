@extends('admin.app')

@section('body')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar Pelatih</h1>
    <div class="row">
    <div class="container">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="category-table" class="table table-dark table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Sebagai</th>
                                <th class="text-center">Nomor Handphone</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($pelatih as $index => $row)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td align="center">
                                    <div class="btn-group" >
                                        <form id="user-update-form-{{$row->id}}" action="{{ route('daftaruser.update',$row->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')                                            
                                            <select class="form-select" name="role_id" id="role_id" aria-label="Floating label select example" required>
                                                <option selected aria-required="true">{{ $row->role->name }}</option>
                                                    @foreach($role as $div)
                                                    <option value="{{ $div->id }}">{{ $div->name }}</option>
                                                    @endforeach
                                            </select>
                                        </form>
                                        <a href="javascript:void(0)" class="btn btn-success ml-3"
                                            onclick="event.preventDefault();
                                                document.getElementById('user-update-form-{{$row->id}}').submit();">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </a>
                                    </div>    
                                </td>
                                <td>{{ $row->nmrhp }}</td>
                                <td align="center">
                                    <div class="btn-group">
                                        {{-- <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a> --}}
                                        <a href="{{ route('daftarpelatih.edit',$row->id) }}" class="btn btn-warning btn-flat mr-2"><i class="fa fa-eye" aria-hidden="true"></i></a>
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