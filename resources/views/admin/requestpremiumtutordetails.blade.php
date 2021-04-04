@extends('layouts.adminlayout')

@section('content')

<div class="col-lg-12">
    <!-- Select2 -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Premium Tutor Request Details</h6>
            <div style="background-color: red;">
                @if (session('message'))
                {{ session('message') }}
                @endif
            </div>
            
        </div>
        <div class="card-body">



            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label>Name</label>

                    </div>
                    <div class="col-lg-9">
                        {{$req_prem_tutor->name}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label>Phone Number</label>

                    </div>
                    <div class="col-lg-9">
                        {{$req_prem_tutor->phone_number}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="select2Single">Email</label>

                    </div>
                    <div class="col-lg-9">
                       {{$req_prem_tutor->email}}
                   </div>
               </div>
           </div>

           <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="select2Single">Last Four Digit Of Payment Number</label>

                </div>
                <div class="col-lg-9">
                    {{$req_prem_tutor->last_four_digit_bkash_number}}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label for="select2Single">Success Payment Screenshoot</label>

                </div>
                <div class="col-lg-9">
                    <img style="width: 200px;height: 200px; object-fit: cover;" src="{{asset($req_prem_tutor->payment_success_image_url)}}" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <form action="{{route('admin.acceptrequestpremium',$req_prem_tutor->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$req_prem_tutor->user_id}}">
                    <button @if($req_prem_tutor->is_premium == '1') disabled @endif class="btn btn-primary" type="submit"> @if($req_prem_tutor->is_premium == '1') Already Accepted @else Accept Request @endif</button>

                </form>
            </div>
        </div>

    </form>


</div>
</div>

</div>


@endsection