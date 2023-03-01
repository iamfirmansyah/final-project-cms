<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard | Nalika - Material Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts ============================================ -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900"
            rel="stylesheet">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome.min.css') }}">
        <!-- nalika Icon CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/nalika-icon.css') }}">
        <!-- owl.carousel CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/owl.transitions.css') }}">
        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/animate.css') }}">
        <!-- normalize CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/normalize.css') }}">
        <!-- meanmenu icon CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/meanmenu.min.css') }}">
        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">
        <!-- morrisjs CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS ============================================ -->
        <link
            rel="stylesheet"
            href="{{ asset('dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS ============================================ -->
        <link
            rel="stylesheet"
            href="{{ asset('dashboard/css/metisMenu/metisMenu.min.css') }}">
        <link
            rel="stylesheet"
            href="{{ asset('dashboard/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">
        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/responsive.css') }}">
        <!-- modernizr JS ============================================ -->
        <script src="{{ asset('dashboard/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]> <p class="browserupgrade">You are using an
        <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your
        experience.</p> <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="{{ url('dashboard') }}"><img class="main-logo" src="img/logo/logo.png" alt=""/></a>
                    <strong><img src="img/logo/logosn.png" alt=""/></strong>
                </div>
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="#"><img src="{{ asset('dashboard/img/notification/avatar.webp') }}" alt=""/></a>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="has-arrow" href="index.html">
                                    <i class="icon nalika-home icon-wrap"></i>
                                    <span class="mini-click-non">Admin Page</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li>
                                        <a title="Dashboard" href="{{ url('/') }}">
                                            <span class="mini-sub-pro">Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a title="Product List" href="{{ url('products') }}">
                                            <span class="mini-sub-pro">Product List</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button
                                                    type="button"
                                                    id="sidebarCollapse"
                                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n hd-search-rp">
                                                <div class="breadcome-heading">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item">
                                                        <a
                                                            href="#"
                                                            data-toggle="dropdown"
                                                            role="button"
                                                            aria-expanded="false"
                                                            class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user"></i>
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                        </a>
                                                        <ul
                                                            role="menu"
                                                            class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li>
                                                                <a href="register.html">
                                                                    <span class="icon nalika-home author-log-ic"></span>
                                                                    Register</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="icon nalika-user author-log-ic"></span>
                                                                    My Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                    <span class="icon nalika-unlocked author-log-ic"></span>
                                                                    Log Out</a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li>
                                                <a data-toggle="collapse" data-target="#Charts" href="#">Home
                                                    <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li>
                                                        <a href="index.html">Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-list.html">Product List</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list" style="margin-top:8%">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcomb-wp">
                                                <div class="breadcomb-icon">
                                                    <i class="icon nalika-home"></i>
                                                </div>
                                                <div class="breadcomb-ctn">
                                                    <h2>Admin Panel</h2>
                                                    <p>Garden Caffe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
            
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2023 All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery ============================================ -->
        <script src="{{ asset('dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS ============================================ -->
        <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
        <!-- wow JS ============================================ -->
        <script src="{{ asset('dashboard/js/wow.min.js') }}"></script>
        <!-- price-slider JS ============================================ -->
        <script src="{{ asset('dashboard/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS ============================================ -->
        <script src="{{ asset('dashboard/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS ============================================ -->
        <script src="{{ asset('dashboard/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS ============================================ -->
        <script src="{{ asset('dashboard/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS ============================================ -->
        <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS ============================================ -->
        <script
            src="{{ asset('dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS ============================================ -->
        <script src="{{ asset('dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- sparkline JS ============================================ -->
        <script src="{{ asset('dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <!-- float JS ============================================ -->
        <script src="{{ asset('dashboard/js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('dashboard/js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('dashboard/js/flot/curvedLines.js') }}"></script>
        <script src="{{ asset('dashboard/js/flot/flot-active.js') }}"></script>
        <!-- plugins JS ============================================ -->
        <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
        <!-- main JS ============================================ -->
        <script src="{{ asset('dashboard/js/main.js') }}"></script>
    </body>

</html>