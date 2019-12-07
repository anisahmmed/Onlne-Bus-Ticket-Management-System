<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="{{ asset('frontend/front/images/favicon.ico') }}" />
	<!-- Pignose Calender -->
	<link href="{{ asset('dashboard/assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
	<!-- Chartist -->
	<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist/css/chartist.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">

	 {{-- Data table --}}
	 <link href="{{ asset('dashboard/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
	<div class="container-fluid">
			<div class="row justify-content-center">
					<div class="col-lg-12">
							<div class="card">
									<div class="card-body">
															<div class="form-group row">
																<div class="col-lg-12"><label class="col-lg-4 col-form-label">Bus Name :</label>
																	{{$data->busName}}
																</div>
																	{{-- <div class="col-lg-12"><label class="col-lg-4 col-form-label">Bus Chassis :</label>
																	{{$chassis}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Destination :</label>
																	{{$distination}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Journey Date :</label>
																	{{$journey}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Bording Points :</label>
																	{{$depature}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Seat Nos :</label>
																	{{$seats}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Total Sold Seat :</label>
																	{{$totalSeat}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Ticket Price :</label>
																	{{$ticketPrice}}</div>
																	<div class="col-lg-12"><label class="col-lg-4 col-form-label">Total Sold Price :</label>
																	{{$totalPrice}}
																	</div> --}}
																</div>
															</div>
									</div>
							</div>
					</div>
			</div>
</body>
</html>
