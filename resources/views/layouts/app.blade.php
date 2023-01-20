


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="You can REGISTER your channels! Get more YouTube views and subscribers! FREE Degital marketing bbs tool for your YouTube channels!">
    <meta name="keywords" content="Free Youtube marketing tool, get viewers and subscribers more, followers, impression">
    <title>{{ config('app.name', 'Register your channel! Get more YouTube viewers! Axelrod-BBS') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Register your channel! Get more YouTube viewers! Axelrod-BBS" />
	<meta property="og:description" content="Register your channel! Get more YouTube viewers! Free Youtube marketing tool Axelrod-BBS. Along with other marketing tools such as Sendible,TubeBuddy,VidIQ,YouTube Studio,YouTube Audio Library,Social Blade,LiveCaster 3,YouTube Autosuggest,Repurpose.io,JTV Digital,epidemic sound, pixabay,vlog, and keyword planner etc, you can opt for a premitive means which is registration your URL bywhich your channel public exposure will be increased to the world effectively." />
	<meta property="og:url" content="https://youtube.axelrod.cc" />
	<meta property="og:site_name" content="Register your channel! Get more YouTube viewers! YouTube free digital marketing tool Axelrod-BBS" />
	<meta property="article:modified_time" content="2022-11-14T06:10:46+00:00" />
    <meta property="og:image" content="{{ asset('images/youtube-axelrod-logo.png') }}" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="200" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Register your channel! Get more YouTube viewers! YouTube free digital marketing tool Axelrod-BBS" />
	<meta name="twitter:image" content="{{ asset('images/youtube-axelrod-logo.png') }}" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="2 minutes" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md ">
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
               <img src="{{ asset('images/footer.png') }}" alt="boost your Youtube views, useful digital marketing tool, YouTube Axelrod BBS!"></a>
               <p>[FREE YouTube marketing tool] YouTube Axelrod BBS ©︎2023 copyrights </p>
            </div>
        </footer>
    </div>
</body>
</html>
