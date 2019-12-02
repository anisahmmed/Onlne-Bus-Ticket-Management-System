@extends('admin.app')
@section('title')
Edit Departure Info
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Bus Informations</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/departure_info/edit') }}\{{ $single_departure_info->id }}">Edit Departure Info</a></li>
            </ol>
        </div>
    </div>

    <!-- Error message -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <!-- End error message -->

    <!-- Bus Chassis -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-12">
	            <div class="card">
	                <div class="card-body">
                        <h4 class="card-title">Edit Bus Departure Info</h4>
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('departure_info_update') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Departure</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="departure" name="departure"  value="{{ $single_departure_info->departure }}" required>
	                                    <input type="hidden" class="form-control" id="departure" name="id"  value="{{ $single_departure_info->id }}" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Departure Time</label>
	                                <div class="col-lg-6">
	                                    <input type="time" class="form-control" id="departure_time" name="departure_time"  value="{{ $single_departure_info->departure_time }}" required>
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <div class="col-lg-8 ml-auto">
	                                    <button type="submit" class="btn btn-primary">Update Info</button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection