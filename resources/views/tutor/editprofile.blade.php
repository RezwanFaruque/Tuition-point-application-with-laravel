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
                                <img id="profile_image" src="{{asset($getuser->profile_image)}}" alt="" srcset="">

                                @if($getuser->profile_image == '')
                                <form action="{{route('tutor.update-profile-picture')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$getuser->id}}">
                                    <input type="file" style="width: 100px;" id="profile_image_upload" name="profile_image">
                                    <button class="" style="border: none; background-color: green; margin-top: 5px; color: white; width: 100px;height: 30px; text-align: center; font-size: 12px;font-family:'Montserrat-Regular';" type="submit">save</button>

                                </form>
                                @else

                                <form action="{{route('tutor.update-profile-picture')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$getuser->id}}">
                                    <input type="file" style="width: 100px;" id="profile_image_upload" name="profile_image">
                                    <button class="" style="border: none; background-color: green; margin-top: 5px; color: white; width: 100px;height: 30px; text-align: center; font-size: 12px;font-family:'Montserrat-Regular';" type="submit">Update</button>

                                </form>

                                @endif
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
                                <div class="info gmail">
                                    Profile Complete
                                </div>
                                <div class="progress">

                                  <div class="progress-bar" role="progressbar" style="width: {{$prgress}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$prgress}}%</div>
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
                                                    @php
                                                    $genders = ['Male','Female'];
                                                    @endphp

                                                    <select class="form-control" name="gender">

                                                        @foreach($genders as $gender)
                                                        <option value="{{$gender}}" @if($gender == $getuser->gender)
                                                            selected @endif>{{$gender}}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="info-right">
                                                    <div class="form-group">
                                                        <label for="">District</label>
                                                        <select class="form-control" name="district_name">

                                                            @foreach($districts as $district)
                                                            <option value="{{$district->district_name}}" @if($district->district_name == $getuser->tutorinfo->district_name)
                                                                selected @endif>{{$district->district_name}}
                                                            </option>
                                                            @endforeach

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="info-right">
                                                    <div class="form-group">
                                                        <label for="">Address</label>

                                                        <select class="form-control" name="area">
                                                            @foreach($areas as $area)
                                                            <option @if($area->area_name == $getuser->tutorinfo->area)
                                                                selected @endif value="{{$area->area_name}}">{{$area->area_name}}</option>
                                                                @endforeach
                                                            </select>

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
                                                        @php
                                                          $sections = ['Science','Arts','Commerce'];
                                                        @endphp

                                                        <select name="h_school_section" class="form-control">
                                                            @foreach($sections as $section)
                                                                <option @if($section == $getuser->tutorinfo->h_school_section) selected @endif value="{{$section}}">{{$section}}</option>
                                                            @endforeach
                                                        </select>
                                                       
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
                                                         @php
                                                          $sections = ['Science','Arts','Commerce'];
                                                        @endphp

                                                        <select name="collage_section" class="form-control">
                                                            @foreach($sections as $section)
                                                                <option @if($section == $getuser->tutorinfo->collage_section) selected @endif value="{{$section}}">{{$section}}</option>
                                                            @endforeach
                                                        </select>
                                                       
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
                                                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="prefered_class[]" multiple="multiple">
                                                        @php
                                                        $s_classes = explode(",", $getuser->tutorinfo->prefered_class);

                                                        
                                                        @endphp

                                                        @foreach($s_classes as $s_class)
                                                        <option selected value="{{$s_class}}">{{$s_class}}</option>
                                                        @endforeach

                                                        @foreach($classes as $class)
                                                        <option

                                                           {{--  @foreach($s_classes as $s_class)
                                                                @if($s_class == $class->classes_name) selected @endif
                                                            @endforeach --}}
                                                         value="{{$class->classes_name}}">{{$class->classes_name}}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                            <div class="info-right">
                                                <div class="form-group">
                                                    <label for="my-input">Prefered Subject</label>
                                                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="prefered_subject[]" multiple="multiple">

                                                        @php
                                                            $s_p_subjects = explode(",", $getuser->tutorinfo->prefered_subject);
                                                        @endphp

                                                        @foreach($s_p_subjects as $s_p_subject)
                                                            <option selected value="{{$s_p_subject}}">{{$s_p_subject}}</option>
                                                        @endforeach
                                                        <option value="Bangla">Bangla</option>
                                                        <option value="English">English</option>
                                                        <option value="Math">Math</option>
                                                        <option value="Higher Math">Higher Math</option>
                                                        <option value="General Math">General Math</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Statistics">Statistics</option>
                                                        <option value="Agriculture">Agriculture</option>
                                                        <option value="Social Sciences">Social Sciences</option>
                                                        <option value="Sciences">Sciences</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>

                                            <div class="info-right">
                                                <div class="form-group">
                                                    <label for="my-input">Prefered Area</label>

                                                    <select class="js-example-basic-multiple form-control" style="width: 100%" name="prefared_area[]" multiple="multiple">
                                                        @php
                                                            $s_areas = explode(",", $getuser->tutorinfo->prefared_area);
                                                        @endphp

                                                        @foreach($s_areas as $s_area)
                                                            <option selected value="{{$s_area}}">{{$s_area}}</option>
                                                        @endforeach
                                                        @foreach($areas as $area)
                                                            <option value="{{$area->area_name}}">{{$area->area_name}}</option>
                                                        @endforeach
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                            <div class="info-right">
                                                <div class="form-group">
                                                    <label for="my-input">Prefered Medium</label>
                                                    @php

                                                        $p_mediums = ['English','Bangla'];
                                                    @endphp
                                                    <select class="form-control" name="prefered_medium">
                                                        @foreach($p_mediums as $p_medium)
                                                        <option @if($p_medium == $getuser->tutorinfo->prefered_medium) selected @endif value="{{$p_medium}}">{{$p_medium}}</option>

                                                        @endforeach
                                                    </select>
                                                   
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
                                                    <label for="my-input">IELTS/Admission</label>
                                                    @php
                                                        $subexps = ['IELTS','Admission','None'];
                                                    @endphp

                                                    <select name="experience_subjects" class="form-control">
                                                        @foreach($subexps as $subexp)
                                                            <option @if($subexp == $getuser->tutorinfo->experience_subjects) selected @endif value="{{$subexp}}">{{$subexp}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                </div>
                                            </div>

                                            {{-- <div class="info-right">
                                                <div class="form-group">
                                                    <label for="my-input">Salary Range From</label>
                                                    <input id="my-input" class="form-control"
                                                    value="{{$getuser->tutorinfo->salar_range_from}}" type="text" name="salar_range_from">
                                                </div>
                                            </div> --}}

                                            <div class="info-right">
                                                <div class="form-group">
                                                    <label for="my-input">Salary Range</label>
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

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $("#profile_image_upload").on('change', function (event) {
            let filesize = event.target.files[0].size / 1024 / 1024;
            console.log(filesize)
            numb = filesize.toFixed(0.5);
            let tmppath = URL.createObjectURL(event.target.files[0]);
            if (numb > 0.5) {
                alert('File size is larger than 1 MB');
                document.getElementById('imageUpload').value = '';
                $('#profile_image').fadeIn("fast").attr('src', ' ');

            } else {
                $('#profile_image').fadeIn("fast").attr('src', tmppath);
            }

        });

        $('.js-example-basic-multiple').select2();


    })

    

</script>
@endsection

