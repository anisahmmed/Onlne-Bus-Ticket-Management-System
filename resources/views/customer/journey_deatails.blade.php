@extends('customer.app')
@section('title')
Journey Details
@endsection

@section('content')
  <!-- Main -->
<main class="main" role="main">
  		<!-- Page info -->
  		<header class="site-title color">
  			<div class="wrap">
  				<div class="container">
  					<h1>Journey Details</h1>
  					<nav role="navigation" class="breadcrumbs">
  						<ul>
  							<li><a href="{{ url('/customer/bus_info') }}" title="Home">Home</a></li>
  							<li>Journey Details</li>
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
      				<!-- Form -->
      				<div class="three-fourth">
      					<form method="post" action="{{Route('saveTicket')}}" id="contactform">
                  @csrf
      						<div class="f-row">
      							<div class="one-half">
      								<label for="name">Passanger Name</label>
      								<input type="text" name="customer_name" id="customer_name" value="{{ $allInfo->customer_name }}" readonly />
      							</div>
      							<div class="one-half">
      								<label for="gender">Gender</label>
      								<input type="text" name="customer_gender" id="customer_gender" value="{{ $allInfo->customer_gender }}" readonly />
      							</div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" value="{{ $allInfo->phone }}" readonly />
                    </div>
      							<div class="one-half">
      								<label for="name">Bus Route</label>
      								<input type="text" name="bus_route" id="bus_route" value="{{ $allInfo->bus_route }}" readonly />
      							</div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="email">Drparture</label>
                      <input type="text" name="departure" id="email" value="{{ $allInfo->departure }}" readonly />
                    </div>
      							<div class="one-half">
      								<label for="name">Destination</label>
      								<input type="text" name="destination" id="destination" value="{{ $allInfo->destination }}" readonly />
      							</div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="email">Bus Name</label>
                      <input type="text" name="bus_name" id="bus_name" value="{{ $allInfo->bus_name }}" readonly />
                    </div>
      							<div class="one-half">
      								<label for="name">Bus Chassis</label>
      								<input type="text" name="bus_chassis" id="bus_chassis" value="{{ $allInfo->bus_chassis }}" readonly />
      							</div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="email">Coach Type</label>
                      <input type="text" name="coach_type" id="coach_type" value="{{ $allInfo->coach_type }}" readonly />
                    </div>
      							<div class="one-half">
      								<label for="name">Journey Date</label>
      								<input type="text" name="journey_date" id="journey_date" value="{{ date('d-M-Y', strtotime($allInfo->journey_date)) }}" readonly />
      							</div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="email">Departure Time</label>
                      <input type="text" name="departure_time" id="departure_time" value="{{ date('h:i A', strtotime($allInfo->departure_time)) }}" readonly />
                    </div>
      							<div class="one-half">
      								<label for="name">Seat Nos</label>
      								<input type="text" name="seat_no" id="seat_no" value="{{ $allInfo->seat_no }}" readonly />
      							</div>
    							</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="email">Total Seat</label>
                      <input type="number" name="total_seat" id="total_seat" value="{{ $allInfo->total_seat }}" readonly />
                    </div>
                    <div class="one-half">
                      <label for="email">Ticket Price</label>
                      <input type="number" name="ticket_price" id="ticket_price" value="{{ $allInfo->ticket_price }}" readonly />
                    </div>
      						</div>
      						<div class="f-row">
                    <div class="one-half">
                      <label for="name">Total Price</label>
                      <input type="number" name="total_price" id="total_price" value="{{ $allInfo->total_price }}" readonly />
                    </div>
                    <div class="one-half">
                      <label for="email">Boardin Point</label>
                      <input type="text" name="terminal" id="terminal" value="{{ App\BoardingPoint::findOrFail($allInfo->terminal_id)->terminal_name }}" readonly />
                    </div>
                  </div>
                  <div class="one-half">
                    <input type="submit" value="Confirm Booking" id="submit" name="submit" class="btn color medium right" />
                  </div>
      					</form>
      				</div>
      				<!-- //Form -->
            </div>
          </div>
        </div>
</main>

@endsection
