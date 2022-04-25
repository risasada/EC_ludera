<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>
    <div class="header-wrap">
        <div class="header-left-wrap">
            <div class="menswear">
                <a class="header-menu" href="/item/men's/none/none">Men's</a>
            </div>
            <div class="womanswear">
                <a class="header-menu" href="/item/women's/none/none">Women's</a>
            </div>
            <div class="mono">
                <a href="">EverythingElse</a>
            </div>
            <div class="kensaku">
                search
            </div>
            <nav class="footer-nav">
                <div class="nav-footer-head">
                    <div class="nav-menswear">
                        <button onclick="placeholderChange('メンスウェア')">Men's</button>
                    </div>
                    <div class="nav-womanswear">
                        <button onclick="placeholderChange('ウィメンズウェア')">Women's</button>
                    </div>
                    <div class="nav-mono">
                        <button onclick="placeholderChange('物とモノ')">物とモノ</button>
                    </div>
                </div>
                <div class="serch-grid">
                    <form class='nav-form' action="">
                        <input class="nav-serch-grid" type="text" placeholder="メンズウェアを検索">
                        <input class="nav-serch-submit" type="image" src="./balloon-fill.svg">
                    </form>
                    <div class="close-button">閉じる</div>
                </div>
            </nav>
            <div class="nav-mask"></div>
        </div>
        <div class="header-logo-wrap">
            <a href="/">SSENCE</a>
        </div>
        <div class="header-right-wrap">
            
            <nav class="hr_language">
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
            <div class="hr-hosiimono-list">
                <a href = "">WishList</a>
            </div>
            <div class="hr-shopingcart">
                <a href = "/cart">ShopingCart</a>
            </div>
        </div>


    </div>
    <script>
        const closeButtonElement = document.getElementsByClassName('close-button')[0]
        const navMenuElement = document.getElementsByClassName('footer-nav')[0]
        const serchElement = document.getElementsByClassName('kensaku')[0]
        const navMaskElement = document.getElementsByClassName('nav-mask')[0]
        const navSearchGridElement = document.getElementsByClassName('nav-serch-grid')[0]

        serchElement.addEventListener('click', () => {
            navMenuElement.style['display'] = 'inline'
            navMaskElement.style['display'] = 'inline'
            console.log('kensaku click')
        })

        closeButtonElement.addEventListener('click', () => {
            navMenuElement.style['display'] = 'none'
            navMaskElement.style['display'] = 'none'
        })

        function placeholderChange(queryName) {
            return navSearchGridElement.placeholder = queryName

        }
    </script>
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