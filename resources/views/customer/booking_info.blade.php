@extends('customer.app')
@section('title')
Ticekt Booking Information
@endsection

@section('content')
  <main class="main" role="main">
      <!-- Page info -->
      <header class="site-title color">
          <div class="wrap">
              <div class="container">
                  <h1>Ticket Booking Informations</h1>
                  <nav role="navigation" class="breadcrumbs">
                      <a href="{{ url('/customer/bus_info') }}" class="btn color medium ">Search Bus Again</a>
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
                                  <table class="table table-striped table-bordered zero-configuration" style="color: #000; font-size: 14px; text-align:center; ">
                                      <thead>
                                          <tr>
                                            <th>SL</th>
                                            <th>Ticket No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Bus Name</th>
                                            <th>Journey Date</th>
                                            {{-- <th>Bus Chassis No</th> --}}
                                            <th>Bus Route</th>
                                            {{-- <th>Departure</th> --}}
                                            <th>Departure Time</th>
                                            {{-- <th>Destination</th> --}}
                                            <th>Seat Nos</th>
                                            {{-- <th>Total Seat</th> --}}
                                            {{-- <th>Ticket Price</th> --}}
                                            <th>Total Fare</th>
                                            <th>Boarding Point</th>
                                            <th>Payment Status</th>
                                            <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>


                                        @foreach($single_booking_info as $booking_info)


                                              @if (Auth::user()->phone == $booking_info->phone)
                                                <tr>
                                                    <td>{{ $booking_info->id }}</td>
                                                    <td>{{ $booking_info->ticket_token }}</td>
                                                    <td>{{ $booking_info->customer_name }}</td>
                                                    <td>{{ $booking_info->phone }}</td>
                                                    <td>{{ $booking_info->bus_name }}</td>
                                                    <td>{{ $booking_info->journey_date }}</td>
                                                    {{-- <td>{{$booking_info->bus_chassis}}</td> --}}
                                                    <td>{{$booking_info->bus_route}}</td>
                                                    {{-- <td>{{$booking_info->departure}}</td> --}}
                                                    <td>{{$booking_info->departure_time}}</td>
                                                    {{-- <td>{{$booking_info->destination}}</td> --}}
                                                    <td>{{$booking_info->seat_no}}</td>
                                                    {{-- <td>{{$booking_info->total_seat}}</td> --}}
                                                    {{-- <td>{{$booking_info->ticket_price}}</td> --}}
                                                    <td>{{$booking_info->total_price}}</td>
                                                    <td>{{$booking_info->terminal}}</td>
                                                    @if ($booking_info->payment_status ==1)
                                                      <td>Paid</td>
                                                      @else
                                                        <td>Due</td>
                                                    @endif
                                                    <td>
                                                      @if ($booking_info->created_at !=Null)
                                                        <a href="{{ url('/customer/booking-information/delete') }}/{{ $booking_info->id }}" class="btn color medium right" onclick="return confirm('Are you sure?')" style="color: red;">Cancel</a>


                                                      @endif
                                                    </td>
                                                </tr>
                                            @endif

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
      <div class="wrap">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            <h3 style="text-align: center; color: green;">Canceled Booking Information</h3>
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered zero-configuration" style="color: #000; font-size: 14px; text-align:center; ">
                                      <thead>
                                          <tr>
                                            <th>SL</th>
                                            <th>Ticket No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Bus Name</th>
                                            <th>Journey Date</th>
                                            {{-- <th>Bus Chassis No</th> --}}
                                            <th>Bus Route</th>
                                            {{-- <th>Departure</th> --}}
                                            <th>Departure Time</th>
                                            {{-- <th>Destination</th> --}}
                                            <th>Seat Nos</th>
                                            {{-- <th>Total Seat</th> --}}
                                            {{-- <th>Ticket Price</th> --}}
                                            <th>Total Fare</th>
                                            <th>Boarding Point</th>
                                            <th>Payment Status</th>
                                            <th>Booking Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>


                                        @foreach($deleted_booking_info as $booking_info)


                                              @if (Auth::user()->phone == $booking_info->phone)
                                                <tr>
                                                    <td>{{ $booking_info->id }}</td>
                                                    <td>{{ $booking_info->ticket_token }}</td>
                                                    <td>{{ $booking_info->customer_name }}</td>
                                                    <td>{{ $booking_info->phone }}</td>
                                                    <td>{{ $booking_info->bus_name }}</td>
                                                    <td>{{ $booking_info->journey_date }}</td>
                                                    {{-- <td>{{$booking_info->bus_chassis}}</td> --}}
                                                    <td>{{$booking_info->bus_route}}</td>
                                                    {{-- <td>{{$booking_info->departure}}</td> --}}
                                                    <td>{{$booking_info->departure_time}}</td>
                                                    {{-- <td>{{$booking_info->destination}}</td> --}}
                                                    <td>{{$booking_info->seat_no}}</td>
                                                    {{-- <td>{{$booking_info->total_seat}}</td> --}}
                                                    {{-- <td>{{$booking_info->ticket_price}}</td> --}}
                                                    <td>{{$booking_info->total_price}}</td>
                                                    <td>{{$booking_info->terminal}}</td>
                                                    @if ($booking_info->payment_status ==1)
                                                      <td>Paid</td>
                                                      @else
                                                        <td>Due</td>
                                                    @endif
                                                    <td style="color: red; font-weight: bold;">Canceled</td>
                                                </tr>
                                            @endif

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
