@extends('layouts.adminlayout')
@section('style')
    <style type="text/css">
        .tutor-tr {
            cursor: pointer;
        }
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

    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Area</th>
                            <th>University/Collage</th>
                            <th>Gender</th>
                            <th>Premium/Normal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tutors as $tutor)
                            <tr data-id="{{ $tutor->id }}" class="tutor-tr" data-toggle="modal"
                                data-target="#exampleModal">
                                <td>{{ $tutor->id }}</td>
                                <td>{{ $tutor->name }}</td>
                                <td>{{ $tutor->mobile_number }}</td>
                                <td>{{ $tutor->area }}</td>
                                <td>{{ $tutor->university_or_collage }}</td>
                                <td>{{ $tutor->gender }}</td>
                                <td>
                                    @if ($tutor->is_premium == '1')
                                        Premium Tutor
                                    @else
                                        Not Premium Tutor
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel tutorName"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Name : <span id="tutorName"></span></p>
                    <p>School/Collage : <span id="tutorSchoolOrCollage"></span></p>
                    <p>Area : <span id="tutorArea"></span></p>
                    <p>Subject : <span id="tutorSubject"></span></p>
                    <p>Medium : <span id="tutorMedium"></span></p>
                    <p>Day's Per Week : <span id="tutorDaysPerWeek"></span></p>
                    <p>Mobile Number : <span id="tutorMobileNumber"></span></p>
            
                    <p>High School Name:<span id="tutorHName"></span></p>

                    <p>Result:<span id="tutorHResult"></span></p>

                    <p>Passing Year :<span id="tutorHPassingYear"></span></p>
                    <p>Collage Name :<span id="tutorCName"></span></p>
                    <p>Result :<span id="tutorCResult"></span></p>
                    <p>Passing Year :<span id="tutorCPassingYear"></span></p>
                    <p>University Name :<span id="tutorUniName"></span></p>
                    <p>Result :<span id="tutorUniResult"></span></p>
                    <p>Passing Year :<span id="tutorUniPassingYear"></span></p>
                    <p>Gender :<span id="tutorGender"></span></p>
                    <p>Parents Phone Number :<span id="tutorParentsPhoneNumber"></span></p>
                    <p>Premium?: <span id="tutorPremium"></span></p>
                    <p>Experience Year: <span id="tutorYearExperiences"></span></p>
                    <p>Experience Subjects<span id="tutorSubjectExperiences"></span></p>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 


            //Getting specific tutor information  

            $('body').on('click', '#dataTable tbody tr', function() {
                var id = $(this).data('id');
                if (id) {
                    var url = "{{ route('admin.fetchsingletutor', ':id') }}".replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data);
                            var premium = "";
                            if(data.is_premium == 1){
                                 premium = "Premium Tutor"
                            }else{
                                premium = "Not Premium Tutor"
                            }


                            $('#tutorName').text(data.name);
                            $('#tutorSchoolOrCollage').text(data.university_or_collage);
                            $('#tutorArea').text(data.area);
                            $('#tutorSubject').text(data.subject);
                            $('#tutorMedium').text(data.medium);
                            $('#tutorDaysPerWeek').text(data.days_per_week);
                            $('#tutorMobileNumber').text(data.mobile_number);
                            $('#tutorHName').text(data.h_school_name);
                            $('#tutorHResult').text(data.h_school_result);
                            $('#tutorHPassingYear').text(data.h_passing_year);
                            $('#tutorCName').text(data.collage_name);
                            $('#tutorCResult').text(data.collage_result);
                            $('#tutorCPassingYear').text(data.collage_passing_year);
                            $('#tutorUniName').text(data.university_name);
                            $('#tutorUniResult').text(data.university_result);
                            $('#tutorUniPassingYear').text(data.university_passing_year);
                            $('#tutorGender').text(data.gender);
                            $('#tutorPremium').html(premium);
                            $('#tutorParentsPhoneNumber').text(data.parents_phone_number);
                            $('#tutorYearExperiences').text(data.experience_years);
                            $('#tutorSubjectExperiences').text(data.experience_subjects);

                            
                        }
                    });

                }
            })

        });

    </script>
@endsection
