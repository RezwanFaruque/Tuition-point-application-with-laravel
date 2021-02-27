@extends('layouts.loginlayout')

@section('content')
    <!-- login form div goes here -->
    <div class="login-form">
        <div class="header">
            LOG IN to continue
        </div>
        <div class="form-body">
            <form action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="my-input">Email</label>
                    <input id="my-input" class="form-control" type="email" value="{{$email ?? ''}}" placeholder="Enter Your email Address"
                        name="email">
                </div>
                <div class="form-group">
                    <label for="my-input">Password</label>
                    <input id="my-input" class="form-control" placeholder="Enter Password" type="password" name="password">
                </div>
                <button class="login-button-submit" type="submit">Login</button>
            </form>
        </div>
        <div class="footer">
            <div class="title">
                Do not have account?
            </div>
            <div class="register-page">
                <a class="register-page-link" href="{{route('register')}}">Register</a>
            </div>
        </div>
    </div>
@endsection
