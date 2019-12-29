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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Bus Name</th>
                                            <th>Journey Date</th>
                                            <th>Departure Time</th>
                                            <th>Seat Nos</th>
                                            <th>Total Fare</th>
                                            <th>Boarding Point</th>
                                            <th>Payment Status</th>
                                            {{-- <th>cr</th> --}}
                                            <th>Cancel</th>
                                            <th>View Ticket</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                          $sl= 1;
                                        @endphp
                                        @foreach($single_booking_info as $booking_info)


                                              @if (Auth::user()->phone == $booking_info->phone && $booking_info->payment_status ==1)
                                                <tr>
                                                    <td>{{ $sl++ }}</td>
                                                    <td>{{ $booking_info->customer_name }}</td>
                                                    <td>{{ $booking_info->phone }}</td>
                                                    <td>{{ $booking_info->bus_name }}</td>
                                                    <td>{{ $booking_info->journey_date }}</td>
                                                    <td>{{$booking_info->departure_time}}</td>
                                                    <td>{{$booking_info->seat_no}}</td>
                                                    <td>{{$booking_info->total_price}}</td>
                                                    <td>{{$booking_info->terminal}}</td>
                                                    @if ($booking_info->payment_status ==1)
                                                      <td>Paid</td>
                                                      @else
                                                        <td>Due</td>
                                                    @endif
                                                    {{-- <td>{{ $booking_info->created_at }}</td> --}}
                                                    <td>
                                                      <button id="cancle{{ $booking_info->id }}" onclick="callRoute({{ $booking_info->id }})" type="button" class="btn color medium right" style="background:red;">Cancel</button>
                                                    </td>

                                                    <script>
                                                        var databaseDate = new Date("{{ $booking_info->created_at }}");
                                                        var currentDate = new Date();

                                                        if (databaseDate.getFullYear() == currentDate.getFullYear())  {
                                                          if (databaseDate.getDate() == currentDate.getDate()) {
                                                            if (databaseDate.getHours()-currentDate.getHours() < 12) {
                                                              var cancleBtn = document.getElementById("cancle{{ $booking_info->id }}");
                                                              cancleBtn.disabled = false;
                                                            }
                                                            else {
                                                                var cancleBtn = document.getElementById("cancle{{ $booking_info->id }}");
                                                                cancleBtn.disabled = true;
                                                            }
                                                          }
                                                          else {
                                                            var cancleBtn = document.getElementById("cancle{{ $booking_info->id }}");
                                                            cancleBtn.disabled = true;
                                                          }
                                                        }
                                                        else {
                                                          var cancleBtn = document.getElementById("cancle{{ $booking_info->id }}");
                                                          cancleBtn.disabled = true;
                                                        }
                                                      </script>

                                                    <td>
                                                      <a href="{{ url('/customer/booking-ticket/view') }}/{{ $booking_info->id }}" target="_blank" class="btn color medium right">View Ticket</a>
                                                    </td>
                                                </tr>
                                            @endif

                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <br><br><br>
                          <span style="color: red;"><strong>Note:</strong> You will not be able to Cancel Ticket after 12 Hours.</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </main>

    {{-- Button Disable --}}
      <script>
      function disBtn(id) {
        var cancleBtn = document.getElementById(id);
        cancleBtn.disabled = true;
      }
      </script>

      {{-- Button Action --}}
      <script>
      function callRoute(busInfoId) {
            window.location = '/customer/booking-information/delete/' + busInfoId;
        }
      </script>
@endsection
