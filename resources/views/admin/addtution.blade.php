@extends('layouts.adminlayout')
@section('content')

<div class="col-lg-12">
    <!-- Select2 -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Upload Tutions Information</h6>
        </div>
        <div class="card-body">

            <form action="{{route('admin.savetutions')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Title</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" type="text">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Full Name</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" name="full_name" placeholder="Full Name" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="select2Single">Student Gender</label>

                        </div>
                        <div class="col-lg-9">
                            <select required class="select2-single form-control col-sm-8" name="student_gender" id="select2Single">
                                <option value="" hidden selected>Select Gemder</option>
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
                            <select required class="select2-single form-control col-sm-8" name="classes" id="select2Single">
                                @foreach ($classes as $class)
                                <option value="" hidden selected>Select Class</option>
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
                            <select required class="select2-single form-control col-sm-8" name="days_per_week" id="select2Single">
                                <option value="" hidden selected>Days Per Week</option>
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
                            <input class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address Ex: Dhaka Mirpur" type="text">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Phone Number</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" type="text">
                            @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Location</label>

                        </div>
                        <div class="col-lg-9">
                            <input class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Locatioin" type="text">
                            @error('location')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Desire Tutor Gender</label>

                        </div>
                        <div class="col-lg-9">
                            <select required class="select2-single form-control col-sm-8" name="desire_tutor_gender" id="select2Single">
                                <option value="" hidden selected>Select Gemder</option>
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
                            <select required class="select2-multiple form-control" name="subjects[]" multiple="multiple"
                            id="select2Multiple">

                            <option value="Bangla">Bangla</option>
                            <option value="English">English</option>
                            <option value="Math" selected>Math</option>
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
                        <input class="form-control @error('salary_range') is-invalid @enderror" name="salary_range" placeholder="Salary Range Ex. 5000-6000" type="text">
                        @error('salary_range')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label>Email</label>

                    </div>
                    <div class="col-lg-9">
                        <input class="form-control" name="email"  placeholder="Email" type="email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <button class="btn btn-primary" type="submit">Save Tution</button>
                </div>
            </div>

        </form>


    </div>
</div>

</div>


@endsection

@section('script')
<script type="text/javascript">
    $('.select2-single').select2();

        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
            placeholder: "Select a Province",
            allowClear: true
        });

        // Select2 Multiple
        $('.select2-multiple').select2();

    </script>
    @endsection
