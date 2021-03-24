@extends('layouts.authuserlayout')

@section('content')
    <div class="tutor-profile-section">
        <div class="basic-information">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="bs-info">
                            <div class="bs-info-name">
                                {{-- <div class="left">
                                    <img src="{{assets('')}}" alt="" srcset="">
                                </div> --}}
                                <div class="right">
                                    <div class="info name">
                                        {{$gurdian->name}}
                                    </div>
                                    <div class="info mobile">
                                        {{$gurdian->phone_number}}
                                    </div>
                                    <div class="info gmail">
                                        {{$gurdian->email}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="bs-info-edt-sgnout">
                            <div class="btn-edit-profile">
                                <a href="{{route('gurdian.editprofile',$gurdian->user_id)}}"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Edit Profile</a>

                            </div>
                            <div class="btn-signout">
                                <form action="{{route('logout')}}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="logout-frm-tutor-profile" type="submit"><i class="fa fa-sign-out"
                                            aria-hidden="true"></i>
                                        Logout</button>
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
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Tution Request &
                                        History</a>
                                </li> --}}

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">

                                    <!-- Profile information goes here -->
                                    <div class="container">
                                        <div class="row">

                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="right-information">
                                                    <div class="info-right" style="display: flex;">
                                                        <label style="width: 50%">Name</label>
                                                        <div style="text-align: left; width: 50%;">
                                                            {{$gurdian->name}}
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="info-right" style="display: flex;">
                                                        <label style="width: 50%">Area</label>
                                                        <div style="width: 50%; text-align: left;">
                                                             {{$gurdian->area}}
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    <div class="info-right" style="display: flex;">
                                                        <label style="width: 50%">Gender</label>
                                                        <div style="width: 50%;text-align: left;">
                                                            {{$gurdian->gender}}
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="info-right" style="display: flex;">
                                                        <label style="width: 50%">Salary Range</label>
                                                        <div style="width: 50%;text-align: left;">
                                                            {{$gurdian->salary_range}}
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               {{--  <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <!-- Tutor request and history goes here -->
                                    <div class="tutor-request-history">
                                        <div class="container">
                                            <div class="row">

                                                <!-- Active tutions sections -->
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="active-tutions">
                                                        <div class="title-button">
                                                            Hired Tutor
                                                        </div>
                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
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
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion accept" href="#">Accept</a>
                                                                </div>
                                                                <div class="details">
                                                                    <a class="details-buttion ignore" href="#">Ignore</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion accept" href="#">Accept</a>
                                                                </div>
                                                                <div class="details">
                                                                    <a class="details-buttion ignore" href="#">Ignore</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion accept" href="#">Accept</a>
                                                                </div>
                                                                <div class="details">
                                                                    <a class="details-buttion ignore" href="#">Ignore</a>
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
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card rejected">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="active-tution-card rejected">
                                                            <div class="left d-flex">
                                                                <div class="image">
                                                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt=""
                                                                        srcset="">
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
                                                                    <a class="details-buttion" href="#">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
