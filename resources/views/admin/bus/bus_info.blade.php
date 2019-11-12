@extends('admin.app')
@section('title')
Bus Informations
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
                                        <th>Journey Date</th>
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
                                        <td>{{ $buses->relationbetweendate->date }}</td>
                                        <td>{{ $buses->ralationbetweenOperator->operator_name }}</td>
                                        <td>{{ $buses->relationbetweenchassis->chassis_no }}</td>
                                        <td>{{ $buses->relationbetweenBusType->bus_type }}</td>
                                        <td>{{$buses->relationbetweenbusroutes->bus_route}}</td>
                                        <td>{{$buses->relationbetweentime->departure_time}}</td>
                                        <td>{{ $buses->relationbetweenTotalSeat->total_seat }}</td>
                                        <td>{{ $buses->relationbetweenTicketPrice->ticket_price }}</td>
                                        <td>
                                            <a href="{{ url('/admin/view/bus_info/edit') }}\{{ $buses->id }}" class="btn btn-primary">Edit</a>
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