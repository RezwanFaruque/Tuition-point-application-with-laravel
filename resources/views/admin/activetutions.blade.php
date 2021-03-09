@extends('layouts.adminlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Active Tutions</h6>

                    @if (session('message'))
                        {{ session('message') }}
                    @endif

                    <a class="btn btn-primary" href="{{ route('admin.addtutionsview') }}">Add Tutions</a>

                    

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Tutor Gender</th>
                                <th>Days Per Week</th>
                                <th>Salary</th>
                                <th>View Details</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($activetutions as $activetution)
                                <tr>
                                    <td>{{ $activetution->title }}</td>
                                    <td>{{ $activetution->location }}</td>
                                    <td>{{ $activetution->class }}</td>
                                    <td>{{ $activetution->subjects }}</td>
                                    <td>{{ $activetution->desire_tutor_gender }}</td>
                                    <td>{{ $activetution->days_per_week }}</td>
                                    <td>{{ $activetution->salary_range }}</td>
                                    <td>
                                        <form action=""
                                            method="POST">
                                            
                                            <button class="btn btn-danger" type="submit">Details</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action=""
                                            method="POST">
                                            
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
