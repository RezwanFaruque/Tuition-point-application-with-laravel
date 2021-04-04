@extends('layouts.loginlayout')
@section('content')
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="middle-about-us">
                <div class="about-us-section-card">
                    <div class="title">
                        What is Meettutor?
                    </div>
                    <div class="body">
                        Our technology is the best way for students to connect with tutors that are suited for their exact
                        needs.
                        Students answer questions about their needs,
                        and we match their answers with tutors instantly.
                        Then, students can read reviews, message,
                        or call tutors and be able to make an educated decision when their ready to hire.
                    </div>
                </div>

            </div>

            <div class="middle-about-us">
                <div class="about-us-section-card">
                    <div class="title">
                        Effortlessly connect with new students
                    </div>
                    <div class="body">
                        Our technology is the best way for students to connect with tutors that are suited for their exact
                        needs.
                        Students answer questions about their needs,
                        and we match their answers with tutors instantly.
                        Then, students can read reviews, message,
                        or call tutors and be able to make an educated decision when their ready to hire.
                    </div>
                </div>

            </div>

            <div class="right-side">



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

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="meet-the-team-section" style="margin-bottom: 20px">
                <div class="title">
                    Meet The Team
                </div>
                <div class="team-member-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="team-member-card">
                                    <div class="left-image">
                                        <img src="{{asset('assets/vendor/images/team/mehadi.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="right-text">
                                        <div class="name">
                                            MD Mehadi Hasan Razu
                                        </div>
                                        <div class="designation">
                                            CEO, MeetTutor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="team-member-card">
                                    <div class="left-image">
                                        <img src="{{asset('assets/vendor/images/team/rezvi.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="right-text">
                                        <div class="name">
                                            Mahbub Rezvi
                                        </div>
                                        <div class="designation">
                                            CTO, MeetTutor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="team-member-card">
                                    <div class="left-image">
                                        <img src="{{asset('assets/vendor/images/team/rezwanfaruque.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="right-text">
                                        <div class="name">
                                           Rezwan Faruque
                                        </div>
                                        <div class="designation">
                                            WebSite & Technical, MeetTutor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
