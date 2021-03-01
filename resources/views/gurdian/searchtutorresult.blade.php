@extends('layouts.loginlayout')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 remove-margin">
            <!-- Filter options in here -->
            <div class="filter-tutors">
                <div class="title">
                    FILTER TUTORS
                </div>
                <form action="{{ route('gurdian.searchtutor') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="filter-options">
                        <div class="form-group">
                            <select class="form-control" name="district" id="district">
                                @foreach ($districts as $district)
                                    <option value="" selected hidden>District</option>
                                    <option value="{{ $district->district_name }}">{{ $district->district_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="area" id="area">
                                <option value="" selected hidden>Area</option>
                                <option value="">Choose District First</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="medium" id="medium">
                                <option value="" selected hidden>Mediums</option>
                                @foreach ($mediums as $medium)
                                    <option value="{{ $medium->medium_name }}">{{ $medium->medium_name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="subject" id="subject">
                                <option value="" selected hidden>Subjects</option>
                                <option value="english">English</option>
                                <option value="bangla">Bangla</option>
                                <option value="math">Math</option>
                                <option value="physics">Physics</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender" id="gender">
                                <option value="" selected hidden>Tutor Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="salary" id="salary">
                                <option value="" selected hidden>Salary Range</option>
                                <option value="1000-2000">1000-2000</option>
                                <option value="2000-3000">2000-3000</option>
                                <option value="3000-4000">3000-4000</option>
                                <option value="4000-5000">4000-5000</option>
                                <option value="5000-6000">5000-6000</option>
                                <option value="6000-7000">6000-7000</option>
                                <option value="7000-8000">7000-8000</option>
                                <option value="9000-10000">8000-9000</option>
                                <option value="10000-11000">9000-10000</option>
                                <option value="11000-12000">10000-11000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="days_per_week" id="days_per_week">
                                <option value="" selected hidden>Days Per Week</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <button type="submit" class="request-tutor-tutorlist-page">Search Tutor <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12">
            <div class="right-side">
                <!-- Fetchig tutor list in here -->
                <div class="tutor-search-result">
                    <div class="title-lk-button">
                        <button class="title-button">TUTOR SEARCH RESULT</button>
                    </div>
                    <hr>
                    <div class="result-body">
                        <div class="container">
                            <div class="row">
                                @foreach ($searchtutorresult as $searchtutor)
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="result-card">
                                            <div class="header">
                                                <span class="badge badge-secondary">New</span>
                                            </div>
                                            <div class="body">
                                                <div class="left">
                                                    <div class="profile-image">
                                                        <img src="{{ asset($searchtutor->getuser->profile_image) }}"
                                                            alt="" srcset="">
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="name">
                                                        {{ $searchtutor->name }}
                                                    </div>
                                                    <div class="subject">
                                                        {{ $searchtutor->subject }}
                                                    </div>
                                                    <div class="university">
                                                        {{ $searchtutor->university_or_collage }}
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <a class="tutorlist-profiile-details" href="tutor-profilepage.html">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="pagination-sections">
                                        {{ $searchtutorresult->links() }}
                                    </div>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="request-tutor-section">
                                        <div class="text">
                                            <div class="title">
                                                Did not find a desirable tutor?
                                            </div>
                                            <div class="subtitle">
                                                Click the 'Request a Tutor' Button to let us know your requirements.
                                            </div>
                                            <div class="subtitle">
                                                We will send you more matched Tutor Profiles in a short time.
                                            </div>
                                        </div>
                                        <div class="button-find">
                                            <div class="request-tutor-page">
                                                <a class="req-tutor" href="">Request a Tutor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="social-fix-position">
                    <div class="social-section">
                        <div class="logo">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <a href="#">Facebook</a>
                        </div>
                    </div>

                    <div class="social-section">
                        <div class="logo">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <a href="#">Instagram</a>
                        </div>
                    </div>

                    <div class="social-section">
                        <div class="logo">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <a href="#">Tweeter</a>
                        </div>
                    </div>
                </div>
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

            // $('#medium').on('change', function() {
            //     $.ajax({
            //         type: "POST",
            //         url: "/gurdian/fetch-class",
            //         data: {
            //             'medium_name': this.value,
            //         },

            //         success: function(data) {
            //             $('#classes').empty();
            //             data.forEach(element => {
            //                 $("#classes").append("<option value='" + element
            //                     .classes_name +
            //                     "'>" + element.classes_name + "</option>");
            //             });

            //         }
            //     });
            // })
        })

    </script>
@endsection
