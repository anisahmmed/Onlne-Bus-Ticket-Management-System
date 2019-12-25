@extends('admin.app')
@section('title')
Cancel Booking Information
@endsection

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/cancel_booking_info') }}">Cancel Booking Information</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; color: blue;">Cancel Booking Information</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                      <th>SL</th>
                                      <th>Ticket No</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Bus Name</th>
                                      <th>Journey Date</th>
                                      <th>Bus Route</th>
                                      <th>Departure Time</th>
                                      <th>Seat Nos</th>
                                      <th>Total Fare</th>
                                      <th>Boarding Point</th>
                                      <th>Payment Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cancel_ticket as $cancel_info)
                                    <tr>
                                      <td>{{ $cancel_info->id }}</td>
                                      <td>{{ $cancel_info->ticket_token }}</td>
                                      <td>{{ $cancel_info->customer_name }}</td>
                                      <td>{{ $cancel_info->phone }}</td>
                                      <td>{{ $cancel_info->bus_name }}</td>
                                      <td>{{ $cancel_info->journey_date }}</td>
                                      <td>{{$cancel_info->bus_route}}</td>
                                      <td>{{$cancel_info->departure_time}}</td>
                                      <td>{{$cancel_info->seat_no}}</td>
                                      <td>{{$cancel_info->total_price}}</td>
                                      <td>{{$cancel_info->terminal}}</td>
                                      @if ($cancel_info->payment_status ==1)
                                        <td>Paid</td>
                                        @else
                                          <td>Due</td>
                                      @endif

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $cancel_ticket->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
