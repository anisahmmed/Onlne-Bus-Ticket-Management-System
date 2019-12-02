@extends('admin.app')
@section('title')
Edit Destination Info
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Bus Informations</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/destination_info/edit') }}\{{ $single_destination_info->id }}">Edit Destination Info</a></li>
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
                        <h4 class="card-title">Edit Destination Info</h4>
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('destination_info_update') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="departure_time">Destination</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" id="destination" name="destination"  value="{{ $single_destination_info->destination }}" required>
	                                    <input type="hidden" class="form-control" id="id" name="id"  value="{{ $single_destination_info->id }}" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="destination_scenario">Departure Scenario</label>
	                                <div class="col-lg-6">
	                                    <input type="file" class="form-control" id="destination_scenario" name="destination_scenario"  value="{{ $single_destination_info->destination_scenario }}" >
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