@extends('admin.app')
@section('title')
Ticket Booking Information
@endsection

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/ticket-booking-info') }}">Ticket Booking Info</a></li>
            </ol>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; text-align: center;">Ticket Booking Info</h4><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000; font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        {{-- <th>Ticket No</th> --}}
                                        <th>Customer Name</th>
                                        <th>Contact No</th>
                                        <th>Bus Name</th>
                                        <th>Journey Date</th>
                                        <th>Bus Chassis No</th>
                                        <th>Bus Route</th>
                                        {{-- <th>Departure</th> --}}
                                        <th>Departure Time</th>
                                        {{-- <th>Destination</th> --}}
                                        {{-- <th>Seat Nos</th> --}}
                                        <th>Total Seat</th>
                                        {{-- <th>Ticket Price</th> --}}
                                        <th>Total Fare</th>
                                        {{-- <th>Boarding Point</th> --}}
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                    $no=1;
                                  @endphp
                                    @foreach($all_ticket_booking_info as $booking_info)
                                    <tr>
                                        <td>{{$no++ }}</td>
                                        {{-- <td>{{ $booking_info->ticket_token }}</td> --}}
                                        <td>{{ $booking_info->customer_name }}</td>
                                        <td>{{ $booking_info->phone }}</td>
                                        <td>{{ $booking_info->bus_name }}</td>
                                        <td>{{ $booking_info->journey_date }}</td>
                                        <td>{{$booking_info->bus_chassis}}</td>
                                        <td>{{$booking_info->bus_route}}</td>
                                        {{-- <td>{{$booking_info->departure}}</td> --}}
                                        <td>{{$booking_info->departure_time}}</td>
                                        {{-- <td>{{$booking_info->destination}}</td> --}}
                                        {{-- <td>{{$booking_info->seat_no}}</td> --}}
                                        <td>{{$booking_info->total_seat}}</td>
                                        {{-- <td>{{$booking_info->ticket_price}}</td> --}}
                                        <td>{{$booking_info->total_price}}</td>
                                        {{-- <td>{{$booking_info->terminal}}</td> --}}
                                        @if ($booking_info->payment_status ==1)
                                          <td>Paid</td>
                                          @else
                                            <td>Due</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('/admin/ticket-booking-info/cancel') }}/{{ $booking_info->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Cancel</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $all_buses->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
