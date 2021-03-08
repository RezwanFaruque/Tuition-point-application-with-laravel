@extends('layouts.authuserlayout')

@section('content')

    @foreach ($users as $user)

        <div class="tutor-profile-section">
            <div class="basic-information">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="bs-info">
                                <div class="bs-info-name">
                                    <div class="left">
                                        <img src="{{asset($user->profile_image)}}" alt="" srcset="">
                                        
                                    </div>
                                    <div class="right">
                                        <div class="info name">
                                            {{$user->name}}
                                        </div>
                                        <div class="info mobile">
                                            {{$user->phone_number}}
                                        </div>
                                        <div class="info gmail">
                                            {{$user->email}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="bs-info-edt-sgnout">
                                <div class="btn-edit-profile">
                                    <a href="{{ route('tutor.editprofile', $user->id) }}"> <i class="fa fa-user"
                                            aria-hidden="true"></i>
                                        Edit Profile</a>

                                </div>
                                <div class="btn-signout">
                                    <form action="{{route('logout')}}" method="POST">
                                        {{ csrf_field() }}
                                        <Button class="logout-frm-tutor-profile" type="submit"><i class="fa fa-sign-out"
                                                aria-hidden="true"></i>
                                            Logout</Button:submit>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="details-information">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="profile-details-information">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Tution Request &
                                            History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Become A Premium Tutor</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">

                                        <!-- Profile information goes here -->
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="left-informations">
                                                        <div class="info-left">
                                                            Name
                                                        </div>
                                                        <div class="info-left">
                                                            School/Collage
                                                        </div>
                                                        <div class="info-left">
                                                            Area
                                                        </div>
                                                        <div class="info-left">
                                                            Subject
                                                        </div>
                                                        <div class="info-left">
                                                            Medium
                                                        </div>
                                                        <div class="info-left">
                                                            Day per week
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-4 col-sm-12">
                                                    <div class="right-information">
                                                        <div class="info-right">
                                                            {{ $user->tutorinfo->name }}
                                                        </div>
                                                        <div class="info-right">
                                                            {{$user->tutorinfo->university_or_collage}}
                                                        </div>
                                                        <div class="info-right">
                                                            {{$user->tutorinfo->area}}
                                                        </div>
                                                        <div class="info-right">
                                                            {{$user->tutorinfo->subject}}
                                                        </div>
                                                        <div class="info-right">
                                                            {{$user->tutorinfo->medium}}
                                                        </div>
                                                        <div class="info-right">
                                                            {{$user->tutorinfo->days_per_week}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">

                                        <!-- Tutor request and history goes here -->
                                        <div class="tutor-request-history">
                                            <div class="container">
                                                <div class="row">

                                                    <!-- Active tutions sections -->
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="active-tutions">
                                                            <div class="title-button">
                                                                Active Tutions
                                                            </div>
                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Pending tutions sections -->
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="pending-request-tutions active-tutions">
                                                            <div class="title-button">
                                                                Pending Request
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Salary 5000Tk
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion accept"
                                                                            href="#">Accept</a>
                                                                    </div>
                                                                    <div class="details">
                                                                        <a class="details-buttion ignore"
                                                                            href="#">Ignore</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Salary 5000Tk
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion accept"
                                                                            href="#">Accept</a>
                                                                    </div>
                                                                    <div class="details">
                                                                        <a class="details-buttion ignore"
                                                                            href="#">Ignore</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Salary 5000Tk
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion accept"
                                                                            href="#">Accept</a>
                                                                    </div>
                                                                    <div class="details">
                                                                        <a class="details-buttion ignore"
                                                                            href="#">Ignore</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Rejected tutions sections -->
                                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="reject-tutions active-tutions">
                                                            <div class="title-button">
                                                                Rejected Request
                                                            </div>

                                                            <div class="active-tution-card rejected">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card rejected">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="active-tution-card rejected">
                                                                <div class="left d-flex">
                                                                    <div class="image">
                                                                        <img src="assets/vendor/images/tutorlist/me.jpg"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <div class="info-inf name">
                                                                            Rezwan Faruqeu
                                                                        </div>
                                                                        <div class="info-inf medium">
                                                                            Bangla Medium
                                                                        </div>
                                                                        <div class="info-inf location">
                                                                            Badda Gulshan
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="right">
                                                                    <div class="details">
                                                                        <a class="details-buttion" href="#">View Details</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection
