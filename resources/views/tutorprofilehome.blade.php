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
                                    <img src="assets/vendor/images/tutorlist/me.jpg" alt="" srcset="">
                                </div>
                                <div class="right">
                                    <div class="info name">
                                        Rayhan Ahmed
                                    </div>
                                    <div class="info mobile">
                                        (+880) 1737226676
                                    </div>
                                    <div class="info gmail">
                                        example@gmail.com
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
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
                                            aria-selected="true">Profile</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Education</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">Extra Facilities</a>
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
                                                                Rezwanul Ehsan
                                                            </div>
                                                            <div class="info-right">
                                                                University of Information Technology & Sciences
                                                            </div>
                                                            <div class="info-right">
                                                                Gulshan Badda
                                                            </div>
                                                            <div class="info-right">
                                                                Informaiton Technology
                                                            </div>
                                                            <div class="info-right">
                                                                Bangla
                                                            </div>
                                                            <div class="info-right">
                                                                6
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
                                                            <div class="info-left">
                                                                S.S.C
                                                            </div>
                                                            <div class="info-left">
                                                                H.S.C
                                                            </div>
                                                            <div class="info-left">
                                                                Honorse/Engineering/Medical
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">
                                                            <div class="info-right">
                                                                4.94
                                                            </div>
                                                            <div class="info-right">
                                                                5.00
                                                            </div>
                                                            <div class="info-right">
                                                                3.56
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
                                                                ExF
                                                            </div>
                                                            <div class="info-left">
                                                                ExF
                                                            </div>
                                                            <div class="info-left">
                                                                ExF
                                                            </div>
                                                            <div class="info-left">
                                                                ExF
                                                            </div>
                                                            <div class="info-left">
                                                                ExF
                                                            </div>
                                                            <div class="info-left">
                                                                ExF
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                            <div class="info-right">
                                                                ExF
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">


                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                                        <div class="left-informations">
                                                            <div class="info-left">
                                                                Rezwan Faruque
                                                            </div>
                                                            <div class="info-left">
                                                                Rezwan Faruque
                                                            </div>
                                                            <div class="info-left">
                                                                Rezwan Faruque
                                                            </div>
                                                            <div class="info-left">
                                                                Rezwan Faruque
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12">
                                                        <div class="right-information">
                                                            <div class="info-right">
                                                                He is very good tutor always arrives at time.
                                                            </div>
                                                            <div class="info-right">
                                                                He is the best tutor we ever had.
                                                            </div>
                                                            <div class="info-right">
                                                                He is our best tutor
                                                            </div>
                                                            <div class="info-right">
                                                                Best we have
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
@endsection
