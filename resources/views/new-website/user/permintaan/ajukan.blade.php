@extends('new-website.user.layout.app')

@section('content')


<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="container">
            <section class="light">
                @foreach ($pelatih as $row)
                    <article class="postcard dark red">
                        <img class="postcard__img" width="200px" height="250px" src="{{ asset('storage/profil/' . $row->dataUser->profile_img) }}">
                        <div class="postcard__text">
                            <h6 class="postcard__title red text-primary">{{ $row->dataUser->name }}</h6>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                <label for="">Jenis Kelamin</label> : {{ $row->dataUser->jenis_kelamin }}
                            </div>
                            <div class="postcard__preview-txt">
                                <label for="">Nomor Handphone</label> : {{ $row->dataUser->no_hp }}
                            </div>
                            <div class="postcard__preview-txt">
                                <label for="">Alamat</label> : {{ $row->dataUser->alamat }}
                            </div>
                            <form id="user-update-form-{{$row->id}}" action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id_pelatih" name="id_pelatih" value="{{ $row->id }}" required>
                                <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{ Auth::user()->id }}" required>
                                <input type="hidden" class="form-control" id="status" name="status" value="Menunggu" required>
                            </form>
                            <a href="javascript:void(0)"
                                onclick="event.preventDefault();
                                document.getElementById('user-update-form-{{$row->id}}').submit();">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                                Pilih Pelatih
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>
            </div>
        </div>
    </div>

@endsection
