<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/backoffice/img/itcj.ico') }}">

    <!--title>{{ config('app.name', 'Laravel') }}</title-->
    <title>{{ config('', 'Desarollo Académico TecNM') }}</title>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}" defer></script-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body style="background-color:#eaf2e3;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #1B396A;" > <!--bg-white -->
            <div class="container">
                <img src="{{ asset('assets/backoffice/img/dda.png') }}" alt="" width="150" height="120"
                    class="d-inline-block align-top"></a>
                <a style="color:#ffffff" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('', 'Desarrollo Académico') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color:#ffffff" class="nav-link">{{ __('') }}</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color:#ffffff" class="nav-link"
                                href="{{ route('alumnos.index') }}">{{ __('Alumnos/Conferencias') }}</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color:#ffffff" class="nav-link"
                                href="{{ route('padres.index') }}">{{ __('Padres/Eventos') }}</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color:#ffffff" class="nav-link"
                                href="{{ route('aspirantes.index') }}">{{ __('Orienta Tec') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color:#ffffff" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link active" aria-current="page" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                    style="color:#ffffff">
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a style="color:#ffffff" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <a class="nav-link active" aria-current="page" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('') }}</a>

                            <a style="color:#ffffff" class="nav-link active" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Logout') }}</a>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('foot')

</html>
