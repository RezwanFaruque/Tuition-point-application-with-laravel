<nav class="navbar navbar-expand-lg navbar-light bg-light-color">
    <a class="navbar-brand wow slideInLeft" href="#"><img src="assets/vendor/images/index/Tuitions-Point.png" alt=""
            srcset=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">HOME</a>
            </li>
            @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gurdian.fetchtutors') }}">ALL TUTORS</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.fetchalltutors') }}">ALL TUTORS</a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" href="#">BECOME A TUTOR </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.requestfortutor') }}">Request a Tutor</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gurdian.requestfortutor') }}">Request a Tutor</a>
                </li>
            @endguest

            <li class="nav-item">
                <a class="nav-link" href="about-us.html">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
            </li>
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
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('tutor.home') }}">
                            Profile Dashboard
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

    </div>
</nav>
