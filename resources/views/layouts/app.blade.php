<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/manage.js') }}"></script>
</head>

<body>
    <div class="header">
        <div class="inner">
            <div class="header-menu1">
                <ul>
                    <li> <a href="#about">MENSWEAR</a> </li>
                    <li> <a href="#works">WOMANSWEAR</a> </li>
                    <li> <a href="#news">EVERYTHING ELSE</a> </li>
                    <li> <a href="#news">SEARCH</a> </li>

                </ul>
            </div>

            <h1>SSADA</h1>

            <div class="header-menu2">
                <ul>
                    <li> <a href="#about">WISHLIST</a> </li>
                    <li> <a href="#works">SHOPINGBAG</a> </li>
                </ul>
            </div>


            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        </div>
    </div>
    @yield('content')
    <footer>
        <div class="menu">　
            <ul>　　
                <li><a href="">© 2022 ssada.com</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Accessibility</a></li>
            </ul>
        </div>
        <p>© Practice. 2019.</p>
    </footer>

</body>

</html>