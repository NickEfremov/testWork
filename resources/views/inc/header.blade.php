<header class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <div class="d-flex flex-column flex-md-row align-items-center ">
        <p class="h5 my-0 me-md-auto fw-normal">CUTTER</p>
        <nav class="my-2 my-md-0 me-md-3 ml-2">
            <a class="p-2 text-dark" href="{{ route('home')}}">Home</a>
            <a class="p-2 text-dark" href="{{ route('cutter')}}">Cutter</a>
            <a class="p-2 text-dark" href="{{ route('stat')}}">Statistic</a>
            <a class="p-2 text-dark" href="{{ route('api')}}">About API</a>
        </nav>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
