@extends('layouts.loginlayout')
@section('content')

    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="req-tutor-left-side">
                <div class="title">
                    Request For a Tutor
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
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
                                        <input id="my-input" class="form-control" placeholder="Full Name" type="text"
                                            name="full_name">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="School/University"
                                            type="text" name="school_university">
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="class" id="classes">
                                            <option value="" disabled selected hidden>Select Medium First</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" name="subject" class="form-control" placeholder="Subject"
                                            type="text">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" name="day_per_week" class="form-control"
                                            placeholder="Days Per Week" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" name="salary_range" class="form-control"
                                            placeholder="Salary Range" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" name="contact_number" class="form-control"
                                            placeholder="Contact Number" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">

                                        <select class="form-control" name="district" id="district">
                                            @foreach ($gdistricts as $district)
                                                <option value="" disabled selected hidden>Select District</option>
                                                <option value="{{ $district->district_name }}">
                                                    {{ $district->district_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="area" id="area">
                                            <option id="area_null" value="">Choose District First</option>

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="medium" id="medium">
                                            @foreach ($gmediums as $gmedium)
                                                <option value="" disabled selected hidden>Select Medium</option>
                                                <option value="{{ $gmedium->medium_name }}">{{ $gmedium->medium_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="student_gender" id="exampleFormControlSelect1">
                                            <option>Student Gender</option>

                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="tutor_gender" id="exampleFormControlSelect1">
                                            <option>Tutor Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Aditional-Info" type="text"
                                            name="aditional_info">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Email Address" type="email"
                                            name="email">
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
