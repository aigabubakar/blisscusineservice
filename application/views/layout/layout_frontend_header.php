
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="authorNmaeHere">
    <meta name="description" content="Online Food Order HTML Template">
    <!-- ======== Page title ============ -->
    <title>Online Food Order HTML Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Expose Font.css >>-->
    <link rel="stylesheet" href="assets/css/expose.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="body-bg">

    <!-- Back To Top start -->
    <!-- <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button> -->

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="Z" class="letters-loading">
                    Z
                </span>
                <span data-text-preloader="Z" class="letters-loading">
                    Z
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            </div>
            <p class="text-center">Loading</p>
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

    <!---- Menu Style 01 -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu_btn" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
            <div class="offcanvas-title" id="offcanvasExampleLabel">
                <img src="assets/img/logo/log-black.png" alt="img">
            </div>
            <button type="button" class="w-32px h-32px rounded d-center theme-bg text-white" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="px-3">
                <ul class="menu-style-offcanvas d-flex flex-column gap-3">
                    <li class="has-toggle menu-thumb">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Home
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu has-homemenu">
                            <li>
                                <div class="homemenu-items px-4 pt-2 d-flex flex-column gap-1">
                                    <div class="homemenu">
                                        <a href="index.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Home
                                        </a>
                                    </div>
                                    <div class="homemenu">
                                        <a href="index-2.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Home 02
                                        </a>
                                    </div>
                                    <div class="homemenu">
                                        <a href="index-3.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Home 03
                                        </a>
                                    </div>
                                    <div class="homemenu">
                                        <a href="index-4.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Home 04
                                        </a>
                                    </div>
                                    <div class="homemenu">
                                        <a href="index-5.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Home 05
                                        </a>
                                    </div>
                                    <div class="homemenu blar-comming">
                                        <a href="error.html"
                                            class="menu-inside fw-semibold text-black text-capitalize d-block">
                                            Coming Soon
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-toggle">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Menu
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu px-4 pt-2">
                            <li><a href="single-food-menu.html">Single Food Menu</a></li>
                            <li><a href="list-layout.html">Menu List</a></li>
                            <li><a href="restaurant-list.html">Restaurant List</a></li>
                            <li><a href="menu-categories.html">Menu Categories</a></li>
                        </ul>
                    </li>
                    <li class="has-toggle">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Shop
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu px-4 pt-2">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="cart-page.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="order-traking.html">Order Tracking</a></li>
                        </ul>
                    </li>
                    <li class="has-toggle">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Blog
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu px-4 pt-2">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-toggle">
                        <a href="javascript:void(0)"
                            class="clickAble border-bottom rounded-1 py-2 pe-3 w-100 d-flex align-items-center justify-content-between">
                            Pages
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu px-4 pt-2">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="team-details.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="restaurant-list.html">Restaurant List</a></li>
                            <li><a href="restaurant-details.html">Restaurant Details 01</a></li>
                            <li><a href="restaurant-details-2.html">Restaurant Details 02</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="error.html">404</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="offcanvas__contact mt-4">
                    <h4 class="mb-2">Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Strits Es/154 Maces Road 1/8 United State</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@example.com"><span
                                        class="mailto:info@example.com">info@example.com</span></a>
                                <a href="mailto:info@example.com"><span
                                        class="mailto:info@example.com">ex@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Sat-friday, 02am -09pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909" class="d-block">365 5552-0127</a>
                                <a href="tel:+11002345909">5421 5545 5422</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="contact.html"
                            class="theme-btn d-inline-flex text-white justify-content-center align-items-center gap-xxl-2 gap-2 fs-16 rounded-1 fw-500 black-clr overflow-hidden">
                            Get Start
                            <i class="fa-solid fa-arrow-right"></i>
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
    <!---- Menu Style 01 End -->

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1 white-variation">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="d-flex align-items-center gap-3">
                        <button type="button"
                            class="destop-bars  w-40px h-40px border-white rounded-circle d-center text-white fs-20"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu_btn">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <a href="contact.html" class="d-sm-flex d-none align-items-center gap-lg-2 gap-1 text-white">
                            <i class="fa-solid fa-phone"></i>
                            <span class="">
                                <span class="fs-10 body-font lh-1 fw-semibold text-white d-block">Hotline Number:</span>
                                <span class="fs-15 body-font fw-semibold text-white d-block">+123 9888 0066</span>
                            </span>
                        </a>
                    </div>
                    <div class="header-left">
                        <a href="cart-page.html"
                            class="d-lg-none d-flex tolly-icon-hover  tolly-icon position-relative w-40px h-40px border-white rounded-circle d-center">
                            <img width="20" src="assets/img/icons/tolly.png" alt="tolly-icon">
                            <span class="count-quan d-center">02</span>
                        </a>
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="assets/img/logo/logo-white.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-flex d-none align-items-center gap-3">
                        <button type="button"
                            class="tolly-icon tolly-icon-hover position-relative w-40px h-40px border-white rounded-circle d-center">
                            <img width="20" src="assets/img/icons/tolly.png" alt="tolly-icon">
                            <span class="count-quan d-center">02</span>
                        </button>
                        <a href="contact.html"
                            class="border-white tolly-icon-hover rounded-pill d-center gap-2 fw-bold text-white fs-14 h-40px px-4">
                            <i class="fa-regular fa-user"></i>
                            Log In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>








<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title><?= getenv('APP_NAME') . ' - ' . $title; ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>frontend/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>frontend/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>frontend/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= base_url(); ?>frontend/images/favicons/site.html" />
    <meta name="description" content=" " />

    <!-- fonts -->
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.googleapis.com/">

    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.gstatic.com/" crossorigin>

    <link
        href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/bcorz-icons/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/vendors/polyglot-language-switcher/polyglot-language-switcher.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/css/styles.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>frontend/css/bcorz-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
