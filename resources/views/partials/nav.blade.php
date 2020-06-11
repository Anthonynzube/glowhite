<body>

<div class="main-wrapper">
    <!-- Pre Loader -->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <header class="header-area section-padding-1 transparent-bar pt-45 pb-45">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-2">
                    <div class="menu-icon menu-icon-hm17">
                            <span>
                            <a class="clickable-mainmenu-button" href="#"><i class="dlicon ui-3_menu-left"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8">
                    <div class="logo logo-width text-center">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo/logo-furniture-02.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-2">
                    <div class="header-right-wrap header-right-flex">
                        <div class="same-style header-search">
                            <a class="search-active" href="#">
                                <i class="dlicon ui-1_zoom"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-small-mobile section-padding-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo logo-width">
                        <a href="{{ route('home') }}">
                            <img alt="" src="{{ asset('images/logo/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-header-right-wrap">
                        <div class="header-right-wrap header-right-flex">
                            <div class="same-style header-off-canvas">
                                <a class="header-aside-button" href="#">
                                    <i class="dlicon ui-3_menu-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- aside start -->
    <div class="header-aside-active">
        <div class="header-aside-wrap">
            <a class="aside-close"><i class="dlicon ui-1_simple-remove"></i></a>
            <div class="header-aside-content">
                <div class="mobile-menu-area">
                    <div class="mobile-search">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search entire store…">
                            <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap">
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('instagram') }}">Instagram Shop </a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                    </div>

                </div>
                <div class="aside-contact-info">
                    <ul>
                        <li><i class="dlicon ui-2_time-clock"></i>Monday - Friday: 9:00 - 19:00</li>
                        <li><i class="dlicon ui-1_email-84"></i>Info@la-studioweb.com</li>
                        <li><i class="dlicon tech-2_rotate"></i>(+55) 254. 254. 254</li>
                        <li><i class="dlicon ui-1_home-minimal"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                    </ul>
                </div>
                <div class="social-icon-style mb-25">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                </div>
                <div class="copyright">
                    <p>© 2020 <a href="https://hasthemes.com/">Glowhite Cosmetics.</a> All rights reserved</p>
                </div>
            </div>
        </div>
    </div>

    <!-- main menu start -->
    <div class="clickable-mainmenu-active">
        <div class="clickable-mainmenu-width">
            <a class="mainmenu-close"><i class="dlicon ui-1_simple-remove"></i></a>
            <div class="clickable-mainmenu-wrap clickable-mainmenu-style">
                <nav>
                    <ul class="mb-20">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About </a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('instagram') }}">Instagram</a></li>
                    </ul>
                </nav>
            </div>br
            <div class="clickable-contact">
                <ul>
                    <li><i class="dlicon ui-2_time-clock"></i> Monday - Friday: 9:00 - 19:00</li>
                    <li><i class="dlicon ui-1_email-83"></i> info@example.com</li>
                    <li><i class="dlicon tech-2_rotate"></i> (+612) 2531 5600</li>
                    <li><i class="dlicon ui-1_home-simple"></i> PO Box 1622 Colins Street West Victoria 8077 Australia</li>
                </ul>
                <div class="clickable-social">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a>
                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- search start -->
    <div class="search-content-wrap main-search-active">
        <a class="search-close"><i class="dlicon ui-1_simple-remove"></i></a>
        <div class="search-content">
            <p>Start typing and press Enter to search</p>
            <form class="search-form" action="#">
                <input type="text" placeholder="Search">
                <button class="button-search"><i class="dlicon ui-1_zoom"></i></button>
            </form>
        </div>
    </div>
