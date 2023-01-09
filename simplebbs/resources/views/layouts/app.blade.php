<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- seo -->
    <meta name="description" content="Get more views and subscribers! Degital marketing bbs tool for your youtube, tik tok, twitter, instagram sns channels!">
    <meta name="keywords" content="Youtube, tik tok, snapchat, twitter, instagram, seo, marketing tool, get views subscribers, pv, bbs,Sendible,TubeBuddy,VidIQ,YouTube Studio,YouTube Audio Library,Social Blade,LiveCaster 3,YouTube Autosuggest,Repurpose.io,JTV Digital,epidemic sound, pixabay,vlog, keyword planner">

    <!-- // or not -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- opg -->
    <meta property="og:type" content="Get more views and subscribers! Degital marketing bbs tool for your youtube, tik tok, twitter, instagram sns channels!" />
    <meta property="og:title" content="Youtube, tik tok, snapchat, twitter, instagram, boost your views, useful digital marketing tool, Axelrod BBS!" />
    <meta property="og:description" content="Get more views and subscribers! Degital marketing bbs tool for your youtube, tik tok, twitter, instagram sns channels!" />
    <meta property="og:site_name" content="Axelrod BBS - Food and Travel Categories -" />
    <meta property="og:url" content="http://axelrod.cc/foodandtravel" />
    <meta property="og:image" content="{{ asset('images/axelrod-top-img-sm.png') }}" />
    <!-- Twitterシェア時の表示形式指定 -->
    <meta name="twitter:card" content="summary_large_image" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Axelrod-BBS-Food-And-Travel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ route('task.toppage') }}"><img src="{{ asset('images/axelrod-top-img-sm.png') }}" alt="Get more views and subscribers! Degital marketing bbs tool for your youtube, tik tok, twitter, instagram sns channels!"></a>
        </div>
        
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
                                <a class="nav-link" href="{{ route('task.toppage') }}">{{ __('Useful links') }}</a>
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

        <!-- main -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- footer -->
        <footer class="footer">
            <div class="container text-center">
                <p class="text-muted">©︎2023 Axelrod.cc</p>
            </div>
        </footer>
    </div>
</body>
</html>
