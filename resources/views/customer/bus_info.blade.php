@extends('customer.app')
@section('title')
Bus Informations
@endsection

@section('content')

    <main class="main" role="main">
        <!-- Page info -->
        <header class="site-title color">
            <div class="wrap">
                <div class="container">
                    <h1>Bus Informations</h1>
                    <nav role="navigation" class="breadcrumbs">
                        <a href="{{ url('/customer/booking-information') }}" class="btn color medium ">View Booking Informations</a>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Search -->
    		<div class="advanced-search color" id="booking">
    			<div class="wrap">
    				<form role="search" action="{{ route('search_result') }}" method="post">
              @csrf
    					<!-- Row -->
    					<div class="f-row">
    						<div class="form-group select one-third">
    							<label>Journey Date</label>
    							<select name="journey_date">
                    <option selected>Select</option>
                    @foreach ($all_dates as $dates)
                        <option value="{{ $dates->id }}">{{ $dates->date }}</option>
                    @endforeach
    							</select>
    						</div>
    						<div class="form-group select one-third">
    							<label>Departure</label>
    							<select name="departure">
    								<option selectedi>Select</option>
                    @foreach ($all_departure as $departures)
                      <option value="{{ $departures->id }}">{{ $departures->departure }}</option>
                    @endforeach
    							</select>
    						</div>
    						<div class="form-group select one-third">
    							<label>Destination</label>
    							<select name="destination">
    								<option selected>Select</option>
                    @foreach ($all_destination as $destinations)
                      <option value="{{ $destinations->id }}">{{ $destinations->destination }}</option>
                    @endforeach
    							</select>
    						</div>
    					</div>
    					<!-- //Row -->


    					<!-- Row -->
    					<div class="f-row">
    						<div class="form-group right">
    							<button type="submit" class="btn large black">Search</button>
    						</div>
    					</div>
    					<!--// Row -->
    				</form>
    			</div>
    		</div>
    		<!-- //Search -->
        <br>

        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" style="color: #000; font-size: 14px;">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Journey Date</th>
                                                <th>Operator Name</th>
                                                <th>Bus Chassis</th>
                                                <th>Bus Type</th>
                                                <th>Bus Route</th>
                                                <th>Departure</th>
                                                <th>Departure Time</th>
                                                <th>Destination</th>
                                                <th>Total Seat</th>
                                                <th>Ticket Price</th>
                                                <th>View Seat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_bus_info as $bus_infos)
                                            <tr>
                                                <td>{{ $bus_infos->id }}</td>

                                                <td>{{ date('d-m-y', strtotime($bus_infos->relationbetweendate->date)) }}</td>
                                                <td>{{ $bus_infos->ralationbetweenOperator->operator_name }}</td>
                                                <td>{{ $bus_infos->relationbetweenchassis->chassis_no }}</td>
                                                <td>{{ $bus_infos->relationbetweenBusType->bus_type }}</td>
                                                <td>{{$bus_infos->relationbetweenbusroutes->bus_route}}</td>
                                                <td>{{$bus_infos->relationbetweenDepartureInfo->departure}}</td>
                                                <td>{{ date('h:i A', strtotime($bus_infos->relationbetweenDepartureInfo->departure_time)) }}</td>

                                                <td>{{ $bus_infos->relationbetweenDestination->destination }}</td>
                                                <td>{{ $bus_infos->relationbetweenTotalSeat->total_seat }}</td>
                                                <td>{{ $bus_infos->relationbetweenTicketPrice->ticket_price }}</td>
                                                <td>
                                                    <a href="{{url('customer/bus_seat/view')}}\{{$bus_infos->id}}" class="btn color medium right" >View Seat</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
