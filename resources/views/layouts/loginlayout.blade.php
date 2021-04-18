@include('partials.headerlink')

<body>
    <section class="header" style="background-image: none!important; height: auto">
        @include('partials.navbar')
    </section>

    <section class="body">
        <div class="header-middle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="right-side">
                            @yield('content')
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.footer')
    
    

    
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{asset('asserts/vendor/js/select2.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        new WOW().init();

    </script>

    @yield('script')
</body>

</html>
