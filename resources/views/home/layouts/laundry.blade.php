<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || Qondri || Qondri HTML Template For Londri</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/template/laundry/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="/template/laundry/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="/template/laundry/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/template/laundry/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Qondri HTML Template For Londri" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="/template/laundry/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/qondri-icons/style.css">
    <link rel="stylesheet" href="/template/laundry/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/template/laundry/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/template/laundry/assets/css/qondri.css" />
    <link rel="stylesheet" href="/template/laundry/assets/css/qondri-responsive.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="/template/laundry/assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="clearfix main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>66 Broklyn Street, USA</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="clearfix main-menu">
                <div class="clearfix main-menu-wrapper">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="{{route('index')}}"><img src="/template/laundry/assets/images/resources/logo-1.png"
                                    alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__btn-box">
                            <a href="{{route('contact')}}" class="thm-btn main-menu-wrapper__btn">Schedule a Pickup <span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="current">
                                    <a href="{{route('index')}}">Home</a>

                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('prices')}}">Prices</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Our Services</a>
                                    <ul>
                                        <li><a href="{{route('services')}}">Services</a></li>
                                        <li><a href="{{route('dryCleaning')}}">Dry Cleaning</a></li>
                                        <li><a href="{{route('steamIron')}}">Steam Iron</a></li>
                                        <li><a href="{{route('laundryService')}}">Laundry Service</a></li>
                                        <li><a href="stain-removal.html">Stain Removal</a></li>
                                        <li><a href="{{route('curtainsWash')}}">Curtains Wash</a></li>
                                        <li><a href="{{route('commercialLaundry')}}">Commercial Laundry</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="main-menu-wrapper__search-call">
                            <div class="main-menu-wrapper__call">
                                <div class="main-menu-wrapper__call-icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="main-menu-wrapper__call-number">
                                    <p>Call Anytime</p>
                                    <h5><a href="tel:926668880000">+92 666 888 0000</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        {{ $slot }}

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(/template/laundry/assets/images/shapes/site-footer-shape.png);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="{{route('index')}}"><img
                                            src="/template/laundry/assets/images/resources/logo-2.png"
                                            alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Cleaning Clothes have Never
                                        Been this Easy!</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="clearfix footer-widget__column footer-widget__links">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="clearfix footer-widget__links-list list-unstyled">
                                    <li><a href="{{route('services')}}">Our Services</a></li>
                                    <li><a href="{{route('dryCleaning')}}">Best Cleaning</a></li>
                                    <li><a href="{{route('prices')}}">Prices & Rates</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('contact')}}">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="clearfix footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">66 Road Broklyn Street, 600
                                    New York, USA</p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <a href="tel:926668880000"> +92 666 888 0000</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="clearfix footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">Subscribe to our newsletter for daily new and
                                    updates</p>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2021 by <a
                                        href="#">BracketWeb</a>
                                </p>
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="{{route('about')}}">Terms & Condition</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="{{route('about')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{route('index')}}" aria-label="logo image"><img
                        src="/template/laundry/assets/images/resources/logo-2.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@qondri.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="/template/laundry/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/template/laundry/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/template/laundry/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/template/laundry/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/template/laundry/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/template/laundry/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/template/laundry/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/template/laundry/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/template/laundry/assets/vendors/wow/wow.js"></script>
    <script src="/template/laundry/assets/vendors/isotope/isotope.js"></script>
    <script src="/template/laundry/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/template/laundry/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/template/laundry/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/template/laundry/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/template/laundry/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/template/laundry/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/template/laundry/assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="/template/laundry/assets/js/qondri.js"></script>
</body>

</html>
