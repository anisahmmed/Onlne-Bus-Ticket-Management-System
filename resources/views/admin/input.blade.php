@extends('admin.app')
@section('title')
Add Bus Informations
@endsection
@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Bus Informations</a></li>
            </ol>
        </div>
    </div>
    <!-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    @if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
    @endif -->
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

    <!-- Bus Chassis -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_chassis') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="sessis_no">Chassis Number<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="chassis_no" required value="{{ old('chassis_no') }}">
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Chassis Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Chassis Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_chassis_no as $chassis)
                                    <tr>
                                        <td>{{$chassis->id}}</td>
                                        <td>{{$chassis->chassis_no}}</td>
                                        <td>
                                            <a href="{{ url('/admin/chassis/edit') }}\{{ $chassis->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_chassis_no->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Bus Chassis End -->
	
	<!-- Bus Routes -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_route') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_route">Bus Route<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="bus_route" required value="{{ old('bus_route') }}">
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Route Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bus Route</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_routes as $routes)
                                    <tr>
                                        <td>{{$routes->id}}</td>
                                        <td>{{$routes->bus_route}}</td>
                                        <td>
                                            <a href="{{ url('/admin/bus_route/edit') }}\{{ $routes->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_routes->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Bus Routes End -->
	
	<!-- Bus Operator -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_operator') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_operator">Bus Operator Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="bus_operator" name="operator_name" required value="{{ old('operator_name') }}">
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Route Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Operator Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_operators as $operators)
                                    <tr>
                                        <td>{{$operators->id}}</td>
                                        <td>{{$operators->operator_name}}</td>
                                        <td>
                                            <a href="{{ url('/admin/bus_operator/edit') }}\{{ $operators->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/bus_operator/update') }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_operators->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Bus Opearator End -->

	<!-- Date start here -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('date_input') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="date">Date<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="date" class="form-control" id="date" name="date"  value="{{ old('date') }}" required>
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Date Info</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_dates as $dates)
                                    <tr>
                                        <td>{{$dates->id}}</td>
                                        <td>{{$dates->date}}</td>
                                        <td>
                                            <a href="{{ url('/admin/dates/edit') }}\{{ $dates->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_dates->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Date End here -->

	<!-- Departure Time start -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_time') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Departure Time<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="departure_time" name="departure_time" required value="{{ old('departure_time') }}">
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Departure Time Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Departure Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_departure_times as $times)
                                    <tr>
                                        <td>{{$times->id}}</td>
                                        <td>{{$times->departure_time}}</td>
                                        <td>
                                            <a href="{{ url('/admin/departure_time/edit') }}\{{ $times->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_departure_times->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Departure Time End -->
	
	<!-- Bus Type Start -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_bus_type') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="bus_type">Bus Type<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                	<input type="text" class="form-control" name="bus_type" required>
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Type Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bus Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_bus_types as $bus_types)
                                    <tr>
                                        <td>{{$bus_types->id}}</td>
                                        <td>{{$bus_types->bus_type}}</td>
                                        <td>
                                            <a href="{{ url('/admin/bus_type/edit') }}\{{ $bus_types->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_bus_types->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Bus Type End -->
	
	<!-- Total Seat Start here -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_total_seat') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat">Total Seat<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                	<input type="number" class="form-control" name="total_seat" value="{{ old('total_seat') }}" required>
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Seat Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Total Seat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($total_seats as $seats)
                                    <tr>
                                        <td>{{$seats->id}}</td>
                                        <td>{{$seats->total_seat}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $total_seats->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Total seat End here -->
	
	<!-- Ticket Price Start here -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('input_ticket_price') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="ticket_price">Ticket Price<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                	<input type="number" class="form-control" name="ticket_price" value="{{ old('ticket_price') }}" required>
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
	        <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ticket Price Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ticket Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ticket_prices as $price)
                                    <tr>
                                        <td>{{$price->id}}</td>
                                        <td>{{$price->ticket_price}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $ticket_prices->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Ticket Price End here -->
</div>
@endsection

