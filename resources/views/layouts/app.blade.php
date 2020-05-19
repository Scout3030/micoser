<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MICOSER - Minería, construcción y servicios Rodrigos</title>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/icon.png')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}" class="color-switcher-link">
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/vendor/respond.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <![endif]-->

    @stack('styles')

</head>
<body>
    <!-- <div id="app"> -->
        <!-- wrappers for visual page editor and boxed version of template -->
        @include('shared.preloader')

        <div id="canvas">
            <div id="box_wrapper">

                @include('shared.header')

                @yield('content')

                @include('shared.footer')

            </div>
        </div>

    <!-- </div> -->
    <script src="{{asset('js/compressed.js')}}"></script>
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('scripts')
</body>
</html>
