@extends('homepage.app')
@section('title')
About Us
@endsection

@section('content')

<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>About us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="{{ url('/') }}" title="Home">Home</a></li>
							<li>About us</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->

		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content three-fourth textongrey">
					<h2>Our story</h2>
					<p>It is a premium online booking portal which allows you to purchase tickets for various bus services, across the country.
						 It also lets you purchase travel tickets in the simplest, easiest,
						 smartest and most convenient way.</p>
					<p>Search for bus availability, choose your preferred seat,
							purchase bus tickets with utmost convenience using your mobile phone.
							It can't get simpler than this!</p>
						</div>
				<!--- //Content -->

				<!--- Sidebar -->
				<aside class="one-fourth sidebar right offset">
					<!-- Widget -->
					<div class="widget">
						<h4>Why book with us?</h4>
						<div class="textwidget">
							<h5>Reliable and Safe</h5>
							<p>Our services are so much reliable and safe.</p>
							<h5>No hidden fees</h5>
							<p>There is no hidden fees.</p>
							<h5>We’re Always Here</h5>
							<p>We are always here for providing sevice to you.</p>
						</div>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->

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

@endsection
