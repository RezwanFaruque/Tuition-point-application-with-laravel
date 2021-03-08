@extends('layouts.adminlayout')
@section('style')
    <style type="text/css">
        .row {
            width: 100%;
        }

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Districts</h6>

                    @if (session('message'))
                        {{ session('message') }}
                    @endif

                    <a class="btn btn-primary" href="{{ route('admin.addservicedistrictview') }}">Add District</a>

                    <a class="btn btn-primary" href="{{ route('admin.serviceareaview') }}">Add Area</a>

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th>District Name</th>
                                <th>District Area</th>
                                <th>Delete District</th>
                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($alldistrict as $district)
                                <tr>
                                    <td>{{ $district->id }}</td>
                                    <td>{{ $district->district_name }}</td>
                                    <td>

                                        @foreach ($district->area as $area_names)
                                            {{ $area_names->area_name ? $area_names->area_name : 'No Area Data Exists' }}|
                                            
                                        @endforeach


                                    </td>
                                    <td>
                                        <form action="{{ route('admin.deleteservicedistrict', $district->id) }}"
                                            method="POST">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection
