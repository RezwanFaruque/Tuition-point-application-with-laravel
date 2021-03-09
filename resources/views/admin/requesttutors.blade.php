@extends('layouts.adminlayout')

@section('style')
    <style type="text/css">
       
        .modal-body p{
            font-weight: bolder;
            border-bottom: 1px solid black;
            display: flex;
            justify-content: space-between;

        }
        .modal-body p span{
            font-weight: bold;
            
        }

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Request Tutor Added By Gurdian</h6>


                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Full Name</th>
                                <th>Area</th>
                                <th>School/Collage</th>
                                <th>Medium</th>
                                <th>Desire Tutor Gender</th>
                                <th>Student Gender</th>
                                <th>Subjects</th>
                                <th>View Details</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($request_tutors as $request_tutor)
                                <tr>
                                    <td>{{ $request_tutor->full_name }}</td>
                                    <td>{{ $request_tutor->area }}</td>
                                    <td>{{ $request_tutor->school_or_collage }}</td>
                                    <td>{{ $request_tutor->medium_or_category }}</td>
                                    <td>{{ $request_tutor->desire_tutor_gender }}</td>
                                    <td>{{ $request_tutor->desire_student_gender }}</td>
                                    <td>{{ $request_tutor->subject }}</td>
                                    <td>


                                        <button data-toggle="modal" id="reqtutordetail" data-target="#reqtutor" class="btn btn-danger"
                                            data-id="{{ $request_tutor->id }}">Details</button>

                                    </td>
                                    <td>
                                        <form action="" method="POST">

                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="reqtutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reqtutorlabel tutorName"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Full Name : <span id="full_name"></span></p>
                                <p>District : <span id="district"></span></p>
                                <p>Area : <span id="area"></span></p>
                                <p>School/Collage : <span id="school_or_collage"></span></p>
                                <p>Medium : <span id="medium_or_category"></span></p>
                                <p>Class : <span id="class_or_grade"></span></p>
                                <p>Tutor Gender : <span id="desire_tutor_gender"></span></p>

                                <p>Salary Range:<span id="salary_range"></span></p>

                                <p>Additional Information:<span id="additional_information"></span></p>

                                <p>Contact Number :<span id="contact_number"></span></p>
                                <p>Email:<span id="email"></span></p>
                                <p>Desire Student Gender :<span id="desire_student_gender"></span></p>
                                <p>Days Per Week :<span id="days_per_week"></span></p>
                                <p>Subjects :<span id="subject"></span></p>
                                
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
           


            //Getting specific tutor information  

            $('body').on('click', '#reqtutordetail', function() {
                var id = $(this).data('id');
                if (id) {
                    var url = "{{ route('admin.viewrequesttuor', ':id') }}".replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            $('#full_name').text(data.full_name);
                            $('#district').text(data.district);
                            $('#area').text(data.area);
                            $('#school_or_collage').text(data.school_or_collage);
                            $('#medium_or_category').text(data.medium_or_category);
                            $('#class_or_grade').text(data.class_or_grade);
                            $('#desire_tutor_gender').text(data.desire_tutor_gender);
                            $('#salary_range').text(data.salary_range);
                            $('#additional_information').text(data.additional_information);
                            $('#contact_number').text(data.contact_number);
                            $('#email').text(data.email);
                            $('#desire_student_gender').text(data.desire_student_gender);
                            $('#days_per_week').text(data.days_per_week);
                            $('#subject').text(data.subject);
                            
                        }
                    });

                }
            })

        });

    </script>
@endsection
