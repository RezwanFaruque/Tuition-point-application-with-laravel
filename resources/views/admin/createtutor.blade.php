@extends('layouts.adminlayout')

@section('content')

<div class="col-lg-12">
        <!-- Select2 -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Upload Tutions Information</h6>

                @if(session('message'))
                	<div class="alert alert-success">
                        {!! session('message') !!}
                    </div>
                @endif
            </div>
            <div class="card-body">

                <form action="{{route('admin.savetutor')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Name</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" type="text">
	                            @error('name')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Email</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email">
	                            @error('email')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Phone Number</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" type="Number">
                             	@error('phone_number')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>

                           
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Gender</label>

                            </div>
                            <div class="col-lg-9">
                                <select class="form-control" required name="gender">
                                	<option value="male">Male</option>
                                	<option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Password</label>

                            </div>
                            <div class="col-lg-9">
                                <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password">

                                @error('password')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>

                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-9">
                            <button class="btn btn-primary" type="submit">Save Tutor</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>

@endsection