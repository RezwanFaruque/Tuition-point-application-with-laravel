@extends('layouts.adminlayout')

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

                <a class="btn btn-primary" href="">All Premium Tutors</a>

                {{-- <a class="btn btn-primary" href="">Add Area</a> --}}

            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Last Four Digit of Payment Number</th>
                            <th>Screen Shot</th>
                            <th>Make Premium Tutor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($req_prem_tutors as $reqpremtutor)

                            <tr>
                                <td>{{$reqpremtutor->name}}</td>
                                <td>{{$reqpremtutor->phone_number}}</td>
                                <td>{{$reqpremtutor->email}}</td>
                                <td>{{$reqpremtutor->last_four_digit_bkash_number}}</td>
                                <td><img style="width: 80px;height: 50px; object-fit: contain;" src="{{asset($reqpremtutor->payment_success_image_url)}}" alt="" srcset=""></td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('admin.viewrequestpremiumtutor',$reqpremtutor->id)}}">Details</a>
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