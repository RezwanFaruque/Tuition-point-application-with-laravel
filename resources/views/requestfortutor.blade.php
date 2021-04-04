@extends('layouts.loginlayout')
@section('content')

<div class="row">
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="req-tutor-left-side">
            <div class="title">
                Request For a Tutor
            </div>
            @if (session('message'))
            <div style="font-weight: bolder;" class="alert alert-danger">
                {!! session('message') !!}
            </div>
            @endif
            <div class="form-section">
                <div class="container">
                    <form action="{{ route('guest.saverequestfortutors') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input id="my-input" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name" type="text"
                                    name="full_name">

                                    @error('full_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" class="form-control @error('school_university') is-invalid @enderror" placeholder="School/University"
                                    type="text" name="school_university">
                                    @error('school_university')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">

                                    <select required class="form-control" name="student_gender" id="student_gender">
                                        <option>Student Gender</option>

                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input id="my-input" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject"
                                    type="text">

                                    @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" name="day_per_week" class="form-control @error('day_per_week') is-invalid @enderror"
                                    placeholder="Days Per Week" type="number">
                                    @error('day_per_week')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" name="salary_range" class="form-control @error('salary_range') is-invalid @enderror"
                                    placeholder="Salary Range" type="text">
                                    @error('salary_range')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror"
                                    placeholder="Contact Number" type="number">

                                    @error('contact_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">

                                    <select required class="form-control" name="district" id="district">
                                        @foreach ($gdistricts as $district)
                                        <option value="" disabled selected hidden>Select District</option>
                                        <option value="{{ $district->district_name }}">
                                            {{ $district->district_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select required class="form-control" name="area" id="area">
                                            <option id="area_null" value="">Choose District First</option>

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select required class="form-control" name="medium" id="medium">
                                            @foreach ($gmediums as $gmedium)
                                            <option value="" disabled selected hidden>Select Medium</option>
                                            <option value="{{ $gmedium->medium_name }}">{{ $gmedium->medium_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">

                                        <select required class="form-control" name="class" id="classes">
                                            <option value="" disabled selected hidden>Select Medium First</option>

                                        </select>
                                    </div>

                                    

                                    <div class="form-group">

                                        <select required class="form-control" name="tutor_gender" id="tutor_gender">
                                            <option>Tutor Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control @error('aditional_info') is_invalid @enderror" placeholder="Aditional-Info" type="text"
                                        name="aditional_info">
                                        @error('aditional_info')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" type="email"
                                        name="email">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="submit-button">
                                    <button type="submit">Submit Request</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="image-section">
                <img class="img-fluid req-tutor-image-right"
                src="assets/vendor/images/request-totor/req-tutor-page-vector-image.jpg" alt="" srcset="">
            </div>
        </div>
    </div>

    @endsection

    @section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#district').on('change', function() {

                $.ajax({
                    type: "POST",
                    url: "/fetch-area",
                    data: {
                        'district_name': this.value,
                    },

                    ajaxStart: function() {
                        $('#area_null').append("<option value=''>please wait..</option>");
                    },
                    success: function(data) {
                        $('#area').empty();
                        data.forEach(element => {
                            $("#area").append("<option value='" + element.area_name +
                                "'>" + element.area_name + "</option>");
                        });
                    }
                });
            });

            $('#medium').on('change', function() {
                $.ajax({
                    type: "POST",
                    url: "/fetch-classes",
                    data: {
                        'medium_name': this.value,
                    },

                    success: function(data) {
                        $('#classes').empty();
                        data.forEach(element => {
                            $("#classes").append("<option value='" + element
                                .classes_name +
                                "'>" + element.classes_name + "</option>");
                        });

                    }
                });
            })
        })

    </script>
    @endsection
