@extends('admin.app')
@section('title')
Edit Total Seat
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Bus Informations</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/total_seat/edit') }}\{{ $single_total_seat->id }}">Edit Total Seat</a></li>
            </ol>
        </div>
    </div>
    
    <!-- Error -->
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
                        <h4 class="card-title">Edit Total Seat</h4>
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('total_seat_update') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="total_seat">Total Seat</label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="total_seat"  value="{{ $single_total_seat->total_seat }}" required>
	                                    <input type="hidden" class="form-control" name="id"  value="{{ $single_total_seat->id }}" required>
	                                </div>
	                            </div>
	                            
	                            <div class="form-group row">
	                                <div class="col-lg-8 ml-auto">
	                                    <button type="submit" class="btn btn-primary">Update info</button>
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