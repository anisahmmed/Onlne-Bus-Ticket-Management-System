@extends('admin.app')
@section('title')
Admin Pannel
@endsection


@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-danger">
                                        <i class="mdi mdi-account-multiple"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Customer</p>
                                        <h3>{{ App\User::where('role_id',3)->count() }}</h3>
                                    </div>
                                </div>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-warning">
                                        <i class="mdi mdi-receipt"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Sell</p>

                                        <h3>৳ {{ $today_sell }}</h3>
                                    </div>
                                </div>
                                <p class="mb-0"> Today's Sell</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-success">
                                        <i class="mdi mdi-poll-box"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Sales</p>
                                        @php
                                          $total = DB::table('ticket_bookings')->where('payment_status', 1)->sum('total_price');
                                        @endphp

                                        <h3>৳ {{ $total }}</h3>
                                    </div>
                                </div>
                                <p class="mb-0"> Total sell</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                  <p style="color: orange;">Ticket Booking Information</p>
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0" style="color: #000;">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Contact</th>
                                                    <th>Bus Name</th>
                                                    <th>Bus Chassis No</th>
                                                    <th>No. of Seat</th>
                                                    <th>Payment Status</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($all_booking_info as $booking_info)

                                                <tr>
                                                  <td>{{ $booking_info->customer_name }}</td>
                                                  <td>{{ $booking_info->phone }}</td>
                                                  <td>{{ $booking_info->bus_name }}</td>
                                                  <td>{{ $booking_info->bus_chassis }}</td>
                                                  <td>{{ $booking_info->total_seat }}</td>
                                                  @if ($booking_info->payment_status == 1)
                                                    <td><i class="fa fa-circle-o text-primary  mr-2"></i>Paid</td>
                                                    @else
                                                      <td><i class="fa fa-circle-o text-warning  mr-2"></i>Pending</td>
                                                  @endif
                                                  <td>{{ $booking_info->created_at->diffForHumans() }}</td>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                  <p style="color: orange;">Contact Information</p>
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0" ">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($all_contact as $contacts)

                                                <tr>
                                                  <td>{{ $contacts->name }}</td>
                                                  <td>{{ $contacts->email }}</td>
                                                  <td>{{ $contacts->message }}</td>
                                                  <td>{{ $contacts->created_at->diffForHumans() }}</td>
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
