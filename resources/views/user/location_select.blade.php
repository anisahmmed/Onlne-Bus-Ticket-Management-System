@extends('user.app')
@section('content')

@section('title')
Select Location
@endsection

<p class="paragraph">Select your district and your nearest counter</p>
	<div class="main">
		<form action="" method="post">
			<div class="district">
				District
			</div>
			<select class="form-control" name="" id="">
				<option class="font" value="">Dhaka</option>
				<option class="font" value="">Gazipur</option>
				<option class="font" value="">Khulna</option>
				<option class="font" value="">Rajshahi</option>
				<option class="font" value="">Dinajpur</option>
				<option class="font" value="">Borishal</option>
				<option class="font" value="">Joshor</option>
			</select> 
			<div class="counters">
				Counters
			</div>
			<select class="form-control" name="" id="">
				<option class="font" value="">Dhaka</option>
				<option class="font" value="">Gazipur</option>
				<option class="font" value="">Khulna</option>
				<option class="font" value="">Rajshahi</option>
				<option class="font" value="">Dinajpur</option>
				<option class="font" value="">Borishal</option>
				<option class="font" value="">Joshor</option>
			</select>
			<br />
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


@endsection