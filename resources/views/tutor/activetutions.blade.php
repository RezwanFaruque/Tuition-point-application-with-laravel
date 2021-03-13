@extends('layouts.loginlayout')
@section('content')
    <div class="right-side">
        <!-- Fetchig tutor list in here -->
        <div class="title">
            Active Tutions
        </div>
        <hr>
        <div class="active-tutions-card">
            <div class="container">
                <div class="row">
                    @foreach ($available_tutions as $tution)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="tutions-card">
                                <div class="header">
                                    <div class="location">
                                        {{ $tution->title }}
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="tution-info-body">
                                        <span>Lacation:</span> {{ $tution->location }}
                                    </div>
                                    <div class="tution-info-body">
                                        <span>Tution ID:</span> {{ $tution->tutor_id }}
                                    </div>
                                    <div class="tution-info-body">
                                        <span>Class:</span> {{ $tution->class }}
                                    </div>
                                    <div class="tution-info-body">
                                        <span>Subject</span> {{ $tution->subjects }}
                                    </div>
                                    <div class="tution-info-body">
                                        <span>Salary:</span> {{ $tution->salary_range }}
                                    </div>

                                </div>
                                <div class="footer">
                                    <div class="posting-date">
                                        <span>Posted On:</span> {{ $tution->created_at }}
                                    </div>
                                    <div class="view-details">
                                        <button id="view_details_modal" data-toggle="modal" data-id="{{ $tution->id }}"
                                            data-target="#activetutionmodal">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="modal fade" id="activetutionmodal" tabindex="-1" role="dialog" aria-labelledby="activetutionmodal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="info">
                            <div class="info-title">
                                Location
                            </div>
                            <div id="location">

                            </div>
                        </div>

                        <div class="info">
                            <div class="info-title">
                                Class
                            </div>
                            <div id="classes">

                            </div>
                        </div>


                        <div class="info">
                            <div class="info-title">
                                Subject
                            </div>
                            <div id="subject">

                            </div>
                        </div>
                        <div class="info">
                            <div class="info-title">
                                Tutor Gender
                            </div>
                            <div id="tutor_gender">

                            </div>
                        </div>
                        <div class="info">
                            <div class="info-title">
                                Days Per Week
                            </div>
                            <div id="days_per_week">

                            </div>
                        </div>
                        <div class="info">
                            <div class="info-title">
                                Salary
                            </div>
                            <div id="salary">

                            </div>
                        </div>
                        <div class="info">
                            <div class="info-title">
                                Student Gender
                            </div>
                            <div id="student_gender">

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <input type="hidden" id="auth_user" value="{{ Auth::user()->id }}">
                        @guest
                            <button type="button" disabled class="btn btn-danger">Register For Apply</button>
                        @else
                            @if (Auth::user()->is_tutor == '1')
                                <button type="button" id="apply_tutor" data-id="" class="btn btn-primary">Apply</button>
                            @else
                                <button type="button" disabled class="btn btn-primary">Register For Apply</button>
                            @endif
                        @endguest


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
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '#view_details_modal', function() {
                let id = $(this).data('id');
                console.log(id);
                if (id) {
                    var url = "{{ route('tutor.singletutorview', ':id') }}".replace(':id', id);
                    $('#apply_tutor').attr('data-id', '');
                    $('#title').text('');
                    $('#location').text('');
                    $('#classes').text('');
                    $('#subject').text('');
                    $('#tutor_gender').text('');
                    $('#days_per_week').text('');
                    $('#salary').text('');
                    $('#student_gender').text('');
                    $.ajax({
                        type: "GET",
                        url: url,
                        success: function(data) {
                            $('#apply_tutor').attr('data-id', data.id);
                            $('#title').text(data.title);
                            $('#location').text(data.location);
                            $('#classes').text(data.class);
                            $('#subject').text(data.subjects);
                            $('#tutor_gender').text(data.desire_tutor_gender);
                            $('#days_per_week').text(data.days_per_week);
                            $('#salary').text(data.salary_range);
                            $('#student_gender').text(data.student_gender);
                        }
                    });
                }
            });

            $('body').on('click', '#apply_tutor', function() {
                let tutionpostid = $(this).attr('data-id');
                let userid = $('#auth_user').val();
                console.log(userid);

                $.ajax({
                    type: "POST",
                    url: "{{ route('tutor.applyforactivetution') }}",
                    data: {
                        tution_post_id: tutionpostid,
                        user_id: userid,
                    },



                    success: function(data) {
                        if (data.status == 'success') {
                            swal("Success!!", data.message, "success");
                        }

                    },

                    error: function(request, status, error) {
                        swal("Sorry!!", "You Already Applied For This Tution.", "error");
                    }


                });
            })

        });

    </script>
@endsection
