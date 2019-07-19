<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ABSSSSALAYI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark   header">
            <div class="container-fluid">
                <a class="nav-link" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button  class="navbar-toggler" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- <li class="nav-item"><a href="/" class="nav-link">Home</a></li> -->
                        <li class="nav-item"><a href="/administration" class="nav-link">Administration</a> </li>
                        <li class="nav-item"><a href="/admission" class="nav-link">Admission</a></li>
                         <li class="nav-item"><a href="/examinations" class="nav-link">External Examinations</a></li>
                         <li class="nav-item"><a href="/results" class="nav-link">Check Result</a></li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="border-radius:0px;opacity:0.85">
                              <a class="dropdown-item" href="/extra">Extra-Curricula Activities</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/skills">Skills Acquisition</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/faq">FAQ</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/terms">Terms of Use</a>
                            </div>
                          </li>
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home" class="dropdown-item">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="viktasoft-footer">
        <span class="Copyright text-center">
          &copy; Copyright 2019
          Abia State Senior Science School, Alayi.
        </span>
        </footer>
    </div>
</body>
</html>
