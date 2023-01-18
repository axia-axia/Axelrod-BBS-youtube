<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- seo -->
    <meta name="description" content="You can REGISTER your channels! Get more YouTube views and subscribers! FREE Degital marketing bbs tool for your YouTube channels!">
    <meta name="keywords" content="Free Youtube marketing tool, get views subscribers, pv, bbs,Sendible,TubeBuddy,VidIQ,YouTube Studio,YouTube Audio Library,Social Blade,LiveCaster 3,YouTube Autosuggest,Repurpose.io,JTV Digital,epidemic sound, pixabay,vlog, keyword planner">

    <!-- // or not -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- opg -->
    <meta property="og:type" content="You can REGISTER your channels! Get more YouTube views and subscribers! FREE Degital marketing bbs tool for your YouTube channels!" />
    <meta property="og:title" content="boost your Youtube views, useful digital marketing tool, YouTube Axelrod BBS!" />
    <meta property="og:description" content="Get more views and subscribers! Degital marketing bbs tool for your youtube, tik tok, twitter, instagram sns channels!" />
    <meta property="og:site_name" content="YouTube Axelrod BBS - Food and Travel Categories -" />
    <meta property="og:url" content="http://youtube.axelrod.cc" />
    <meta property="og:image" content="{{ asset('images/youtube-axelrod-logo.png') }}" />
    <!-- Twitterシェア時の表示形式指定 -->
    <meta name="twitter:card" content="summary_large_image" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', ' YouTube-Axelrod-BBS') }}</title>

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
                <a href="{{ route('task.toppage') }}"><img src="{{ asset('images/youtube-axelrod-logo.png') }}" alt="boost your Youtube views, useful digital marketing tool, YouTube Axelrod BBS!"></a>
            </div>
        </nav>

        <!-- main -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- footer -->
        <footer class="footer">
            <div class="container text-center">
               <p>[FREE YouTube marketing tool] YouTube Axelrod BBS ©︎2023 copyrights </p>
            </div>
        </footer>
    </div>
</body>
</html>
