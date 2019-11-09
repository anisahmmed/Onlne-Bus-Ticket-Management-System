@extends('admin.app')
@section('title')
Buses
@endsection

@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Add Bus</a></li>
            </ol>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    @if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
    @endif
    <!-- Error -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <!-- End error message -->
            <!-- row -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('buses') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="operator_name_id">Operator Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="operator_name_id" id="operator_name_id" class="form-control">
	                                    	@foreach($all_operators as $operators)
	                                    	<option value="{{ $operators->id }}">{{ $operators->operator_name }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="chassis_no_id">Chassis Number<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="chassis_no_id" id="chassis_no_id" class="form-control">
	                                    	@foreach($all_chassises as $chassis)
	                                    	<option value="{{ $chassis->id }}">{{ $chassis->chassis_no }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_type_id">Bus Type<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="bus_type_id" id="" class="form-control">
	                                    	@foreach($all_bus_types as $bus_types)
	                                    	<option value="{{ $bus_types->id }}">{{ $bus_types->bus_type }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_destination_id">Departure & Destination<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="departure_destination_id" id="departure_destination_id" class="form-control">
	                                    	@foreach($all_routes as $bus_routes)
	                                    	<option value="{{ $bus_routes->id }}">{{ $bus_routes->bus_route }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Departure Time<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="departure_time_id" id="departure_time_id" class="form-control">
	                                    	@foreach($all_times as $time)
	                                    	<option value="{{ $time->id }}">{{ $time->departure_time }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat_id">Total Seat<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="total_seat_id" id="total_seat_id" class="form-control">
	                                    	@foreach($all_seats as $seats)
	                                    	<option value="{{ $seats->id }}">{{ $seats->total_seat }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="ticket_price_id">Ticket Price<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="ticket_price_id" id="ticket_price_id" class="form-control">
	                                    	@foreach($all_ticket_prices as $prices)
	                                    	<option value="{{ $prices->id }}">{{ $prices->ticket_price }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <div class="col-lg-8 ml-auto">
	                                    <button type="submit" class="btn btn-primary">Submit</button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>




    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; color: blue;">Bus Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>Operator Name</th>
                                        <th>Chassis Number</th>
                                        <th>Bus Type</th>
                                        <th>Departure & Destination</th>
                                        <th>Departure Time</th>
                                        <th>Total Seat</th>
                                        <th>Ticket Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_buses as $buses)
                                    <tr>
                                        <td>{{ $buses->ralationbetweenOperator->operator_name }}</td>
                                        <td>{{ $buses->relationbetweenchassis->chassis_no }}</td>
                                        <td>{{ $buses->relationbetweenBusType->bus_type }}</td>
                                        <td>{{$buses->relationbetweenbusroutes->bus_route}}</td>
                                        <td>{{$buses->relationbetweentime->departure_time}}</td>
                                        <td>{{ $buses->relationbetweenTotalSeat->total_seat }}</td>
                                        <td>{{ $buses->relationbetweenTicketPrice->ticket_price }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_buses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection