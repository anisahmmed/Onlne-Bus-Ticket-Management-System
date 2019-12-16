@extends('homepage.app')
@section('title')
Online Bus | Ticket
@endsection

@section('content')

    <!-- Main -->
    <main class="main" role="main">
        <!-- Intro -->
        <div class="intro">
            <div class="wrap">
                <div class="textwidget">
                    <h1 class="wow fadeInDown">Need To Buy Bus Ticket?</h1>
                    <h2 class="wow fadeInUp">You've come to the right place.</h2>
                    <div class="actions">
                        <a href="{{ route('bus_info') }}" title="Make a booking" class="btn large color wow fadeInRight anchor">Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Intro -->


        <!-- Services iconic -->
        <div class="services iconic white">
            <div class="wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="one-third wow fadeIn">
                        <span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
                        <h3>Fixed rates</h3>
                        <p>Here ticket price is fixed</p>
                    </div>
                    <!-- //Item -->

                    <!-- Item -->
                    <div class="one-third wow fadeIn" data-wow-delay=".2s">
                        <span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
                        <h3>Reliable Journey</h3>
                        <p>We are ensuring your reliable journey. </p>
                    </div>
                    <!-- //Item -->

                    <!-- Item -->
                    <div class="one-third wow fadeIn" data-wow-delay=".4s">
                        <span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
                        <h3>No extra booking fees</h3>
                        <p>We don't take extra booking fees.</p>
                    </div>
                    <!-- //Item -->

                    <!-- Item -->
                    <div class="one-third wow fadeIn">
                        <span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
                        <h3>Easy cancellation</h3>
                        <p>We provide easy booked ticket cancelation.</p>
                    </div>
                    <!-- //Item -->

                    <!-- Item -->
                    <div class="one-third wow fadeIn" data-wow-delay=".2s">
                        <span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
                        <h3>Booking flexibility</h3>
                        <p>Our Booking procedures are very much fexible and user friendly.</p>
                    </div>
                    <!-- //Item -->

                    <!-- Item -->
                    <div class="one-third wow fadeIn" data-wow-delay=".4s">
                        <span class="circle"><span class="icon icon-themeenergy_call"></span></span>
                        <h3>24h customer service</h3>
                        <p>We provide 24/7 hour customer service.</p>
                    </div>
                    <!-- //Item -->

                </div>
            </div>
        </div>
        <!-- //Services iconic -->

        <!-- Call to action -->
        <div class="black center" style="color: #fff;">
            <div class="wrap" style="color: #fff;">
              <h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Travel is never a matter of money, but of courage.</h6>
              <p class="wow fadeInUp">Travel makes one modest. You see what a tiny place you occupy in the world. </p>
              <p class="meta wow fadeInUp">– Gustave Flaubert</p>

            </div>
        </div>
        <!-- //Call to action -->

        <!-- Services -->
        <div class="services boxed white" id="services">
            <!-- Item -->
            {{-- <article class="one-fourth wow fadeIn" data-wow-delay=".6s">
                <figure class="featured-image">
                    <img src="images/uploads/img3.jpg" alt="" />
                    <div class="overlay">
                        <a href="services.html" class="expand">+</a>
                    </div>
                </figure>
                <div class="details">
                    <h4><a href="services.html">Helicopter transfers</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <a class="more" title="Read more" href="services.html">Read more</a>
                </div>
            </article> --}}
            <!-- //Item -->
        </div>
        <!-- //Services -->

        <!-- Testimonials -->
        {{-- <div class="testimonials center black">
            <div class="wrap">
                <h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Travel is never a matter of money, but of courage.</h6>
                <p class="wow fadeInUp">Travel makes one modest. You see what a tiny place you occupy in the world. </p>
                <p class="meta wow fadeInUp">– Gustave Flaubert</p>
            </div>
        </div> --}}
        <!-- //Testimonials -->

        <div class="partners white center">
            <div class="wrap">
                <h2 class="wow fadeIn" style="color:#5B2192; font-weight: bold;">AVIALABLE BUS OPERATORS</h2>

                @foreach($all_operator as $operators)
                <div class="one-fifth wow fadeIn" data-wow-delay=".2s">
                <i class="fa fa-bus" style="color:green; font-size: 16px;" aria-hidden="true"></i>
                    <h5 style="color: black;">{{ $operators->operator_name }}</h5>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Call to action -->
        <div class="gray cta">
            <div class="wrap">

            </div>
        </div>
        <!-- //Call to action -->

        <div class="partners white center">
            <div class="wrap">
                <h2 class="wow fadeIn" style="color:#5B2192;">POPULAR BUS ROUTES</h2>

                @foreach($all_bus_route as $bus_routes)
                <div class="one-fifth wow fadeIn" data-wow-delay=".2s">
                    <i class="fa fa-map-marker" style="color: #5B2192; font-size: 20px;" aria-hidden="true"></i>
                    <h5 style="color: black;">{{ $bus_routes->bus_route }}</h5>
                </div>
                @endforeach
            </div>
        </div>


    </main>
    <!-- //Main -->

@endsection
