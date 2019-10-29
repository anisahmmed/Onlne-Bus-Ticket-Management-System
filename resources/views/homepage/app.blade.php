<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
        @yield('title')
    </title>
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic" rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/dropdown.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flexslider.css') }}" />
    <link rel="stylesheet/less" href="{{ asset('frontend/assets/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/homepage7.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link href="{{ asset('frontend/assets/css/skin.less" rel="stylesheet/less') }}">
    @yield('css')
    
    </head>
    <body>
        <!--Wrapper Section Start Here -->
        <div id="wrapper" class="homepage homepage-3 homepage7-wrap">
            <!--header Section Start Here -->
            <header id="header" class="header homepage7-header">
                <!-- primary header Start Here -->
                <div class="primary-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <ul class="link-wrap clearfix">
                                    <li class="mail">
                                        <img src="assets/images/icon-mail.png" alt="" />
                                        <span><a class="email-us" href="https://theemon.com/cdn-cgi/l/email-protection#31585f575e714543505f42415e43454559545c541f525e5c"><span class="__cf_email__" data-cfemail="d7beb9b1b897a3a5b6b9a4a7b8a5a3a3bfb2bab2f9b4b8ba">[email&#160;protected]</span></a></span>
                                    </li>
                                    <li>
                                        <a href="tel:5917890123"> <i class="fa fa-phone-square"> </i> 591 7890 123 </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-clock-o"> </i> Mon - Sat 9:00 - 18:00 </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-6">
                                <div class="social-wrap clearfix">

                                    <ul class="social">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- primary header Ends Here -->
                <!-- main header Starts Here -->
                <div class="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <a href="index.html" class="logo"> <img src="assets/images/logo.png" alt="" /> </a>

                            </div>

                            <div class="col-xs-12 hidden-xs col-sm-9">

                                <div class="call-us">
                                    <ul>
                                        <li>
                                            <img src="assets/images/iphone.png" alt="" />
                                            <span class="transport">CALL US NOW FOR <span></span> ANY QUERY</span>
                                        </li>
                                        <li>
                                            <a href="tel:5917890123">01926-702026</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- secondary header Starts Here -->
                <div class="secondary-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-10 custom-nav">
                                <nav>
                                    <div id='cssmenu'>
                                        <ul class="navigation">
                                            <li class='active'>
                                                <a href='#'>Home</a>
                                            </li>
                                            <li>
                                                <a href="about-us.html">about us</a>
                                            </li>
                                            <li>
                                                <a href="#;">services</a>
                                            </li>
                                            <li>
                                                <a href="#">blog</a>
                                            </li>
                                            <li>
                                                <a href="location.html">locations</a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">contact</a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">Login</a>
                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                                <div class="nav-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <a href="request-a-quote.html" class="request">request a quote</a>
                            </div>
                            <!-- secondary header Ends Here -->
                        </div>
                    </div>
                </div>

                <!-- main header Ends Here -->
            </header>
            <!--header Section Ends Here -->

@yield('content')


<!--Footer area starts Here -->
<footer id="footer">
    <!--Footer box starts Here -->
    <div class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="quick-links">
                        <h5>QUICK LINKS</h5>
                    </div>
                    <div class="quick-list">
                        <ul>
                            <li>
                                <a href="#">ground shipping</a>
                            </li>
                            <li>
                                <a href="#">air freight</a>
                            </li>
                            <li>
                                <a href="#">sea freight</a>
                            </li>
                            <li>
                                <a href="#">storage &amp; packaging</a>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-list">
                        <ul>
                            <li>
                                <a href="#">rail shipping</a>
                            </li>
                            <li>
                                <a href="#">logistic solutions</a>
                            </li>
                            <li>
                                <a href="#">cargo shipping</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="our-address">
                        <h5>contact us</h5>
                        <div class="address">
                            <h6>transport king</h6>
                            <address>
                                Contact Address will appear here, some text gonna
                                appear here, Ney York City, - 10001, USA
                            </address>
                            <div class="phone">
                                <span>phone : <a href="tel:5917890123">591 7890 123</a></span>
                                <span>email : <a href="mail.html"><span class="__cf_email__" data-cfemail="d9b0b7bfb699adabb8b7aaa9b6abadadb1bcb4bcf7bab6b4">[email&#160;protected]</span></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="sign-up">
                        <h5>newsletter signup</h5>
                        <p>
                            If you want receive our all weekly updates about new
                            offers and discount, signup below.
                        </p>
                        <form>
                            <input id="mail" type="text" placeholder="Email Address" name="email" />
                            <!-- <input id="submit" type="submit" value="" class="fa fa-paper-plane-o" /> -->
                            <button class="fa fa-paper-plane"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row custom-row">
                <div class="col-xs-12 col-sm-5">
                    <div class="copyright">
                        <span>Copyright 2019. All Rights Reserved by <a href="http://github.com/anisahmmed">Anis Ahmmed.</a></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 no-wrap-mobile">
                    <div class="footer-nav">
                        <ul>
                            <li>
                                <a href="#">terms of use</a>
                            </li>
                            <li>
                                <a href="#">legal desclaimer</a>
                            </li>
                            <li>
                                <a href="#">privacy policy</a>
                            </li>
                            <li>
                                <a href="#">support</a>
                            </li>
                            <li>
                                <a href="#">sitemap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer box ends Here -->
</footer>
<!--Footer area ends Here -->

        

        <script type="text/javascript" data-cfasync="false" src="{{ asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/theme-option/style-switcher/assets/js/less.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.selectbox-0.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.bxslider.js') }}"></script>

        <!--Parrallax -->
        <script type="text/javascript" src="{{ asset('frontend/assets/js/parallax.js') }}"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/revolution.js') }}"></script>

        <!-- Switcher Js -->
        <script src="{{ asset('frontend/assets/js/theme-option/style-switcher/assets/js/style.switcher.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js') }}"></script>
        <!-- Switcher Js -->

        <script src="{{ asset('frontend/assets/js/script.js" type="text/javascript') }}"></script>
        @yield('js')
        <script type="text/javascript" src="{{ asset('frontend/assets/js/site.js') }}"></script>

    </body>


</html>