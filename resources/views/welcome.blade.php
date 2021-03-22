@extends('layouts.guestlayout')
@section('content')
    {{-- welcome page bannar searchtutor section --}}
    <div class="search-for-tutor wow slideInLeft">
        <div class="info">
            <div class="title">
                SEARCH FOR TUTORS
            </div>
            <div class="sub-title">
                Find the best tutor in your area
            </div>
            <input type="hidden" name="authcheker" id="auth_check" value="{{Auth::check() ? 'yes' : 'no'}}">
            <div class="body-with-form">
                <form action="{{route('guest.searchTutor')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="body">
                        <div class="flex-part">
                            <div class="left-side site">
                                <div class="form-group">

                                    <select class="form-control" id="district">
                                        @foreach ($districts as $district)
                                            <option value="" disabled selected hidden>Select District</option>
                                            <option value="{{ $district->district_name }}">{{ $district->district_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">

                                    <select class="form-control" id="medium">
                                        <option value="" disabled selected hidden>Select Medium</option>
                                        @foreach ($mediums as $medium)
                                            <option value="{{ $medium->medium_name }}">{{ $medium->medium_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">

                                    <select class="form-control" name="classes" id="classes">
                                        <option value="" disabled selected hidden>Select Classes</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="right-side site">
                                <div class="form-group">

                                    <select class="form-control" id="area">
                                        <option value="" disabled selected hidden>Select Area</option>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                        <option value="" disabled selected hidden>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>

                                <button type="submit" class="request-tutor-indexpage">
                                    Search Tutor</button>

                            </div>
                        </div>
                    </div>

                    <div class="align-center">
                        <a class="view-all-tutors-button-index" href="{{ route('guest.fetchalltutors') }}">View All Tutor
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>

                </form>
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

            let area_url = '';
            let class_url = '';

            if($('#auth_check').value == 'yes'){
                area_url = "/gurdian/fetch-area";
                class_url    = "/gurdian/fetch-class";
            }else{
                area_url = "/fetch-area";
                class_url    = "/fetch-classes";
            }
            $('#district').on('change', function() {

                $.ajax({
                    type: "POST",
                    url: area_url,
                    data: {
                        'district_name': this.value,
                    },

                    ajaxStart: function() {
                        $('#area_null').append("<option value=''>please wait..</option>");
                    },
                    success: function(data) {
                        $('#area').empty();
                        data.forEach(element => {
                            $("#area").append("<option value='" + element.area_name +
                                "'>" + element.area_name + "</option>");
                        });
                    }
                });
            });

            $('#medium').on('change',function(){
                $.ajax({
                    type: "POST",
                    url: class_url,
                    data: {
                        'medium_name': this.value,
                    },
                   
                    success: function (data) {
                        $('#classes').empty();
                        data.forEach(element => {
                            $("#classes").append("<option value='" + element.classes_name +
                                "'>" + element.classes_name + "</option>");
                        });

                    }
                });
            })
        })

    </script>
@endsection
