<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- MainCSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">

    <!-- END: Styles -->
</head>

<body>
    @include('components.header')
    <div class="nk-main">
        <div class="nk-gap-2"></div>
        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><span class="fa fa-angle-right"></span></li>
                <li><span>@yield('breadcrumbs')</span></li>
            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('components.footer')
    @include('components.page-background')
    @include('components.modal')
    <!-- START: Scripts -->

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/gsap/src/minified/TweenMax.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- MainJS -->
    <script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
</body>

</html>