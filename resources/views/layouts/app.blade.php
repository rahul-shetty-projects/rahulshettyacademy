<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RSAcademy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('backend/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    @if(false)
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    RS<span>Academy</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </div>
    @else
    <div id="app">
        <div class="container-fluid" id="wrapper">
            <div class="row">
                @guest
                <main class="col-xs-12 col-sm-12 col-lg-12 col-xl-12 pt-3 pl-4 ml-auto">
                    <section class="row">
                        <div class="col-sm-12">
                            <section class="row">
                                <div class="col-12 mb-2">
                                    <div class="card mb-4" style="padding: 60px;background: #eaeaea;">
                                        @yield('content')
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                </main>
                @else
                <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
                    <h1 class="site-title"><a href="{{ url('/') }}"><em class="fa fa-forumbee"></em> RS<span>Academy Admin</span></a></h1>

                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
                    <ul class="nav nav-pills flex-column sidebar-nav">
                        <!-- <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/home') }}"><em class="fa fa-dashboard"></em> Dashboard</a></li> -->
                        <li class="parent nav-item"><a class="nav-link" data-toggle="collapse" href="#sub-item-1">
                            <em class="fa fa-group">&nbsp;</em> Courses <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
                        </a>
                            <ul class="children collapse" id="sub-item-1">
                                <li class="nav-item"><a class="nav-link" href="{{ route('course.showCourseForm') }}">
                                    Add
                                </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('course.listCourses') }}">
                                    Manage
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.listProjectSubscribers') }}"><em class="fa fa-dashboard"></em> Subscribers </a></li>
                    </ul>

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="logout-button"><em class="fa fa-power-off"></em> Signout</a></nav>
                <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
                    <header class="page-header row justify-center">
                        <div class="col-md-6 col-lg-8" >
                            <h1 class="float-left text-center text-md-left">{{ $page_title}}</h1>
                        </div>
                        <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/images/mypic.jpg') }}" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
                            <div class="username mt-1">
                                <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                <h6 class="text-muted">Super Admin</h6>
                            </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
                                 <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
                                 <!-- <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div> -->
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <em class="fa fa-power-off mr-1"></em>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                        </div>
                        <div class="clear"></div>
                    </header>
                    <section class="row">
                        <div class="col-sm-12">
                            <section class="row">
                                <div class="col-12 mb-2">
                                    <div class="card mb-4">
                                        @yield('content')
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                </main>
                @endguest
            </div>
        </div>
    </div>
    @endif
</body>
</html>
