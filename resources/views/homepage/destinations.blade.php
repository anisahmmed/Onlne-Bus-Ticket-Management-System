@extends('homepage.app')
@section('title')
Destinations
@endsection

@section('content')
<!-- Main -->

	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Destinations</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="{{ url('/') }}" title="Home">Home</a></li>
							<li>Destinations</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					
				
					<!-- TabContent -->
					<div class="tab-content" id="tab1">
						<div class="row">

							<!-- Item -->
							@foreach($all_destination as $destinations)
							<article class="one-fourth">
								<figure class="featured-image">
									<img src="{{ asset('/uploads/destination') }}/{{ $destinations->destination_scenario }}" alt="{{ $destinations->destination }}" />
									<div class="overlay">
									</div>
								</figure>
								<div class="description">
								<h3><a>{{ $destinations->destination }}</a></h3>
								</div>
							</article>
							@endforeach
							<!-- //Item -->
						</div>
					</div>
					<nav aria-label="...">
					  <ul class="pagination">
					
					    <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					      {{ $all_destination->links() }}
					    </li>
					    <li class="page-item">
					      <a class="page-link" >Next</a>
					    </li>
					  </ul>
					</nav>
					
					<!-- //TabContent -->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
	<!-- //Main -->

@endsection