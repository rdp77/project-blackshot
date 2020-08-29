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

    <!-- MainCSS -->
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">

    <!-- END: Styles -->
</head>

<body>
    <div class="nk-main">
        <div class="nk-fullscreen-block">
            <div class="nk-fullscreen-block-top">
            </div>
            <div class="nk-fullscreen-block-middle">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                            <h1 class="text-main-1" style="font-size: 150px;">@yield('code')</h1>
                            <div class="nk-gap"></div>
                            <h2 class="h4">@yield('message')</h2>
                            <div>Apakah Anda ingin kembali ke beranda?</div>
                            <div class="nk-gap-3"></div>
                            <a href="/" class="nk-btn nk-btn-rounded nk-btn-color-white">Kembali Ke Beranda</a>
                        </div>
                    </div>
                    <div class="nk-gap-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- START: Page Background -->

    <div class="nk-page-background-fixed" style="background-image: url('{{ ('assets/images/bg-fixed-3.jpg') }}');">
    </div>

    <!-- END: Page Background -->
    <!-- START: Scripts -->
    <!-- MainJS -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- END: Scripts -->
</body>

</html>