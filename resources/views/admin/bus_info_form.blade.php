@extends('admin.app')
@section('title')
Add Bus Information
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method = "post" action="{{ route('bus_insert') }}" style="margin-top: 130px; color: #000">
				<span style= "text-align: center; color: green; font-size: 30px;">Add Bus Informations</span><br><br>
				<div class="form-row">

				@csrf

				<div class="form-group col-md-6">
					<label for="operator">Operator Name</label>
					<input type="text" name="operator" class="form-control" id="operator" placeholder="Operator Name">
				</div>
				<div class="form-group col-md-6">
					<label for="ac_nac">AC/NAC</label>
					<select class="form-control" name="ac_nac" id="ac_nac">
						<option>AC</option>
						<option>NAC</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="departure">Departure</label>
					<input type="text" name="departure" class="form-control" id="departure" placeholder="Departure">
				</div>
				<div class="form-group col-md-6">
					<label for="duration">Duration/hour</label>
					<input type="number" name="duration" class="form-control" id="duration" placeholder="Duration">
				</div>
				<div class="form-group col-md-6">
					<label for="distance">Distance/km</label>
					<input type="number" name="distance" class="form-control" id="distance" placeholder="Distance">
				</div>
				<div class="form-group col-md-6">
					<label for="arrival">Arrival</label>
					<input type="text" name="arrival" class="form-control" id="arrival" placeholder="Arrival">
				</div>
				<div class="form-group col-md-6">
					<label for="total_seat">Total Seat</label>
					<input type="text" name="total_seat" class="form-control" id="total_seat" placeholder="Total Seat">
				</div>
				<div class="form-group col-md-6">
					<label for="price">Price</label>
					<input type="number" name="price" class="form-control" id="price" placeholder="Price">
				</div>
				<div class="form-group col-md-6 offset-md-3">
					<input type="submit" class="btn btn-primary" value="Set Information">
				</div>
				</div>
			</form>
		</div>
	</div>
</div>



@endsection