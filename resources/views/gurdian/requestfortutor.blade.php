@extends('layouts.loginlayout')

@section('content')

    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="req-tutor-left-side">
                <div class="title">
                    Request For a Tutor
                </div>
                <div class="form-section">
                    <div class="container">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Full Name" type="text"
                                            name="">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="School/University"
                                            type="text" name="">
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" id="classes">
                                            <option value="" disabled selected hidden>Select Medium First</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Subject" type="text" name="">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Days Per Week" type="text"
                                            name="">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Salary Range" type="text"
                                            name="">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Contact Number" type="text"
                                            name="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">

                                        <select name="district_name" class="form-control" id="district">
                                            @foreach ($districts as $district)
                                                <option value="" disabled selected hidden>Select District</option>
                                                <option value="{{ $district->district_name }}">
                                                    {{ $district->district_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" name="area_name" id="area">

                                            <option id="area_null" value="">Choose Area First</option>

                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" id="medium">
                                            @foreach ($mediums as $medium)
                                                <option value="" disabled selected hidden>Select Medium</option>

                                                <option value="{{ $medium->medium_name }}">{{ $medium->medium_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Student Gender</option>

                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Tutor Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Aditional-Info" type="text"
                                            name="">
                                    </div>

                                    <div class="form-group">
                                        <input id="my-input" class="form-control" placeholder="Email Address" type="email"
                                            name="">
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
                    url: "/gurdian/fetch-area",
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
                    url: "/gurdian/fetch-class",
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
