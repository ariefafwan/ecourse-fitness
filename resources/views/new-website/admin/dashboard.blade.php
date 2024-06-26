@extends('new-website.admin.layout.app')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pelatih</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dt1 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total User (Costumer)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dt2 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clone fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection