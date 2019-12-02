@extends('customer.app')
@section('title')
Journey Details
@endsection

@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Bus Information</a></li>
            </ol>
        </div>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="{{Route('saveTicket')}}" method="post">
					@csrf
				Passanger Name: <input class="form-control" type="text" name="customer_name_id" value="{{$allInfo->customer_name_id}}">
				Passanger Phone: <input class="form-control" type="text" name="phone_id" value="{{$allInfo->phone_id}}">
				Bus Route: <input class="form-control" type="text" name="bus_route" value="{{$allInfo->bus_route}}">
				Departure: <input class="form-control" type="text" name="departure" value="{{$allInfo->departure}}">
				Destination: <input class="form-control" type="text" name="destination_id" value="{{$allInfo->destination_id}}">
				Operator Name: <input class="form-control" type="text" name="bus_name_id" value="{{$allInfo->bus_name_id}}">				
				Bus Chassis: <input class="form-control" type="text" name="bus_chassis" value="{{$allInfo->bus_chassis}}">				
				Coach Type: <input class="form-control" type="text" name="coach_type" value="{{$allInfo->coach_type}}">
				Journey Date: <input class="form-control" type="text" name="journey_date_id" value="{{$allInfo->journey_date_id}}">
				Departure Time: <input class="form-control" type="text" name="departure_time_id" value="{{$allInfo->departure_time_id}}">
				Seat Nos: <input class="form-control" type="text" name="seat_no" value="{{$allInfo->seat_no}}">
				Total Seat: <input class="form-control" type="text" name="total_seat" value="{{$allInfo->total_seat}}">
				Ticket Price: <input class="form-control" type="text" name="ticket_price" value="{{$allInfo->ticket_price}}">
				Total Price: <input class="form-control" type="text" name="total_price" value="{{$allInfo->total_price}}">
				Boarding Terminal: <input class="form-control" type="text" name="terminal_id" value="{{$allInfo->terminal_id}}">
				<button type="submit" class=" btn btn-success">Book Ticket</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection