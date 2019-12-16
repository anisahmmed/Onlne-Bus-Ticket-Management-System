@extends('admin.app')
@section('title')
Create Bus Information
@endsection

@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Create Bus Information</a></li>
            </ol>
        </div>
    </div>

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
	                        <form class="form-valide" action="{{ route('bus_info_insert') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="date_id">Journey Date<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="date_id" id="date_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_dates as $dates)
	                                    	<option value="{{ $dates->id }}">{{ date('d-M-y', strtotime($dates->date))  }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="operator_name_id">Operator Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="operator_name_id" id="operator_name_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_operators as $operators)
	                                    	<option value="{{ $operators->id }}">{{ $operators->operator_name }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="chassis_no_id">Chassis Number<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="chassis_no_id" id="chassis_no_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_chassises as $chassis)
	                                    	<option value="{{ $chassis->id }}" required>{{ $chassis->chassis_no }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_type_id">Bus Type<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="bus_type_id" id="" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_bus_types as $bus_types)
	                                    	<option value="{{ $bus_types->id }}">{{ $bus_types->bus_type }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_route_id">Bus Route<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="bus_route_id" id="bus_route_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_routes as $bus_routes)
	                                    	<option value="{{ $bus_routes->id }}">{{ $bus_routes->bus_route }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Departure<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="departure_id" id="departure_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_departure_info as $departure_infos)
	                                    	<option value="{{ $departure_infos->id }}">{{ $departure_infos->departure }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Departure Time<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="departure_time_id" id="departure_time_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_departure_info as $departure_infos)
	                                    	<option value="{{ $departure_infos->id }}">{{ date('h:i A', strtotime($departure_infos->departure_time))  }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Destination<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="destination_id" id="destination_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_destination as $destinations)
	                                    	<option value="{{ $destinations->id }}">{{ $destinations->destination }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat_id">Total Seat<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="total_seat_id" id="total_seat_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_seats as $seats)
	                                    	<option value="{{ $seats->id }}">{{ $seats->total_seat }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="ticket_price_id">Ticket Price<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="ticket_price_id" id="ticket_price_id" class="form-control" required>
	                                    	<option class="bg-dark text-white">Select</option>
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
</div>
@endsection
