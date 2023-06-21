<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  <!-- CSRF Token -->  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--  <!-- Fonts -->  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10" rel="stylesheet">
    {{--  <!-- Styles -->  --}}
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/examples/sidebars/" rel="canonical">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/tela_perfil/style.css') }}">
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --}}
    {{--  <link href="{{ asset('css/alert.css') }}" rel="stylesheet">  --}}
    <link src="{{ asset('assets/dist/css/tela_perfil/style.css') }}" rel="stylesheet">
    <link src="{{ asset('assets/dist/css/navbar.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-QO3qIBhE6UH7xu8/Cm4Y4v0pRLiDRKF7V5Z5f0ZSvCxy0d/yG7VCAf/zUiRYnKjbmRe+SCSDcXGrszZTi43Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="{{ asset('assets/dist/css/quiz/quiz.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    {{--  <link href="sidebars.css" rel="stylesheet">  --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('assets\js\color-modes.js') }}"></script>


</head>

<body style="min-height:90vh;">
    <div id="app">

        {{--  Navbar  --}}
        <nav class="navbar navbar-expand-md p-1 shadow-sm">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
                        href="{{ route('home') }}">
                        <img src="{{ asset('/img/logo_securelearn.png') }}" height="60px" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                {{--  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" data-bs-theme="dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">  --}}
                {{--  <!-- Left Side Of Navbar -->  --}}
                <ul class="navbar-nav mr-auto">

                </ul>

                {{--  <!-- Right Side Of Navbar -->  --}}
                <ul class="navbar-nav ml-auto">
                    {{--  <!-- Authentication Links -->  --}}
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
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="home/profile">{{ __('Profile') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
        {{--  @yield('layout.body.Teste.teste')
            @yield('layout.body.register.register')
            @yield('layout.body.login.login')  --}}
    </main>
    </div>

    <footer class="card-footer container flex-shrink-0 py-4 align-content-center">
        <div class="container text-center">
            <p>&copy; 2023 Company, Inc. &middot; <a href="{{ route('termos') }}">Termos de Privacidade</a></p>
        </div>
    </footer>
    {{--  <footer id="sticky-footer" class="flex-shrink-0 py-4 text-dark-50">
        <div class="container text-center">
            <small>Made with ❤️ by <a href="https://www.youtube.com/channel/UCPj8ztcYe1D6SSuXPDpupeA"
                    style="text-decoration: none;">Seven Stac</a></small>
        </div>
    </footer>  --}}

</body>

</html>
