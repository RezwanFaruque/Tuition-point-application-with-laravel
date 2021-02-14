@extends('layouts.loginlayout')

@section('content')
    <div class="register-as-tutor">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image-illustration-section">
                        <form action="" method="post">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <div class="image-preview">
                                <img id="image-preview-avater" src="assets/vendor/images/registerpage/avatter.jpg" alt=""
                                    srcset="">
                            </div>
                            <div class="file-text-under">
                                Upload Profile Image with size max 1MB with JPG/PNG
                            </div>
                            <button class="save-image" type="submit">Save Image</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="right-side-form">
                        <div class="title">
                            Register
                        </div>
                        <div class="subtitle">
                            Sign Up To Continue
                        </div>

                        <div class="registration-form">
                            <form action="{{ route('register') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <select id="inputState" name="user_role"
                                        class="form-control" required>
                                        <option value="">Select Your Role</option>
                                        <option value="tutor">I am a Tutor</option>
                                        <option value="gurdian">I am a Gurdian</option>
    
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input id="my-input" placeholder="Name"
                                        class="form-control @error('name') is-invalid @enderror" type="text" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" placeholder="Email Address"
                                        class="form-control @error('email') is-invalid @enderror" type="text" name="email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" placeholder="Phone Number"
                                        class="form-control @error('phone_number') is-invalid @enderror" type="text"
                                        name="phone_number">

                                    @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <select id="inputState" name="gender"
                                        class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
        
                                    </select>

                                </div>

                                <div class="form-group">
                                    <input id="my-input" placeholder="password"
                                        class="form-control  @error('password') is-invalid @enderror" type="password"
                                        name="password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="my-input" placeholder="confirm-password"
                                        class="form-control @error('confirm_password') is-invalid @enderror" type="password"
                                        name="confirm_password">
                                    @error('confirm_password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button class="sign-up-button-reg-tutor" type="submit">Sign up</button>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
