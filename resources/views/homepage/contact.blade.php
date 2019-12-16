@extends('homepage.app')
@section('title')
Contact
@endsection

@section('content')
<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Contact us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="{{ url('/') }}" title="Home">Home</a></li>
							<li>Contact</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->


		<div class="wrap">
			<div class="row">

				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>Send us a message</h2>
					<p>If you have any query feel free you can send us message.</p>
				</div>
				<!--- //Content -->

				<!-- Form -->
				<div class="three-fourth">
					<form method="post" action="{{ route('contact_insert') }}" name="contactform" id="contactform">
						@csrf
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Full Name</label>
								<input type="text" id="name" name="name" required/>
							</div>
							<div class="one-half">
								<label for="email">Email Address</label>
								<input type="email" id="email" name="email" required />
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments" name="message" required></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right" />
						</div>
					</form>
				</div>
				<!-- //Form -->

				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help buying?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call black"></span> 01926-702026</p>
						</div>
					</div>
					<!-- //Widget -->

					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="images/uploads/advertisment.jpg" alt="" /></a>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->

@endsection
