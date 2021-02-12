@extends('layouts.guestlayout')
@section('content')
    {{-- welcome page bannar searchtutor section --}}
    <div class="search-for-tutor wow slideInLeft">
        <div class="info">
            <div class="title">
                SEARCH FOR TUTORS
            </div>
            <div class="sub-title">
                Find the best tutor in your area
            </div>

            <div class="body-with-form">
                <form action="" method="POST">
                    <div class="body">
                        <div class="flex-part">
                            <div class="left-side site">
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>District</option>
                                        <option>Rajshahi</option>
                                        <option>Dhaka</option>
                                        <option>Khulna</option>
                                        <option>Rangpur</option>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Medium</option>
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>IELTS</option>

                                    </select>
                                </div>
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Class</option>
                                        <option>Class 1</option>
                                        <option>Class 2</option>
                                        <option>Class 3</option>
                                        <option>Class 4</option>
                                        <option>Class 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="right-side site">
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Area</option>
                                        <option>Mirpur</option>
                                        <option>Badda</option>
                                        <option>Gulshan</option>
                                        <option>Baridhara</option>

                                    </select>
                                </div>

                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>

                                <button type="submit" class="request-tutor-indexpage">
                                    Search Tutor</button>

                            </div>
                        </div>
                    </div>

                    <div class="align-center">
                        <a class="view-all-tutors-button-index" href="tutorlist.html">View All Tutor
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>

@endsection
