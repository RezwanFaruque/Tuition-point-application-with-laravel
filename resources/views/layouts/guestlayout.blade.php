<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TutionPoint') }}</title>


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/animate.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light-color">
            <a class="navbar-brand wow slideInLeft" href="#"><img src="assets/vendor/images/index/Tuitions-Point.png"
                    alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".2s" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".3s" href="premium-tutorlist.html">PREMIUM
                            TUTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".4s" href="#">BECOME A TUTOR </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".4s" href="available-tutions.html">Available
                            Tutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="request-tutor.html">REQUEST A TUTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".5s" href="about-us.html">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp" data-wow-delay=".6s" href="faq.html">FAQ</a>
                    </li>
                    {{-- if user is not authenticate --}}
                    @guest
                        <li class="nav-item">
                            <a class="nav-link login-button" href="{{ route('login') }}">Login / Register</a>
                        </li>

                        {{-- if user authenticate --}}
                    @else
                    {{-- if user not admin and user is a tutor --}}
                        @if (Auth::user()->is_admin != '1' && Auth::user()->is_tutor = '1')

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Tutor {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @elseif(Auth::user()->is_admin != '1' && Auth::user()->is_gurdian =='1')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Gurdian {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                           
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif

                    @endguest
            </div>
        </nav>

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="left-side">
                            {{-- main section layout goes here --}}
                            <main>
                                @yield('content')
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="right-side">
                            <div class="social-fix-position">
                                <div class="social-section wow slideInRight">
                                    <div class="logo">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <a href="#">Facebook</a>
                                    </div>
                                </div>

                                <div class="social-section wow slideInRight">
                                    <div class="logo">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <a href="#">Instagram</a>
                                    </div>
                                </div>

                                <div class="social-section wow slideInRight">
                                    <div class="logo">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <a href="#">Tweeter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- section footer --}}
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="office-location">
                        <div class="logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="address">
                            Office Address: Gulshan - 02, Dhaka - 1212, Bangladesh
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-contact-social">
                        <div class="mobile-contact">
                            <div class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                (+880) 1737226676
                            </div>
                        </div>
                        <div class="social-media-contact">
                            <div class="icon wow fadeInUp">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </div>
                            <div class="icon wow fadeInUp">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="icon wow fadeInUp">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                            <div class="icon wow fadeInUp">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="payment-options">
                        <div class="text">
                            We Accept:
                        </div>
                        <div class="icons">
                            <div class="social-icons">
                                <img src="assets/vendor/images/index/bkash.png" alt="" srcset="">
                            </div>
                            <div class="social-icons">
                                <img src="assets/vendor/images/index/Dbbl_bank.png" alt="" srcset="">
                            </div>
                            <div class="social-icons">
                                <img src="assets/vendor/images/index/roketlogo.png" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        new WOW().init();

    </script>
</body>

</html>
