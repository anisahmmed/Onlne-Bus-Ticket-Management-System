<!DOCTYPE html>
<html>
   
<head>
    <style>
        .action{
            background:url(../images/separator.jpg) 50% 0 no-repeat;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
    <meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
    <meta name="author" content="themeenergy.com">
    
    <title>
        @yield('title')
    </title>
    
    <link rel="stylesheet" href="{{ asset('frontend/front/css/styler.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/front/css/theme-pink.css') }}" id="template-color" />
    {{-- <link rel="stylesheet" href="../../../../ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/front/css/jquery-ui.theme.css') }}" />
@yield('css')
    <link rel="stylesheet" href="{{ asset('frontend/front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/front/css/icons.css') }}" />
    {{-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'> --}}
    <link rel="shortcut icon" href="{{ asset('frontend/front/images/favicon.ico') }}" />{{-- 
    <script src="../../../../use.fontawesome.com/e808bf9397.js"></script> --}}
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    {{-- search --}}
    <link href="{{ asset('search_asset/css/main.css') }}" rel="stylesheet" />
    
  </head>
  
  <body class="home">
        
        <!-- Header -->
        <header class="header" role="banner">
            <div class="wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="#" title="Transfers"><img src="{{ asset('frontend/front/images/transfers.jpg') }}" alt="Transfers" /></a>
                </div>
                <!-- //Logo -->
                
                <!-- Main Nav -->
                <nav role="navigation" class="main-nav">
                    <ul>
                        <li><a href="{{ url('/') }}" title="">Home</a></li>
                        <li><a href="{{ url('/destinations') }}" title="Destinations">Destinations</a></li>
                        <li><a href="{{ url('/blog') }}" title="Blog">Blog</a></li>
                        <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>
                        <li><a href="{{ url('/about') }}" title="Pages">About Us</a></li>
                        <li><a href="{{ url('/customer_login') }}" title="Pages">Login</a></li>
                           
                        @guest
                        @else
                        <li><a>{{ Auth::user()->name }}</a>
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>

                        @endguest
                    </ul>
                </nav>
                <!-- //Main Nav -->
            </div>
        </header>
        <!-- //Header -->

@yield('content')

        <!-- Footer -->
    <footer class="footer black" role="contentinfo">
        <div class="wrap">
            <div class="row">
                <!-- Column -->
                <article class="one-half">
                    <h6>About us</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                </article>
                <!-- //Column -->
                
                <!-- Column -->
                <article class="one-fourth">
                    <h6>Need help?</h6>
                    <p>Contact us via phone or email:</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_call"></span> 01926-702026</p>
                    <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@transfers.com">16103128@iubat.edu</a></p>
                </article>
                <!-- //Column -->
                
                <!-- Column -->
                <article class="one-fourth">
                    <h6>Follow us</h6>
                    <ul class="social">
                        <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
                        <li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
                        <li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
                    </ul>
                </article>
                <!-- //Column -->
            </div>
            
            <div class="copy">
                <p>Copyright 2019, Anis Ahmmed. All rights reserved. </p>
                
                <nav role="navigation" class="foot-nav">
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="Blog">Blog</a></li>
                        <li><a href="#" title="About us">About us</a></li>
                        <li><a href="#" title="Contact us">Contact us</a></li>
                        <li><a href="#" title="Terms of use">Terms of use</a></li>
                        <li><a href="#" title="Help">Help</a></li>
                        <li><a href="#" title="For partners">For partners</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- //Footer -->
    
     <!-- jQuery -->
    {{-- <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../../../../ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script> --}}
    <script src="{{ asset('frontend/front/js/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('frontend/front/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/front/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/front/js/jquery-ui-sliderAccess.js') }}"></script>
    <script src="{{ asset('frontend/front/js/search.js') }}"></script>
    <script src="{{ asset('frontend/front/js/scripts.js') }}"></script>
    <script src="https://use.fontawesome.com/185aa2bd5e.js"></script>
    
    
    <script src="{{ asset('frontend/front/js/styler.js') }}"></script>

@yield('js')
    {{-- search --}}
    <script src="{{ asset('search_asset/js/extention/choices.js') }}"></script>
    <script src="{{ asset('search_asset/js/extention/flatpickr.js') }}"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body>

</html>