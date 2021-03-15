@extends('layouts.authuserlayout')
@section('content')
    <div class="tutor-profile-section">
        <div class="basic-information">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="bs-info">
                            <div class="bs-info-name">
                                <div class="left">
                                    <img src="{{asset($getuser->profile_image)}}" alt="" srcset="">
                                </div>
                                <div class="right">
                                    <div class="info name">
                                        {{$getuser->tutorinfo->name}}
                                    </div>
                                    <div class="info mobile">
                                        {{$getuser->tutorinfo->mobile_number}}
                                    </div>
                                    <div class="info gmail">
                                        {{$getuser->email}}
                                    </div>
                                    @if (session('message'))
                                        <div class="alert alert-success">
                                            {!! session('message') !!}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li style="list-style: none;">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="bs-info-edt-sgnout">
                            <div class="btn-edit-profile">
                                <a href="{{route('tutor.home')}}">DashBoard</a>

                            </div>
                            <div class="btn-signout">
                                <form action="{{route('logout')}}" method="POST">
                                    {{ csrf_field() }}
                                    <Button class="logout-frm-tutor-profile" type="submit">Sign Out</Button>
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
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="public-view-tabs-options">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">Personal Informaiton</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Education Background</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">Tutoring Information</a>

                                    </div>
                                </div>

                            </div>

                           
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <form action="{{route('tutor.updateprofile')}}" method="POST">
                                        @csrf
                                        <div class="public-view-tab-content">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">

                                                    <!-- profile information in public view -->
                                                    <div class="container">
                                                        <div class="row">

                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="right-information">
                                                                    

                                                                         <input type="hidden" name="profile_id" value="{{$getuser->id}}">
                                                                         <input type="hidden" name="profile_image" value="{{$getuser->profile_image}}">
                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Name</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->name}}" type="text" name="name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Email</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->email}}" type="text" name="email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Gender</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->gender}}"
                                                                                    type="text" name="gender">
                                                                            </div>

                                                                        </div>

                                                                         <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">District</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->district_name}}" type="text" name="district_name">
                                                                            </div>

                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Address</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->area}}" type="text" name="area">
                                                                            </div>

                                                                        </div>
                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Cell</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->mobile_number}}" type="text"
                                                                                    name="phone_number">
                                                                            </div>

                                                                        </div>
                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="">Parents Phone Number</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->parents_phone_number}}" type="text" name="parents_phone_number">
                                                                            </div>

                                                                        </div>
                                                                        
                                                                        <button
                                                                            style="border: none; padding-left: 15px; padding-right: 15px; padding-top: 10px; padding-bottom: 10px;background: #4CAF50; color: white;"
                                                                            type="submit">Update Profile</button>
                                                                   

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">

                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-4 col-sm-12">
                                                                <div class="right-information">
                                                                    

                                                                       

                                                                        <input type="hidden" name="profile_id" value="{{$getuser->id}}">

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Your Medium</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->medium}}" name="medium">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">HighSchool/O'Level</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->h_school_name}}" name="h_school_name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Section</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->h_school_section}}" name="h_school_section">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="my-input">Result</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->h_school_result}}" name="h_school_result">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Collage</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->collage_name}}" name="collage_name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Section</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->collage_section}}" name="collage_section">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="my-input">Result</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->collage_result}}" name="collage_result">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">University</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->university_name}}" name="university_name">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Subject</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->subject}}" name="subject">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Result</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->university_result}}" name="university_result">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="my-input">Passing Year</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    type="text" value="{{$getuser->tutorinfo->university_passing_year}}" name="university_passing_year">
                                                                            </div>
                                                                        </div>

                                                                        <button
                                                                            style="border: none; padding-left: 15px; padding-right: 15px; padding-top: 10px; padding-bottom: 10px;background: #4CAF50; color: white;"
                                                                            type="submit">Update Profile</button>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                    aria-labelledby="v-pills-messages-tab">

                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-4 col-sm-12">
                                                                <div class="right-information">
                                                                   

                                                                        <input type="hidden" name="profile_id" value="{{$getuser->id}}">
                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Prefered Class</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->prefered_class}}" type="text" name="prefered_class">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Prefered Subject</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->prefered_subject}}" type="text" name="prefered_subject">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Prefered Area</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->prefared_area}}" type="text" name="prefared_area">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Prefered Medium</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->prefered_medium}}" type="text" name="prefered_medium">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Experiences (Years)</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->experience_years}}" type="text" name="experience_years">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Prefered Medium</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->experience_subjects}}" type="text" name="experience_subjects">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Salary Range From</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->salar_range_from}}" type="text" name="salar_range_from">
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-right">
                                                                            <div class="form-group">
                                                                                <label for="my-input">Salary Range To</label>
                                                                                <input id="my-input" class="form-control"
                                                                                    value="{{$getuser->tutorinfo->salary_range_to}}" type="text" name="salary_range_to">
                                                                            </div>
                                                                        </div>

                                                                        <button
                                                                            style="border: none; padding-left: 15px; padding-right: 15px; padding-top: 10px; padding-bottom: 10px;background: #4CAF50; color: white;"
                                                                            type="submit">Update Profile</button>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
@endsection
