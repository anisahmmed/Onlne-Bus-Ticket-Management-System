@extends('customer.app')


@section('css')
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/bootstrap.min.css') }}">

<!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/plugins/owl.carousel.min.css') }}">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/plugins/slick.css') }}">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/font-awesome.min.css') }}">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/plugins/animate.css') }}">
    <link href="{{ asset('seat_view/assets/admin/css/toastr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('seat_view/assets/admin/css/sweetalert.css') }}" rel="stylesheet">
    <!--Main Stylesheet-->
    <link rel="stylesheet"  href="https://ideal.thesoftking.com/bluebus/assets/front/css/style.php?color=3842fb">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/homePageResponsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/jquery.autocomplete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seat_view/assets/front/css/seat-custom.css') }}">

@endsection

@section('title')
Seat View
@endsection

@section('content')
<!--Start Body Wrap-->
<div id="body-wrap">
    <div id="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </div>



        <!-- =========== Main Ticket Booking Area Start ===================== -->
    <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>BUS COMPANY</h4>
                    <h6 style="color: green;">{{ $operator_name }}</h6>

                    <p><strong><span class="text-danger">Route: </span> {{ $bus_route }}</strong></p>

                    <p>Dep Time: {{ date('h:i A', strtotime($departure_time)) }} <span class="text-success">({{ date('d-M-Y', strtotime($journey_date)) }})</span></p>
                    <strong>Total Seat: {{ $total_seat }}</strong>
                    <div class="margin-bottom-5"></div>
                    <strong>Ticket Price : {{ $ticket_price }} TAKA</strong>
                </div>
            </div>

            <div class="margin-bottom-60"></div>

            <div class="row">
                <div class="offset-md-1 col-md-5 col-sm-10 ">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="seat  ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Available Seat</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="seat ChooseSeat selected ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Selected Seat</p>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="seat ladies last-seat seat occupied ChooseSeat ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Sold Seat</p>
                        </div>
                    </div>
                    <div class="margin-bottom-40"></div>

                    <div class="all-seats">
                        <div class='row'>

                            @if(in_array("A1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif


                            @if(in_array("A2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class='col-2'>&nbsp;</div>


                            @if(in_array("A3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif


                            @if(in_array("A4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        A4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        A4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class='row'>
                            @if(in_array("B1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(in_array("B2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class='col-2'>&nbsp;</div>
                            @if(in_array("B3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif


                            @if(in_array("B4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        B4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        B4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>
                            @if(in_array("C1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(in_array("C2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class='col-2'>&nbsp;</div>


                            @if(in_array("C3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @endif



                            @if(in_array("C4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        C4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        C4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>
                            @if(in_array("D1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("D2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("D3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("D4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        D4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        D4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("E1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("E2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("E3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("E4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        E4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        E4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("F1", $finalSeat))
                                <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("F2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("F3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("F4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        F4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        F4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>
                            @if(in_array("G1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("G2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("G3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("G4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        G4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        G4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("H1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("H2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("H3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("H4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        H4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        H4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("I1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("I2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("I3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("I4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        I4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        I4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("J1", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J1
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("J2", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J2
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class='col-2'>&nbsp;</div>

                            @if(in_array("J3", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J3
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @if(in_array("J4", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                    <div class='seat-body'>
                                        J4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat ' data-item=''>
                                    <div class='seat-body'>
                                        J4
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>

                        <div class='row'>

                            @if(in_array("M", $finalSeat))
                            <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied last-seat-21'>
                                    <div class='seat-body'>
                                        M
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class='col-2'>
                                <div class='seat occupied ChooseSeat last-seat-21' data-item=''>
                                    <div class='seat-body'>
                                        M
                                        <span class='seat-handle-left'></span>
                                        <span class='seat-handle-right'></span>
                                        <span class='seat-bottom'></span>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <form action="{{ route('bus_seat_booking') }}" class="price-details" id="bookingFrm" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label><strong>Choose Boarding Point <span class="text-danger">*</span></strong></label>
                            <select name="terminal_id" id="stoppage" class="form-control form-control-lg boarding_point" required>
                              <option>Boarding Point</option>
                                @foreach($terminal as $terminals)
                                    <option value="{{$terminals->boarding_point_id}}" required>{{App\BoardingPoint::findOrFail($terminals->boarding_point_id)->terminal_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        </div>

                        <div class="table-responsive ">
                            <table class="table table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-right" style="width: 40%;">Seat(s)</td>
                                    <th id="seatPreview">---</th>
                                </tr>
                                <tr>
                                    <td class="text-right" style="width: 40%;"><b> Total Price</b></td>
                                    <th id="grandTotalPreview">0</th>
                                </tr>
                                </tbody>
                            </table>

                            <input type="hidden" name="customer_name" id="customer_name_id" value="{{ $customer_name }}">
                            <input type="hidden" name="customer_gender" id="customer_name_id" value="{{ $customer_gender }}">
                            <input type="hidden" name="bus_route" id="bus route" value="{{ $bus_route }}">
                            <input type="hidden" name="phone" id="phone_id" value="{{ $customer_phone }}">
                            <input type="hidden" name="bus_route" id="bus_route" value="{{ $bus_route }}">
                            <input type="hidden" name="bus_name" id="bus_name_id" value="{{ $operator_name }}">
                            <input type="hidden" name="bus_chassis" id="bus_chassis" value="{{ $bus_chassis }}">
                            <input type="hidden" name="journey_date" id="journey_date" value="{{ $journey_date }}">
                            <input type="hidden" name="departure_time" id="departure_time" value="{{ $departure_time }}">
                            <input type="hidden" name="coach_type" id="coach_type" value="{{ $coach_type }}">
                            {{-- <input type="hidden" name="terminal_id" id="terminal_id" value="{{ $terminal_name }}"> --}}
                            <input type="hidden" name="departure" id="departure" value="{{ $departure }}">
                            <input type="hidden" name="destination" id="destination" value="{{ $destination }}">
                            <input type="hidden" name="ticket_price" id="ticket_price" value="{{$ticket_price}}">
                            <input type="hidden" name="total_seat">
                            <input type="hidden" name="seat_no">
                            <input type="hidden" name="total_price">

                        </div>
                        <button type="submit" id="submit-btn" class="btn btn-block">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- =========== Main Ticket Booking Area End ===================== -->
    <div class="margin-bottom-60"></div>

@endsection







@section('js')

<!--jQuery JS-->
<script src="{{ asset('seat_view/assets/front/js/jquery.2.1.2.min.js') }}"></script>
<!--Bootstrap JS-->
<script src="{{ asset('seat_view/assets/front/js/bootstrap.min.js') }}"></script>
<!--Counter JS-->
<script src="{{ asset('seat_view/assets/front/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('seat_view/assets/front/js/plugins/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('seat_view/assets/admin/js/toastr.min.js') }}"></script>
<script src="{{ asset('seat_view/assets/admin/js/sweetalert.js') }}"></script>


    <script src="{{ asset('seat_view/assets/front/js/jquery.autocomplete.js') }}"></script>
    <script src="{{ asset('seat_view/assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('seat_view/assets/front/js/flatpickr.js') }}"></script>
<!--Owl Carousel JS-->
<script src="{{ asset('seat_view/assets/front/js/plugins/owl.carousel.min.js') }}"></script>
<!--Venobox JS-->
<script src="{{ asset('seat_view/assets/front/js/plugins/venobox.min.js') }}"></script>
<!--Slick Slider JS-->
<script src="{{ asset('seat_view/assets/front/js/plugins/slick.min.js') }}"></script>
<!--Main-->
<script src="{{ asset('seat_view/assets/front/js/custom.js') }}"></script>



    <script>
        $(document).ready(function () {

            $('.boarding_point').select2();


            /*
            *------------------------------------------------------
            * @function: findBookingInformation()
            * @return    : location, facilities, seatsList
            *------------------------------------------------------
            */
            var customer_name_id = $('input[name=customer_name_id]');
            var phone_id = $('input[name=phone_id]');
            var bus_name_id = $('input[name=bus_name_id]');
            var total_seat = $('input[name=total_seat]');
            // var boarding = $('input[name=boarding]');
            var total_price = $('input[name=total_price]');
            var seat_no = $('input[name=seat_no]');

            var ticket_price = $('input[name=ticket_price]').val();
            var journey_date_id = $('input[name=journey_date_id]');
            var departure_time_id = $('input[name=departure_time_id]');
            var ticket_token = $('input[name=ticket_token]');

            var seatPreview = $('#seatPreview');
            var pricePreview = $('#pricePreview');
            var grandTotalPreview = $('#grandTotalPreview');
            var outputPreview = $('#outputPreview');

            if (total_seat.val() == '') {
                $("#submit-btn").attr('disabled', true);
            }

            /*
            *------------------------------------------------------
            * Choose seat(s)
            * @function: findPriceBySeat
            * @return  : selected seat(s), price and group price
            *------------------------------------------------------
            */

            $('body').on('click', '.ChooseSeat', function () {

                var seat = $(this);
                if (seat.attr('data-item') != "selected") {
                    seat.removeClass('occupied').addClass('selected').attr('data-item', 'selected');
                } else if (seat.attr('data-item') == "selected") {
                    seat.removeClass('selected').addClass('occupied').attr('data-item', '');
                }
                //reset seat serial for each click
                var seatSerial = "";
                var countSeats = 0;

                $("div[data-item=selected]").each(function (i, x) {
                    countSeats = i + 1;
                    seatSerial += $(this).text().trim() + ",";
                });

                total_price.val(countSeats * ticket_price);
                $("#grandTotalPreview").text((countSeats * ticket_price) + " TAKA");
                total_seat.val(countSeats);
                seat_no.val(seatSerial);
                seatPreview.html(seatSerial);

                if (countSeats > 0) {
                    $("#submit-btn").attr('disabled', false);
                } else {
                    $("#submit-btn").attr('disabled', true);
                }
            });



        });
    </script>

    @endsection
