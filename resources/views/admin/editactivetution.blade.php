@extends('layouts.adminlayout')
@section('style')
    <style type="text/css">

    </style>
@endsection
@section('content')

    <div class="col-lg-12">
        <!-- Select2 -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Upload Tutions Information</h6>
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </div>
            <div class="card-body">

                <form action="{{ route('admin.updatetutions', $tutor->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Title</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" name="title" value="{{ $tutor->title }}" placeholder="Title"
                                    type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Full Name</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->full_name }}" name="full_name"
                                    placeholder="Full Name" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="select2Single">Student Gender</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="select2-single form-control col-sm-8" name="student_gender"
                                    id="select2Single">
                                    <option value="{{ $tutor->student_gender }}" hidden selected>
                                        {{ $tutor->student_gender }}</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="select2Single">Classes</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="select2-single form-control col-sm-8" name="classes" id="select2Single">
                                    @foreach ($classes as $class)
                                        <option value="{{ $tutor->class }}" hidden selected>{{ $tutor->class }}</option>
                                        <option value="{{ $class->classes_name }}">{{ $class->classes_name }}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="select2Single">Days Per Week</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="select2-single form-control col-sm-8" name="days_per_week"
                                    id="select2Single">
                                    <option value="{{ $tutor->days_per_week }}" hidden selected>
                                        {{ $tutor->days_per_week }}</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Address</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->address }}" name="address"
                                    placeholder="Address Ex: Dhaka Mirpur" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Phone Number</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->phone_number }}" name="phone_number"
                                    placeholder="Phone Number" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Location</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->location }}" name="location"
                                    placeholder="Locatioin" type="text">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Desire Tutor Gender</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="select2-single form-control col-sm-8" name="desire_tutor_gender"
                                    id="select2Single">
                                    <option value="{{ $tutor->desire_tutor_gender }}" hidden selected>
                                        {{ $tutor->desire_tutor_gender }}</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Subjects</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="select2-multiple form-control" name="subjects[]" multiple="multiple"
                                    id="select2Multiple">

                                    @php
                                        $selected_subject = explode(',', $tutor->subjects);
                                        
                                    @endphp
                                    <option value="Bangla">Bangla</option>
                                    <option value="English">English</option>
                                    @foreach ($selected_subject as $item)
                                        <option value="{{ $item }}" selected>{{ $item }}</option>
                                    @endforeach
                                    <option value="Math">Math</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Higher Math">Higher Math</option>
                                    <option value="ICT">ICT</option>
                                    <option value="IELTS">IELTS</option>


                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Salary Range</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->salary_range }}" name="salary_range"
                                    placeholder="Salary Range Ex. 5000-6000" type="text">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Email</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control" value="{{ $tutor->email }}" name="email" placeholder="Email"
                                    type="email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-9">
                            <button class="btn btn-primary" type="submit">Update Tution</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>

    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>

                            <th>Name</th>
                            <th>University/Collage</th>
                            <th>Mobile Number</th>
                            <th>Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applied_tutor as $tutor)
                            <tr data-id="{{ $tutor->id }}" class="tutor-tr" data-toggle="modal"
                                data-target="#exampleModal">
                                <td>{{ $tutor->name }}</td>
                                <td>{{ $tutor->university }}</td>
                                <td>{{ $tutor->phone_number }}</td>
                                <td>{{ $tutor->area }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">
        $('.select2-single').select2();

        $('#dataTable').DataTable(); // ID From dataTable 

        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
            placeholder: "Select a Province",
            allowClear: true
        });

        // Select2 Multiple
        $('.select2-multiple').select2();

    </script>
@endsection
