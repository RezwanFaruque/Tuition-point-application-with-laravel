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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section class="header" style="background-image: none!important; height: auto">
        @include('partials.navbar')
    </section>
    <section class="body">
        @yield('content')
    </section>


    <section class="footer" style="margin-top:30px;">
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
                            <div class="icon">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </div>
                            <div class="icon">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="icon">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                            <div class="icon">
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        new WOW().init();

    </script>
    @yield('script')
</body>

</html>
