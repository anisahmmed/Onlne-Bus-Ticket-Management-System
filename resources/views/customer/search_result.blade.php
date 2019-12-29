@extends('customer.app')
@section('title')
Search Result
@endsection

@section('content')

{{-- <div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Bus Information</a></li>
            </ol>
        </div>
    </div> --}}
    <main class="main" role="main">
        <!-- Page info -->
        <header class="site-title color">
            <div class="wrap">
                <div class="container">
                    <h1>Bus Informations</h1>
                    <nav role="navigation" class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/customer/bus_info') }}" title="Home">Search</a></li>
                            <li>Search Result</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                								@if(isset($details))

                								<b style="color:green;">[{{ $query }}]</b> <span>Result Found..</span><br><br><br>

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
                                          @php
                                            $sl = 1;
                                          @endphp
                                            @foreach($details as $bus_infos)
                                            <tr>
                                                <td>{{ $sl++ }}</td>

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

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
