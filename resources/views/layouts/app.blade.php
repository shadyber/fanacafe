<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fanacafe') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/css/loaders.css">
    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('css')


</head>
<body>

    <div id="app">

        <!-- preloader -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- end preloader -->
     @include('layouts.components.nav')
        @include('layouts.components.left_sidebar')
        @include('layouts.components.side_search')
        @include('layouts.components.side_cart')
    <!-- slider -->
        <div class="slide">
            <div class="slide-show owl-carousel owl-theme">
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider1.jpg" alt="">
                    <div class="caption">
                        <h2>Welcome to <span>FanaCafe</span></h2>
                        <p>Mobile Template</p>
                    </div>
                </div>
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider2.jpg" alt="">
                    <div class="caption">
                        <h2>Cassava Sauce</h2>
                        <p>Mobile Template</p>
                    </div>
                </div>
                <div class="content">
                    <div class="mask"></div>
                    <img src="images/slider3.jpg" alt="">
                    <div class="caption">
                        <h2>Roasted Meat</h2>
                        <p>Mobile Template</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider -->

        <main class="container">
            @yield('content')
        </main>
    </div>



    <script src="/js/jquery.min.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
@yield('js')
</body>
</html>
