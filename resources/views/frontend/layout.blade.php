<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{isset($title) ? $title:"RS Academy" }}</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{isset($description) ? $description:"RS Academy" }}"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color-themes/primary/red-color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color-themes/secondary/red-color.css') }}" rel="stylesheet">
    @yield('page-style-files')
    <style>.header-upper{border-bottom:1px solid #dadde2}.subscribe-style-one a.theme-btn{color:#fff;background:#29303b;padding:10px 35px;font-weight:700;border:2px solid #29303b;margin-top:20px}.subscribe-style-one a.theme-btn:hover{color:#ec5252;background:#fff;border-color:#ec5252}.preloader{position:absolute;height:100%;width:100%;top:0;bottom:0;left:0;right:0;z-index:99999;background:#fff}.ripple-loader{position:relative;width:75px;height:75px;margin:20% auto}a.new-navbar-highlighter:before{content:'NEW';position:absolute;right:-10px;color:red;top:36px;font-weight:bolder;font-size:8px}li.new-navbar-highlighter:before{content:'NEW';position:absolute;right:5px;color:red;top:5px;font-weight:bolder;font-size:8px}@keyframes highlight{0%{font-size:5px}50%{font-size:12px}100%{font-size:8px}}.ripple-loader div{position:absolute;border:6px solid #ec5252;border-radius:50%;animation:ripple-loader 1.8s ease-out infinite}.ripple-loader div:nth-child(2){border:6px solid #29303b}.ripple-loader div:nth-child(3){border:6px solid #25ac5a}.ripple-loader div:nth-child(2){animation-delay:-.6s}.ripple-loader div:nth-child(3){animation-delay:-1.2s}@keyframes ripple-loader{0%{top:32px;left:32px;width:0;height:0;opacity:1}100%{top:0;left:0;width:64px;height:64px;opacity:0}}.preloader span{border:10px solid #29303b;border-radius:50%;border-top:10px solid #ec5252;background:#ec5252;width:60px;display:block;height:60px;-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite;top:calc(50% - 30px);left:calc(50% - 30px);position:fixed}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0)}100%{-webkit-transform:rotate(360deg)}}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.social-icon-one li{margin-right:15px}.fa.fa-linkedin{color:#0173b0}.fa.fa-youtube{color:#f34423}.main-menu .navigation>li>ul{width:100px}.main-menu .navigation .dropdown .dropdown-toggle:before{display:none}.main-menu .navigation .dropdown .dropdown-menu a{font-weight:500}.header-top.sales-end-header{background:#eceb98;color:#555;text-align:center}.close-header-top{position:absolute;right:18px;top:12px;font-weight:700;font-size:20px;cursor:pointer;color:#a0a0a0}.header-top-link{color:#000;text-decoration:underline;font-weight:bolder}</style>
    <style>.container{margin-top:20px}.carousel-indicators .active{background-color:#2980b9}.carousel-inner img{width:100%;max-height:420px}.carousel-inner>.item{height:420px}.carousel-control{width:0}.carousel-control.left,.carousel-control.right{opacity:1;background-image:none;background-repeat:no-repeat;text-shadow:none}.carousel-control.left span{padding:15px}.carousel-control.right span{padding:15px}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:45%;z-index:5;display:inline-block}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:0}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:0}.carousel-control.left span,.carousel-control.right span{background-color:#000}.carousel-control.left span:hover,.carousel-control.right span:hover{opacity:.7}.header-text{position:absolute;top:150px;left:1.8%;right:auto;width:96.66666666666666%;color:#29303b}.header-text h2{font-family:Montserrat,sans-serif;font-weight:900;font-size:30px}.header-text h2 span{text-shadow:1px 1px 4px #fff}.header-text h2 span strong{color:#fff;background:#ec5252;text-shadow:none}.header-text h3{font-family:Lato,sans-serif;font-size:20px}.header-text h3 span{color:#29303b;margin-top:2px;text-shadow:1px 1px 4px #fff}.btn-min-block{min-width:170px;line-height:26px}.btn-theme{color:#fff;background-color:#ec5252;border:2px solid #ec5252;margin-right:15px;font-size:15px;font-family:Montserrat,sans-serif;font-weight:700}.btn-theme:hover{color:#ec5252;background-color:transparent;border-color:#ec5252}.services-style-one .inner-box .icon-box{width:50px;height:50px;font-size:30px;margin-top:-23px;line-height:52px}.services-style-one .inner-box h3{margin-top:5px;margin-bottom:5px;height:75px}.services-style-one .inner-box h3{text-decoration:underline;color:#ec5252}.services-style-one .inner-box .text{font-weight:600;min-height:115px}.price-section ul li{text-align:justify;font-family:Montserrat,sans-serif;color:#333;font-size:17px}.view-all-courses-btn{background:#ec5252;border:2px solid #ec5252;border-radius:0;padding:10px 30px;font-size:19px;font-weight:700}.view-all-courses-btn:hover{background:#fff;color:#ec5252;border:2px solid #ec5252;border-radius:0;padding:10px 30px;font-size:19px;font-weight:700}.sec-title h2{font-size:40px}.onoffswitch4{position:relative;width:90px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.onoffswitch4-checkbox{display:none}.onoffswitch4-label{display:block;overflow:hidden;cursor:pointer;border:2px solid #333;border-radius:0}.onoffswitch4-inner{display:block;width:200%;margin-left:-100%;-moz-transition:margin .3s ease-in 0s;-webkit-transition:margin .3s ease-in 0s;-o-transition:margin .3s ease-in 0s;transition:margin .3s ease-in 0s}.onoffswitch4-inner:after,.onoffswitch4-inner:before{display:block;float:left;width:50%;height:30px;padding:0;line-height:26px;font-size:14px;color:#fff;font-family:Trebuchet,Arial,sans-serif;font-weight:700;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;border:2px solid transparent;background-clip:padding-box}.onoffswitch4-inner:before{content:"Dollar($)";padding-left:5px;background-color:#fff;color:#ec5252;font-size:12px}.onoffswitch4-inner:after{content:"Rupee(₹)";padding-right:5px;background-color:#fff;color:#ec5252;text-align:right;font-size:12px}.onoffswitch4-switch{display:block;width:25px;margin:0;background:#333;position:absolute;top:0;bottom:0;right:65px;-moz-transition:all .3s ease-in 0s;-webkit-transition:all .3s ease-in 0s;-o-transition:all .3s ease-in 0s;transition:all .3s ease-in 0s}.onoffswitch4-checkbox:checked+.onoffswitch4-label .onoffswitch4-inner{margin-left:0}.onoffswitch4-checkbox:checked+.onoffswitch4-label .onoffswitch4-switch{right:0}.showPrice .amountInDollar{display:none!important}.showPrice.inDollar .amountInRupee{display:none!important}.showPrice .amountInRupee{display:inline!important}.showPrice.inDollar .amountInDollar{display:inline!important}.showPrice li.amountInRupee:nth-child(2){margin-right:0}.courses-block .image{overflow:hidden}.courses-block .image .bundle-tag{display:block;width:120px;color:#fff;font-weight:700;height:24px;background-color:#29303b;-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);position:absolute;text-align:center;line-height:24px;right:-26px;top:22px;font-family:arial;font-size:15px}.bundleUpperWrapper{font-weight:700;color:#555}.bundleUpperWrapper i{margin-right:3px}@media only screen and (max-width:767px){ul.dropdown-menu{position:absolute;min-height:100%;width:100%}ul.dropdown-menu li{width:100%}}</style>
    @yield('css')
    <script data-ad-client="ca-pub-9851078085090971" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        var PROD = false; var API = window.origin + '/api/';
        @if (env('APP_ENV') =='production')
            PROD = true;
        @endif
    </script>
</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <span></span>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div id="showHeader">
            <div class="header-top sales-end-header" id="salesEndHeader">
                <div class="auto-container">
                    <div class="clearfix">
                        <b>Get <a href="lifetime-access" class="header-top-link">30% OFF on Silver and
                                Platinum Packages</a>.</b> Use coupon <b>RAHULSHETTY2105</b> at checkout.<br/>OFFER ends
                        this Sunday <span id="salesEndsIn"></span>
                    </div>
                    <span class="close-header-top" id="closeHeader">&times;</span>
                </div>
            </div>
        </div>
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><span class="icon fa fa-envelope"></span> contact@rahulshettyacademy.com</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <!-- <li><a href="#"><span class="fa fa-facebook"></span></a></li> -->
                            <li><a href="https://www.youtube.com/channel/UCgx5SDcUQWCQ_1CNneQzCRw"><span
                                        class="fa fa-youtube"></span></a></li>
                            <li><a href="https://linkedin.com/in/rahul-shetty-trainer/"><span
                                        class="fa fa-linkedin"></span></a></li>
                            <!-- <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li> -->
                        </ul>
                        <!--login btn-->
                        <div class="login-btn">
                            <a href="https://courses.rahulshettyacademy.com/sign_up" class="theme-btn"><span
                                    class="icon fa fa-user"></span>Register</a>
                        </div>
                        <!--login btn-->
                        <div class="login-btn">
                            <a href="https://courses.rahulshettyacademy.com/sign_in"
                               class="theme-btn register-btn"><span class="icon fa fa-lock"></span>Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo">
                            <a href="/"><img src="assets/images/rs_logo.png" style="height:80px" alt="" title=""></a>
                        </div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="<?php echo ('home' === $route)?'current':''?>"><a href="/">Home</a></li>
                                    <li><a href="https://courses.rahulshettyacademy.com/courses">Courses</a></li>
                                    <li class="<?php echo ('lifetime-access' === $route)?'current':''?>">
                                        <a href="lifetime-access" class="new-navbar-highlighter">All Access plan</a>
                                    </li>
                                    <li class="<?php echo ('learning-path' === $route)?'current':''?>">
                                        <a href="learning-path" class="new-navbar-highlighter">Learning paths</a>
                                    </li>
                                    <li class="<?php echo ('mentorship' === $route)?'current':''?>">
                                        <a href="mentorship">Mentorship</a></li>
                                    <li class="<?php echo ('consulting' === $route)?'current':''?>">
                                        <a href="consulting">Job Support</a></li>
                                    <li class="<?php echo ('practice-project' === $route)?'current':''?>">
                                        <a href="practice-project">Practice</a></li>
                                    <li><a href="https://rahulshettyacademy.com/blog/">Blog</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">More <i
                                                class="glyphicon glyphicon-chevron-down"
                                                style="font-size: 10px;margin-left: 5px;"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="<?php echo ('about-my-mission' === $route)?'current':''?>"?>
                                                <a href="about-my-mission">About us</a></li>
                                            <li class="<?php echo ('part-time-jobs' === $route)?'current':''?>">
                                                <a href="part-time-jobs">Part time jobs</a></li>
                                            <li class="<?php echo ('contact-us' === $route)?'current':''?>">
                                                <a href="contact-us">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" class="img-responsive"><img src="assets/images/rs_logo.png" style="height:50px" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php echo ('home' === $route)?'current':''?>">
                                    <a href="/">Home</a></li>
                                <li><a href="https://courses.rahulshettyacademy.com/courses">Courses</a></li>
                                <li class="<?php echo ('lifetime-access' === $route)?'current new-navbar-highlighter':'new-navbar-highlighter'?>">
                                    <a href="lifetime-access">All Access plan</a></li>
                                <li class="<?php echo ('learning-path' === $route)?'current new-navbar-highlighter':'new-navbar-highlighter'?>">
                                    <a href="learning-path">Learning paths</a>
                                </li>
                                <li class="<?php echo ('mentorship' === $route)?'current':''?>">
                                    <a href="mentorship">Mentorship</a></li>
                                <li class="<?php echo ('consulting' === $route)?'current':''?>">
                                    <a href="consulting">Job Support</a></li>
                                <li class="<?php echo ('practice-project' === $route)?'current':''?>">
                                    <a href="practice-project">Practice</a></li>
                                <li><a href="https://rahulshettyacademy.com/blog/">Blog</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">More <i
                                            class="glyphicon glyphicon-chevron-down"
                                            style="font-size: 10px;margin-left: 5px;"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="<?php echo ('about-my-mission' === $route)?'current':''?>">
                                            <a href="about-my-mission">About us</a></li>
                                        <li class="<?php echo ('part-time-jobs' === $route)?'current':''?>">
                                            <a href="part-time-jobs">Part time jobs</a></li>
                                        <li class="<?php echo ('contact-us' === $route)?'current':''?>">
                                            <a href="contact-us">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->

    @yield('content')


<!--Subscribe Style One-->
    <section class="subscribe-style-one">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <h2>JOIN OUR ACADEMY</h2>
                    <div class="text">Sign up today and get access to "Core Java for Testers" &amp; "QA Resume
                        Preparation" Courses for FREE.
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <!-- <form id="newsletterForm"> -->
                    <div class="form-group text-center">
                        <!-- <input type="email" id="newsletter-email" name="newsletter-email" value="" placeholder="Enter your email" required> -->
                        <a href="https://courses.rahulshettyacademy.com/sign_up" class="theme-btn">JOIN NOW</a>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Style One-->

    <!--Main Footer-->
    <footer class="main-footer">
        <!-- <div class="auto-container">
            <div class="row clearfix">
                <!- -big column- ->
                <div class="big-column col-md-7 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!- -Footer Column- ->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo-box">
                                        <a href="#"><img src="assets/images/rs_logo.png" style="height:80px" alt="" /></a>
                                    </div>
                                    <div class="text">Welcome to QAClick Academy, a fast growing QA consulting, Automation development and Online Course provider based out of Bangalore, India.</div>
                                    <ul class="social-icon-two">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!- -Footer Column / Links Widget- ->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                <div class="widget-content">
                                  <div class="row clearfix">
                                        <ul class="list col-md-7 col-sm-6 col-xs-12">
                                            <li><a href="https://qaclickacademy.usefedora.com/courses">Courses </a></li>
                                            <li><a [routerLink]="'practice-project'">Projects</a></li>
                                            <li><a [routerLink]="'part-time-jobs'">Jobs</a></li>
                                        </ul>
                                        <ul class="list col-md-5 col-sm-6 col-xs-12">
                                            <li><a [routerLink]="'mentorship'">Mentorship</a></li>
                                            <li><a [routerLink]="'consulting'">Consulting</a></li>
                                            <li><a href="http://www.qaclickacademy.com/blog/">Articles</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!- -big column- ->
                <div class="big-column col-md-5 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!- -Footer Column- ->
                        <!- - <div class="footer-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget gallery-widget">
                                <h2>Photo Gallery</h2>
                                <div class="widget-content">
                                    <div class="images-outer clearfix">
                                        <!- -Image Box- ->
                                        <figure class="image-box"><a href="images/resource/courses-1.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
                                        <!- -Image Box- ->
                                        <figure class="image-box"><a href="images/resource/courses-2.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
                                        <!- -Image Box- ->
                                        <figure class="image-box"><a href="images/resource/courses-3.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
                                        <!- -Image Box- ->
                                        <figure class="image-box"><a href="images/resource/courses-4.jpg" class="lightbox-image" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div> - ->

                        <!- -Footer Column- ->
                        <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                            <div class="footer-widget address-widget">
                                <h2>Our Address</h2>
                                <div class="widget-content">
                                    <ul class="list-style-one">
                                        <li><span class="icon flaticon-location-pin"></span>Meenakshi Towers, Road Number 4, Kundanhalli, Bangalore, India</li>
                                        <li><span class="icon flaticon-technology-3"></span>(+1) 323-744-6780</li>
                                        <li><span class="icon flaticon-e-mail-envelope"></span>info@qaclickacademy.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> -->

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">All Right Reserved <a href="#">RahulShettyAcademy</a> &copy; <span
                                id="copyrightYear"></span></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="footer-nav">
                            <li><a href="/about-my-mission">About Us</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="alertWrapper" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div> -->
                <div class="modal-body">
                    <i class="fa fa-check"></i>
                    <p><strong>Thank you.</strong> Mail sent ...!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var arrCourses = [{
        "name": "Selenium Webdriver with Java Basics + Advanced + Interview Guide",
        "author": "Rahul Shetty",
        "imgURL": "assets/images/resource/selenium.jpg",
        "courseURL": "https://qaclickacademy.usefedora.com/p/seleniumwebdriverjavatraining",
        "old_price": "100.99",
        "actual_price": "30",
        "userEnrolled": "2344",
        "userComments": "12",
        "rate": "5"
    },
        {
            "name": "Learn JMETER from Scratch -(Performance + Load) Testing Tool",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/jmeter.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/learn-jmeter-from-scratch-performance-load-testing-tool-2015-06-28-08-33-24-0000",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "Learn SQL in Practical + Database Testing from Scratch",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/sql.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/learn-sql-in-practical-database-testing-from-scratch",
            "old_price": "53.99",
            "actual_price": "25",
            "userEnrolled": "2999",
            "userComments": "16",
            "rate": "5"
        },
        {
            "name": "Appium (Selenium) - Mobile Automation Testing from Scratch",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/appium.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/mobile-automation-using-appiumselenium-3",
            "old_price": "159.99",
            "actual_price": "100",
            "userEnrolled": "2678",
            "userComments": "19",
            "rate": "5"
        },
        {
            "name": "WebServices/REST API Testing with SoapUI",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/soapui.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/webservices-testing-with-soap-ui",
            "old_price": "88.99",
            "actual_price": "35",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },

        {
            "name": "Master Software Testing+Jira+Agile on Live App-Be a TeamLead",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/softwaretesting.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/learn-software-testing-in-practical-become-a-qa-expert",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "Master in Selenium Automation with simple Python Language",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/seleniumpython.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/learn-selenium-automation-in-easy-python-language",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "Cucumber with Java-Build Automation Framework in lesser code",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/cucumber.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/cucumber-with-java-build-automation-framework-in-lesser-code",
            "isFree": true,
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "REST API Testing(Automation) from scratch-Rest Assured java",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/restapi.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/rest-api-testing-automation-from-scratch-rest-assured-java",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "Learn Protractor(Angular Automation) from scratch +Framework",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/protractor.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/learn-protractor-angular-automation-from-scratch-framework",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "Cypress-Modern Automation Testing from Scratch + Framework",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/cypress.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/cypress-modern-automation-testing-from-scratch-framework",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        },
        {
            "name": "SDET/Test Architect Essentials -Road to Full stack QA",
            "author": "Rahul Shetty",
            "imgURL": "assets/images/resource/sdet.jpg",
            "courseURL": "https://qaclickacademy.usefedora.com/p/sdet-test-architect-essentials-road-to-full-stack-qa",
            "old_price": "79.99",
            "actual_price": "25",
            "userEnrolled": "1980",
            "userComments": "14",
            "rate": "5"
        }
    ]
</script>
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/color-settings.js') }}"></script>
<script>
    $(document).ready(function () {

        var $showHeader = $('#showHeader');
        var today = new Date();
        var showHeader = false;

        if (today.getDay() == 5 || today.getDay() == 6 || today.getDay() == 0) {
            var getSession = sessionStorage.getItem("headerClosed");
            if (!getSession) {
                showHeader = true;
            }
        }

        if (showHeader) {
            $showHeader.show();
            countDown(showHeader);
        }
        updateCopyrightYear();


        $('#closeHeader').on('click', function (e) {
            sessionStorage.setItem("headerClosed", 'true');
            var salesEndHeader = document.getElementById('salesEndHeader');
            if (salesEndHeader) {
                salesEndHeader.style.display = 'none';
            }
        });
        $('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            if ($('#newsletter-email').val() == '') {
                $('.error').html('Please fill all the fields');
                return;
            }

            if (validateEmail($('#newsletter-email').val()) == false) {
                $('.error').html('Please enter a valid email address');
                return;
            }

            $('.error').html('');

            var data = {
                email: $('#newsletter-email').val()
            }

            $.ajax({
                type: "POST",
                url: API + "newsletter-subscription",
                data: data,
                success: function (response) {
                    $('#form-submit').val('Log in').removeAttr('disabled');
                    if (response.success) {
                        console.log('success ...');
                        $('#alertWrapper').modal();
                    }
                },
                error: function (error) {
                    $('#form-submit').val('Log in').removeAttr('disabled');
                    $('.error').html(error);
                }
            });
        });
    });

    function updateCopyrightYear() {
        var copyDom = document.getElementById("copyrightYear");
        if (copyDom) {
            var getDate = new Date().getFullYear();
            copyDom.innerHTML = getDate.toString();
        }
    }

    function getNextMonday() {
        // Get the date from now
        var date = new Date();

        // Set target hour/minute/seconds
        date.setHours(0);
        date.setMinutes(0);
        date.setSeconds(0);

        var actualDay = date.getDay();
        var targetDay = 1;

        var diff = targetDay - actualDay;

        // If the diff is less than 0 (we're sunday or monday, or we fall on the exact day, minutes after the target hour) then add a week
        if (diff < 0) { // || (date.getTime() - new Date().getTime()) <= 0
            diff += 7;
        }

        // Finally add the day span to the current date
        date.setDate(date.getDate() + diff);

        return date;
    }

    function countDown(showCounter) {
        // Set the date we're counting down to
        var countDownDate = getNextMonday();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            // distance = countDownDate - now;
            var distance = +new Date(countDownDate) - +new Date(now);

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            if (showCounter) {
                if (distance < 0) {
                    document.getElementById("salesEndsIn").innerHTML = 'Sale Ends!';
                    countDownDate = getNextMonday();
                } else {
                    var getHTML = "<b style='color:#000000'>";
                    if (days) {
                        getHTML += "" + days + "d ";
                    }
                    if (hours) {
                        getHTML += "" + hours + "h ";
                    }

                    getHTML += "" + minutes + "m ";
                    getHTML += "" + seconds + "s ";
                    getHTML += "</b>";
                    document.getElementById("salesEndsIn").innerHTML = getHTML;
                }
            }
        }, 1000);
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

</script>
@yield('page-js-files')
@yield('page-js-script')
</body>
</html>




