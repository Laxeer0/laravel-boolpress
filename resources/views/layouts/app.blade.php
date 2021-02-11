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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
            <div class="wrapper">
                    <!-- Sidebar  -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3><a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a></h3>
                        </div>
                        
                        <ul class="list-unstyled components">
                            <li class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ Request::segment(1) == 'posts' ? 'active' : '' }}">
                                <a href="{{ route('posts.index') }}">Posts</a>
                            </li>
                            
                        </ul>
                        <ul class="list-unstyled CTAs">
                            @guest
                                <li>
                                    <a href="{{ route('login') }}" class="download">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="article">{{ __('Register') }}</a>
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
                    </nav>

        <!-- Page Content  -->
        <div id="content">
           <div class="row py-4">
            @section('content')

            @show
            </div>
        </div>
    </div>
</div>
</body>
</html>
