<nav class="navbar navbar-expand-lg navbar-light bg-light-color">
    <a class="navbar-brand wow slideInLeft" href="#"><img src="{{ asset('assets/vendor/images/index/mt_logo.png') }}"
            alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index.home') }}">HOME</a>
                </li>
            @else

                @if (Auth::user()->is_tutor == '1')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('tutor.home') }}">HOME</a>
                    </li>
                @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('gurdian.home') }}">HOME</a>
                    </li>
                @endif

            @endguest

            @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gurdian.fetchtutors') }}">ALL TUTORS</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.fetchalltutors') }}">ALL TUTORS</a>
                </li>
            @endif


            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.premium-tutor') }}">PREMIUM TUTORS</a>
                </li>
            @else
                @if(Auth::user()->is_tutor == '1')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gurdian.getpremium-tutor') }}">PREMIUM TUTORS</a>
                </li>
                @else
                
            @endguest

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">BECOME A TUTOR </a>
                </li>

            @endguest

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.requestfortutor') }}">Request a Tutor</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gurdian.requestfortutor') }}">Request a Tutor</a>
                </li>
            @endguest


            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.activetutions') }}">Active Tutions</a>
                </li>
            @else
                @if (Auth::user()->is_tutor == '1')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tutor.activetutions') }}">Active Tutions</a>
                    </li>
                @else

                @endif

            @endguest

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.aboutus') }}">ABOUT US</a>
                </li>
            @else

                @if (Auth::user()->is_tutor == '1')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tutor.aboutus') }}">ABOUT US</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gurdian.aboutus') }}">ABOUT US</a>
                    </li>
                @endif

            @endguest

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.faq') }}">FAQ</a>
                </li>
            @else

                @if (Auth::user()->is_tutor == '1')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tutor.faq') }}">FAQ</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gurdian.faq') }}">FAQ</a>
                    </li>
                @endif

            @endguest

            @guest
                <li class="nav-item">
                    <a class="nav-link login-button" href="{{ route('login') }}">Login / Register</a>
                </li>

            @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @if (Auth::user()->is_tutor == '1')
                            <a class="dropdown-item" href="{{ route('tutor.home') }}">
                                Profile Dashboard
                            </a>
                        @else
                            <a class="dropdown-item" href="{{ route('gurdian.home') }}">
                                Profile Dashboard
                            </a>
                        @endif

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

    </div>
</nav>
