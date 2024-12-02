<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gramentheme">
    <meta name="description" content="Digtek - Digital Marketing Agency Html Template">
    <title>Shared on THEMELOCK.COM - Digtek - Digital Marketing Agency Html Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetsblog/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsblog/css/swiper-bundle.min.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">L</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
                <span data-text-preloader="P" class="letters-loading">P</span>
            </div>
            <p class="text-center">Loading to LSP SMK Telkom Makassar</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top Button -->
    {{-- <button id="back-top" class="back-to-top show">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!-- Mouse Cursor -->
    <div class="mouse-cursor cursor-outer" style="visibility: visible; transform: translate(1782px, 858px);"></div>
    <div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(1782px, 858px);"></div> --}}

    <!-- Offcanvas Area -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="#">
                                <img src="{{ asset('assetsblog/img/logo/black-logo.svg') }}">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">Nullam dignissim, ante scelerisque the is euismod fermentum odio
                        sem semper the is erat, a feugiat leo urna eget eros.</p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="fal fa-envelope"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="fal fa-clock"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am - 05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15"><i class="far fa-phone"></i></div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="main-button">
                            <a href="#">
                                <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i
                                        class="fa-regular fa-arrow-up-right"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section -->
    <!-- Header Section Start -->
    <header id="header" class="header-1 sticky">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img src="assetsblog/img/logo/white-logo.svg" alt="logo-img">
                        </a>
                        <a href="index.html" class="header-logo-2">
                            <img src="assetsblog/img/logo/lsp.png" alt="logo-img" style="width: 150px">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="contact.html">Menu 1</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Menu 2</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Menu 3</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="main-button">
                            <a href="{{ route('contact') }}"> <span class="theme-btn"> Contact Us </span></a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    {{-- <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <section class="footer-section footer-bg fix">
        <div class="container">
            <!-- Footer content -->
            @include('client.footer')
        </div>
    </section>

    <!-- JS Files -->
    <script src="{{ asset('assetsblog/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('assetsblog/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/circle-progress.js') }}"></script>
    {{-- <script src="{{ asset('assetsblog/js/countdowncustom.js') }}"></script> --}}
    <script src="{{ asset('assetsblog/js/jquery.countup.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assetsblog/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assetsblog/js/wow.min.js') }}"></script>
    <script src="{{ asset('assetsblog/js/main.js') }}"></script>
</body>

</html>
