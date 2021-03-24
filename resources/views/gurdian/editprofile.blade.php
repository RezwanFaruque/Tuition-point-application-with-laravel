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
                                <a href="{{route('gurdian.home')}}"> <i class="fa fa-user" aria-hidden="true"></i>
                                    DashBoard</a>

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
                                        <form action="" method="POST">
                                            <div class="row">

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="right-information">
                                                    <div class="info-right">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" value=" {{$gurdian->name}}">
                                                       
                                                    </div>
                                                    <div class="info-right">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="email" value="{{$gurdian->email}}">
                                                        
                                                    </div>

                                                    <div class="info-right">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="phone_number" value="{{$gurdian->phone_number}}">
                                                        
                                                    </div>
                                                    <div class="info-right">
                                                        <label>Area</label>
                                                        <input type="text" class="form-control" name="area" value="{{$gurdian->area}}">
                                                        
                                                    </div>
                                                    
                                                    <div class="info-right">
                                                        <label>Gender</label>
                                                        <input type="text" class="form-control" name="gender" value="{{$gurdian->gender}}">
                                                        
                                                    </div>
                                                    <div class="info-right">
                                                        <label>Salary Range</label>
                                                        <input type="text" class="form-control" name="salary_range" value="{{$gurdian->salary_range}}">
                                                        
                                                    </div>
                                                    
                                                </div>

                                                <button type="submit" class="update-gurdian"> Update </button>
                                            </div>
                                        </div>
                                        </form>
                                        
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

