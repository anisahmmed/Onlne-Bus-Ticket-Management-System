@extends('admin.app')
@section('title')
Add Individual Component
@endsection
@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Individual Component</a></li>
            </ol>
        </div>
    </div>
    <!-- Start error message -->
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
    <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Chassis Number</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                            <a href="{{ url('/admin/chassis/delete') }}\{{ $chassis->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Bus Routes -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Route</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                            <a href="{{ url('/admin/bus_route/delete') }}\{{ $routes->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Bus Operator -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Operator</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bus Operator Informations</h4>
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
                                            <a href="{{ url('/admin/bus_operator/delete') }}\{{ $operators->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Date start here -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Journey Date</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                        <td>{{ date('d-M-y', strtotime($dates->date)) }}</td>
                                        <td>
                                            <a href="{{ url('/admin/dates/edit') }}\{{ $dates->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/dates/delete') }}\{{ $dates->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Departure info start -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Departure Information</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('departure_info_input') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Departure<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="departure" name="departure" required value="{{ old('departure') }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Departure Time<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="time" class="form-control" id="departure_time" name="departure_time" required value="{{ old('departure_time') }}">
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
	        <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Departure Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Departure</th>
                                        <th>Departure Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_departure_info as $departure_infos)
                                    <tr>
                                        <td>{{ $departure_infos->id }}</td>
                                        <td>{{ $departure_infos->departure }}</td>
                                        <td>{{date('h:i A', strtotime($departure_infos->departure_time))}}</td>
                                        <td>
                                            <a href="{{ url('/admin/departure_info/edit') }}\{{ $departure_infos->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/departure_info/delete') }}\{{ $departure_infos->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_departure_info->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Departure infp End -->

  <!-- Start error message -->
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

	<!-- Destination info start -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Destination Information</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('destination_info_input') }}" method="post" enctype="multipart/form-data">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Destination<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="destination" name="destination" required value="{{ old('destination') }}">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Destination Scenario<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="file" class="form-control" id="destination_scenario" name="destination_scenario" >
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
	        <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Destination Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Destination</th>
                                        <th>Destination Scenario</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_destination as $destinations)
                                    <tr>
                                        <td>{{ $destinations->id }}</td>
                                        <td>{{ $destinations->destination }}</td>
                                        <td>{{ $destinations->destination_scenario }}</td>
                                        <td>
                                            <a href="{{ url('/admin/destination_info/edit') }}\{{ $destinations->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/destination_info/delete') }}\{{ $destinations->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_destination->links() }}
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<!-- Departure infp End -->

  <!-- Start error message -->
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

	<!-- Bus Type Start -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Coach Type</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                            <a href="{{ url('/admin/bus_type/delete') }}\{{ $bus_types->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Total Seat Start here -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Total Seat</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                            <a href="{{ url('/admin/total_seat/edit') }}\{{ $seats->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/total_seat/delete') }}\{{ $seats->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

	<!-- Ticket Price Start here -->
  <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Ticket Price</p>
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-5">
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
	        <div class="col-7">
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
                                            <a href="{{ url('/admin/ticket_price/edit') }}\{{ $price->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/ticket_price/delete') }}\{{ $price->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

  <!-- Start error message -->
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

    <!-- Boarding Point Start here -->
    <p style="text-align:center; color:#FF5733; font-weight:bold; font-size:18px;">Input Bus Boarding Point</p>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ route('terminal_input') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="terminal_name">Terminal Name<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="terminal_name" value="{{ old('terminal_name') }}" required>
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
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Terminal Informations</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Terminal Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_boarding_point as $terminals)
                                    <tr>
                                        <td>{{$terminals->id}}</td>
                                        <td>{{$terminals->terminal_name}}</td>
                                        <td>
                                            <a href="{{ url('/admin/terminal/edit') }}\{{ $terminals->id }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ url('/admin/terminal/delete') }}\{{ $terminals->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
    <!-- Boarding Point End here -->
</div>
@endsection
