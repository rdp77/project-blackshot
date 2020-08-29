<header class="nk-header nk-header-opaque">
    <!-- START: Top Contacts -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-right">
                <ul class="nk-social-links">
                    <li><a class="nk-social-facebook" target="_blank" href="#"><span class="fab fa-facebook"></span></a>
                    </li>
                    <li><a class="nk-social-discord" target="_blank" href="#"><span class="fab fa-discord"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                <a href="/" class="nk-nav-logo">
                    <img src="assets/images/logo.png" alt="" width="150">
                </a>
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    <li>
                        <a href="{{ route('rankingplayer') }}">
                            Ranking Player
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rankingclan') }}">
                            Ranking Clan
                        </a>
                    </li>
                    <li class=" nk-drop-item">
                        <a href="javascript:void(0)">
                            Account
                        </a>
                        <ul class="dropdown">
                            <li>
                                <a data-toggle="modal" data-target="#modalLogin" style="cursor: pointer">
                                    Sign In
                                </a>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#forgotPassword" style="cursor: pointer">
                                    Forgot Password
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
            <a href="/" class="nk-nav-logo">
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