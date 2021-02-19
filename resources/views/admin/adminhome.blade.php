@extends('layouts.adminlayout')

@section('content')

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Registered Tutors</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$alltutors}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Registered Gurdian </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$allgurdians}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Active Tutions</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$activetutions}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
