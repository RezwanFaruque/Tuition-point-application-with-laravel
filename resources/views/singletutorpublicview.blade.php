@extends('layouts.authuserlayout')
@section('content')


    <div class="tutor-profile-section">
        <div class="basic-information">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="bs-info">
                            <div class="bs-info-name">
                                <div class="left">
                                    <img src="{{ asset($tutor->profile_image) }}" alt="" srcset="">
                                </div>
                                <div class="right">
                                    <div class="info name">
                                        {{ $tutor->name }}
                                    </div>

                                    @if ($tutor->tutorinfo->experience_years)
                                        <div class="info gmail">
                                            {{ $tutor->tutorinfo->experience_years }} of experiences
                                        </div>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="feedback-form">
                            <div class="title">
                                Give Us A Feedback For This Tutor
                            </div>
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {!! session('message') !!}
                                </div>
                            @endif
                            <form action="{{route('gurddian.givefeedback')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                   
                                    <input id="my-input" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" type="text" name="name">

                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    
                                    <textarea name="feedback_message" class="form-control @error('feedback_message') is-invalid @enderror" placeholder="Feedback Message" id="" cols="50" rows="5"></textarea>

                                    @error('feedback_message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="tutor_id" value="{{$tutor->id}}">
                                    
                                    <input id="my-input" placeholder="Mobile Number" class="form-control  @error('mobile_number') is-invalid @enderror" type="number" name="mobile_number">

                                    @error('mobile_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @guest
                                  <div class="message">
                                     You are not registered to give feedback.
                                  </div>
                                @else
                                  <button class="feedbak-submit" type="submit">Send</button>
                                @endguest
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="bs-info-edt-sgnout">
                            <div class="btn-edit-profile">
                                <a href="#">Active for Tution</a>

                            </div>
                            <div class="btn-signout">
                                <form action="" method="POST">
                                    <Button class="logout-frm-tutor-profile" type="submit">Hire Now</Button>
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
                                            aria-selected="true">Personal Inforamtion</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Educational Background</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">Tutoring Information</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                            aria-selected="false">Student Feedback</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="public-view-tab-content">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">

                                            <!-- profile information in public view -->
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="left-informations">
                                                            <div class="info-left">
                                                                Name
                                                            </div>
                                                            <div class="info-left">
                                                                Gender
                                                            </div>
                                                            <div class="info-left">
                                                                Address
                                                            </div>
                                                            <div class="info-left">
                                                                Phone Number
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">
                                                            <div class="info-right">
                                                                {{ $tutor->name }}
                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->gender }}
                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->area }}
                                                            </div>
                                                            <div class="overlay">
                                                                <div class="info-right">
                                                                    Please Contact MeetTutor For Contact Information
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">

                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="left-informations">

                                                            <div class="section_education">
                                                                <div class="info-left">
                                                                    University
                                                                </div>
                                                                <div class="info-left">
                                                                    Result
                                                                </div>
                                                                <div class="info-left">
                                                                    Subject
                                                                </div>
                                                                <div class="info-left">
                                                                    Passing Year
                                                                </div>

                                                            </div>

                                                            <div class="section_education">
                                                                <div class="info-left">
                                                                    High School/O'Level
                                                                </div>
                                                                <div class="info-left">
                                                                    Section
                                                                </div>
                                                                <div class="info-left">
                                                                    Result
                                                                </div>

                                                                <div class="info-left">
                                                                    Passsing Year
                                                                </div>
                                                            </div>



                                                            <div class="section_education">
                                                                <div class="info-left">
                                                                    Collage/A'Level
                                                                </div>
                                                                <div class="info-left">
                                                                    Section
                                                                </div>
                                                                <div class="info-left">
                                                                    Result
                                                                </div>
                                                                <div class="info-left">
                                                                    Passsing Year
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">

                                                            <div class="section_education">
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->university_or_collage ? $tutor->tutorinfo->university_or_collage : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->university_result ? $tutor->tutorinfo->university_result : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->subject ? $tutor->tutorinfo->subject : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->university_passing_year ? $tutor->tutorinfo->university_passing_year : 'No Data Available' }}

                                                                </div>

                                                            </div>

                                                            <div class="section_education">
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->h_school_name ? $tutor->tutorinfo->h_school_name : 'No Data Available' }}
                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->h_school_section ? $tutor->tutorinfo->h_school_section : 'No Data Available' }}
                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->h_school_result ? $tutor->tutorinfo->h_school_result : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->h_passing_year ? $tutor->tutorinfo->h_passing_year : 'No Data Available' }}

                                                                </div>
                                                            </div>





                                                            <div class="section_education">
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->collage_name ? $tutor->tutorinfo->collage_name : 'No Data Availabe' }}
                                                                </div>

                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->collage_section ? $tutor->tutorinfo->collage_section : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->collage_result ? $tutor->tutorinfo->collage_result : 'No Data Available' }}

                                                                </div>
                                                                <div class="info-right">
                                                                    {{ $tutor->tutorinfo->collage_passing_year ? $tutor->tutorinfo->collage_passing_year : 'No Data Available' }}

                                                                </div>

                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">

                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="left-informations">
                                                            <div class="info-left">
                                                                Prefered Class
                                                            </div>
                                                            <div class="info-left">
                                                                Prefered Subjects
                                                            </div>
                                                            <div class="info-left">
                                                                Prefered Area
                                                            </div>
                                                            <div class="info-left">
                                                                Prefered Medium
                                                            </div>
                                                            <div class="info-left">
                                                                Experience (Years)
                                                            </div>
                                                            <div class="info-left">
                                                                Salary Range
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->prefered_class ? $tutor->tutorinfo->prefered_class : 'No Data Available' }}
                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->prefered_subject ? $tutor->tutorinfo->prefered_subject : 'No Data Available' }}

                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->prefared_area ? $tutor->tutorinfo->prefared_area : 'No Data Available' }}

                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->prefered_medium ? $tutor->tutorinfo->prefered_medium : 'No Data Available' }}

                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->experience_years ? $tutor->tutorinfo->experience_years : 'No Data Available' }}

                                                            </div>
                                                            <div class="info-right">
                                                                {{ $tutor->tutorinfo->salar_range_from ? $tutor->tutorinfo->salar_range_from : 'No Data Available' }}
                                                                - {{ $tutor->tutorinfo->salary_range_to }}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">


                                            <div class="container">

                                                @if($tutor_feedbacks != '')

                                                    @foreach($tutor_feedbacks as $tutor_feedback )
                                                        <div class="row">

                                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                                <div class="left-informations">
                                                                    <div class="info-left">
                                                                        {{$tutor_feedback->name}}
                                                                    </div>
                                                                   


                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-4 col-sm-12">
                                                                <div class="right-information">
                                                                    <div class="info-right">
                                                                        {{$tutor_feedback->feedback_message}}
                                                                    </div>
                                                                   

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                
                                                
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

@endsection
