@extends('admin.app')
@section('title')
Trashed Bus Informations
@endsection

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Trashed Bus Information</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; color: blue;">Trash</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
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
                                    @foreach($deleted_bus as $deleted_buses)
                                    <tr>
                                        <td>{{ $deleted_buses->id }}</td>

                                        <td>{{ date('d-m-y', strtotime($deleted_buses->relationbetweendate->date)) }}</td>
                                        <td>{{ $deleted_buses->ralationbetweenOperator->operator_name }}</td>
                                        <td>{{ $deleted_buses->relationbetweenchassis->chassis_no }}</td>
                                        <td>{{ $deleted_buses->relationbetweenBusType->bus_type }}</td>
                                        <td>{{$deleted_buses->relationbetweenbusroutes->bus_route}}</td>
                                        <td>{{ date('h:i A', strtotime($deleted_buses->relationbetweenDepartureInfo->departure_time)) }}</td>

                                        <td>{{ $deleted_buses->relationbetweenTotalSeat->total_seat }}</td>
                                        <td>{{ $deleted_buses->relationbetweenTicketPrice->ticket_price }}</td>
                                        <td>
                                            <a href="{{ url('/admin/trashed_bus_info/view/restore') }}\{{ $deleted_buses->id }}" class="btn btn-success">Restore</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $deleted_bus->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
