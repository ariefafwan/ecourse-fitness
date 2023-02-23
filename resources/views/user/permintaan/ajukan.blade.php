@extends('user.app')

@section('userbody')


<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pilih Pelatih Anda Untuk Ajukan Program Latihan</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="container">
            {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/profil/{{ $row->profile_img }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}
            <section class="light">
                @foreach ($pelatih as $row)
                    <article class="postcard dark red">
                        <img class="postcard__img" style="width: 20%" src="/img/profil/{{ $row->profile_img }}" alt="Card image cap">
                        <div class="postcard__text">
                            <h6 class="postcard__title red text-primary">{{ $row->name }}</h6>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                <label for="">Jenis Kelamin</label> : {{ $row->jeniskl }}
                            </div>
                            <div class="postcard__preview-txt">
                                <label for="">Nomor Handphone</label> : {{ $row->nmrhp }}
                            </div>
                            <div class="postcard__preview-txt">
                                <label for="">Alamat</label> : {{ $row->alamat }}
                            </div>
                            {{-- <a href="{{ route('permintaan.create') }}"><i class="fa fa-bookmark" aria-hidden="true"></i> Order Sekarang</a> --}}
                            <form id="user-update-form-{{$row->id}}" action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="pelatih_id" name="pelatih_id" value="{{ $row->id }}" required>
                                @foreach ($aspek as $as)
                                <input type="hidden" class="form-control" id="aspek_id" name="aspek_id" value="{{ $as->id }}" required>
                                @endforeach
                                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" required>
                                <input type="hidden" class="form-control" id="status" name="status" value="Pengajuan" required>
                            </form>
                            <a href="javascript:void(0)"
                                onclick="event.preventDefault();
                                document.getElementById('user-update-form-{{$row->id}}').submit();">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                                Order Sekarang
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>
            </div>
        </div>
    </div>

@endsection
