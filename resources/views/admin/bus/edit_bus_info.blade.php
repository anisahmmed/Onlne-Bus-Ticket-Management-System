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
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Add Bus</a></li>
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
	                                <label class="col-lg-4 col-form-label" for="operator_name_id">Operator Name</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="operator_name_id" value="{{ $single_bus_info->ralationbetweenOperator->operator_name }}">
	                                    <input type="hidden" class="form-control" name="id" value="{{ $single_bus_info->ralationbetweenOperator->id }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="chassis_no_id">Chassis Number</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="chassis_no_id" value="{{ $single_bus_info->relationbetweenchassis->chassis_no }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_type_id">Bus Type</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="bus_type_id" value="{{ $single_bus_info->relationbetweenBusType->bus_type }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_destination_id">Departure & Destination</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="departure_destination_id" value="{{ $single_bus_info->relationbetweenbusroutes->bus_route }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time_id">Departure Time</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="departure_time_id" value="{{ $single_bus_info->relationbetweentime->departure_time }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat_id">Total Seat</label>
	                                <div class="col-lg-6">
	                                    <input type="number" class="form-control" name="total_seat_id" value="{{ $single_bus_info->relationbetweenTotalSeat->total_seat }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="ticket_price_id">Ticket Price</label>
	                                <div class="col-lg-6">
	                                    <input type="number" class="form-control" name="ticket_price_id" value="{{ $single_bus_info->relationbetweenTicketPrice->ticket_price }}">
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