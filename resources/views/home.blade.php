<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Project Blackshot</title>

    {{-- <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK"> --}}

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

    <!-- IonIcons -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/ionicons/css/ionicons.min.css') }}"> --}}

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/flickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/summernote/dist/summernote-bs4.css') }}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>


</head>

<body>
    <header class="nk-header nk-header-opaque">
        <!-- START: Top Contacts -->
        <div class="nk-contacts-top">
            <div class="container">
                <div class="nk-contacts-right">
                    <ul class="nk-social-links">
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-discord" href="#"><span class="fab fa-discord"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">

                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.png" alt="" width="150">
                    </a>

                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="javascript:void(0)">
                                Ranking Player
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Ranking Clan
                            </a>
                        </li>
                        <li class=" nk-drop-item">
                            <a href="javascript:void(0)">
                                Akun
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a data-toggle="modal" data-target="#modalLogin" style="cursor: pointer">
                                        Masuk
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Lupa Password
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">

                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images/logo.png" alt="" width="120">
                </a>
                <div class="nk-navbar-mobile-content">
                    <ul class="nk-nav">
                        <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Navbar Mobile -->
    <div class="nk-main">
        <div class="nk-gap-2"></div>
        <div class="container">
            <!-- START: Image Slider -->
            <div class="nk-image-slider" data-autoplay="8000">
                <div class="nk-image-slider-item">
                    <img src="{{ asset('assets/images/slide-1.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('assets/images/slide-1-thumb.jpg') }}">
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('assets/images/slide-2.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('assets/images/slide-2-thumb.jpg') }}">
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('assets/images/slide-3.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('assets/images/slide-3-thumb.jpg') }}">
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('assets/images/slide-4.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('assets/images/slide-4-thumb.jpg') }}">
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('assets/images/slide-5.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('assets/images/slide-5-thumb.jpg') }}">
                </div>
            </div>
            <!-- END: Image Slider -->

            <!-- START: Categories -->
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-mouse.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">Daftar</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-gamepad.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">Download</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="assets/images/icon-gamepad-2.png" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">Donasi</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Categories -->

            <!-- START: Latest News -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
            <div class="nk-gap"></div>

            <div class="nk-news-box">
                <div class="nk-news-box-list">
                    <div class="nano">
                        <div class="nano-content">


                            <div class="nk-news-box-item nk-news-box-item-active">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-1-sm.jpg"
                                        alt="Smell magic in the air. Or maybe barbecue">
                                </div>
                                <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-4">MMO</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>With what mingled joy and sorrow do I take up the pen to write to my dearest
                                        friend! Oh, what a change between to-day and yesterday! Now I am friendless and
                                        alone...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde">
                                </div>
                                <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-1">Action</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>For good, too; though, in consequence of my previous emotions, I was still
                                        occasionally seized with a stormy sob . After we had jogged on for some little
                                        time, I asked the carrier...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018
                                </div>
                            </div>
                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?">
                                </div>
                                <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>And she went on planning to herself how she would manage it. `They must go by the
                                        carrier,' she thought; `and how funny it'll seem, sending presents to one's own
                                        feet!...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018
                                </div>
                            </div>
                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence">
                                </div>
                                <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-3">Strategy</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>This little wandering journey, without settled place of abode, had been so
                                        unpleasant to me, that my own house, as I called it to myself, was a perfect
                                        settlement to me compared to that...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-5-sm.jpg" alt="He made his passenger captain of one">
                                </div>
                                <img src="assets/images/post-5.jpg" alt="He made his passenger captain of one"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>Just then her head struck against the roof of the hall: in fact she was now more
                                        than nine feet high, and she at once took up the little golden key and hurried
                                        off to the garden door...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018
                                </div>
                            </div>


                            <div class="nk-news-box-item">
                                <div class="nk-news-box-item-img">
                                    <img src="assets/images/post-6-sm.jpg"
                                        alt="At first, for some time, I was not able to answer">
                                </div>
                                <img src="assets/images/post-6.jpg"
                                    alt="At first, for some time, I was not able to answer"
                                    class="nk-news-box-item-full-img">
                                <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer
                                </h3>

                                <span class="nk-news-box-item-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>

                                <div class="nk-news-box-item-text">
                                    <p>This little wandering journey, without settled place of abode, had been so
                                        unpleasant to me, that my own house, as I called it to myself, was a perfect
                                        settlement to me compared to that...</p>
                                </div>
                                <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                                <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2"></div>

            <!-- START: Latest Matches -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Matches</span></h3>
            <div class="nk-gap"></div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-danger">
                            2 : 17
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            Cloud 9
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Counted logic gaming
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 15, 2018 9:00 pm</span>
                        <span class="nk-match-score bg-success">
                            28 : 19
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-4.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Team SoloMid
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-dark-1">
                            13 : 13
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!-- END: Latest Matches -->
        </div>
    </div>
    </div>
    <div class="nk-gap-4"></div>
    <!-- START: Footer -->
    <footer class="nk-footer">
        <div class="nk-copyright">
            <div class="container">
                <div class="nk-copyright-left">
                    PROJECT BLACKSHOT PRIVATED SERVER 2018 - <span id='copyrightYear'>
                        <script>
                            var d = new Date(); var n = d.getFullYear(); document.getElementById('copyrightYear').innerHTML = n;
                        </script> <a href="javascript:void(0)">[-ANDROMAX
                            STUDIO-]</a>
                </div>
                <div class="nk-copyright-right">
                    <ul class="nk-social-links-2">
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-discord" href="#"><span class="fab fa-discord"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->


    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/bg-top-3.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

    <!-- END: Page Background -->



    <!-- START: Login Modal -->
    <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form text-white">
                        <div class="">
                            <div class="">
                                Use email and password:
                                <div class="nk-gap"></div>
                                <input type="email" value="" name="email" class=" form-control" placeholder="Email">
                                <div class="nk-gap"></div>
                                <input type="password" value="" name="password" class="required form-control"
                                    placeholder="Password">
                                <div class="nk-gap"></div>
                                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Login Modal -->




    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
    <script src="{{ asset('assets/object-fit-images/dist/ofi.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

    <!-- Popper -->
    <script src="{{ asset('assets/popper.js/dist/umd/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Sticky Kit -->
    <script src="{{ asset('assets/sticky-kit/dist/sticky-kit.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('assets/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/jarallax/dist/jarallax-video.min.js') }}"></script>

    <!-- imagesLoaded -->
    <script src="{{ asset('assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Flickity -->
    <script src="{{ asset('assets/flickity/dist/flickity.pkgd.min.js') }}"></script>

    <!-- Photoswipe -->
    <script src="{{ asset('assets/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('assets/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

    <!-- Hammer.js -->
    <script src="{{ asset('assets/hammerjs/hammer.min.js') }}"></script>

    <!-- NanoSroller -->
    <script src="{{ asset('assets/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

    <!-- SoundManager2 -->
    <script src="{{ asset('assets/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="{{ asset('assets/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- nK Share -->
    <script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>

    <!-- GoodGames -->
    <script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
</body>

</html>