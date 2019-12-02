@extends('admin.app')
@section('title')
Edit Bus Information
@endsection

@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Bus Information</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/view/bus_info/edit') }}\{{ $single_bus_info->id }}">Edit Bus Information</a></li>
            </ol>
        </div>
    </div>

	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('bus_info_update') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="date_id">Journey Date</label>
	                                <div class="col-lg-6">
	                                	<select name="date_id" id="" class="form-control">
	                                		<option class="bg-dark text-white" value="{{$single_bus_info->id}}">{{ date('d-m-y', strtotime($single_bus_info->relationbetweendate->date)) }}</option>

	                                    @foreach($all_dates as $dates)
	                                    	<option value="{{$dates->id}}">{{ date('d-m-y', strtotime($dates->date)) }}</option>
	                                    @endforeach
	                                    </select>
	                                    <input type="hidden" class="form-control" name="id" value="{{ $single_bus_info->relationbetweendate->id }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="operator_name_id">Operator Name</label>
	                                <div class="col-lg-6">
	                                    <select name="operator_name_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->ralationbetweenOperator->operator_name }}</option>
                                    	@foreach($all_operators as $operators)
											<option value="{{ $operators->id }}">{{ $operators->operator_name }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="chassis_no_id">Chassis Number</label>
	                                <div class="col-lg-6">
	                                    <select name="chassis_no_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenchassis->chassis_no }}</option>
                                    	@foreach($all_chassises as $chassises)
											<option value="{{ $chassises->id }}">{{ $chassises->chassis_no }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_type_id">Bus Type</label>
	                                <div class="col-lg-6">
	                                    <select name="bus_type_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenBusType->bus_type }}</option>
                                    	@foreach($all_bus_types as $bus_type)
											<option value="{{ $bus_type->id }}">{{ $bus_type->bus_type }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>

	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_route_id">Departure & Destination</label>
	                                <div class="col-lg-6">
	                                    <select name="bus_route_id" id="bus_route_id" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenbusroutes->bus_route }}</option>
                                    	@foreach($all_routes as $routes)
											<option value="{{ $routes->id }}">{{ $routes->bus_route }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_id">Departure</label>
	                                <div class="col-lg-6">
	                                    <select name="departure_id" id="departure_id" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenDepartureInfo->departure }}</option>
                                    	@foreach($all_departure_info as $departure_infos)
											<option value="{{ $departure_infos->id }}">{{ $departure_infos->departure }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Departure Time</label>
	                                <div class="col-lg-6">
	                                    <select name="departure_time_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ date('h:i A', strtotime($single_bus_info->relationbetweenDepartureInfo->departure_time))  }}</option>
                                    	@foreach($all_departure_info as $departure_infos)
											<option value="{{ $departure_infos->id }}">{{ date('h:i A', strtotime($departure_infos->departure_time))  }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="destination_id">Destination</label>
	                                <div class="col-lg-6">
	                                    <select name="destination_id" id="destination_id" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenDestination->destination }}</option>
                                    	@foreach($all_destination as $destinations)
											<option value="{{ $destinations->id }}">{{ $destinations->destination }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat_id">Total Seat</label>
	                                <div class="col-lg-6">
	                                    <select name="total_seat_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenTotalSeat->total_seat }}</option>
                                    	@foreach($all_seats as $seats)
											<option value="{{ $seats->id }}">{{ $seats->total_seat }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="ticket_price_id">Ticket Price</label>
	                                <div class="col-lg-6">
	                                    <select name="ticket_price_id" id="" class="form-control">
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenTicketPrice->ticket_price }}</option>
                                    	@foreach($all_ticket_prices as $prices)
											<option value="{{ $prices->id }}">{{ $prices->ticket_price }}</option>
                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="terminal_id">Terminal Name</label>
	                                <div class="col-lg-6">
	                                    <select name="terminal_id" id="terminal_id" class="form-control" required>
	                                    	<option class="bg-dark text-white" value="{{ $single_bus_info->id }}">{{ $single_bus_info->relationbetweenBoardinPoint->terminal_name }}</option>
	                                    	@foreach($all_terminals as $terminals)
	                                    	<option value="{{ $terminals->id }}">{{ $terminals->terminal_name }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <div class="col-lg-8 ml-auto">
	                                    <button type="submit" class="btn btn-primary">Update Information</button>
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