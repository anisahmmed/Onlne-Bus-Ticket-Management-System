@extends('admin.app')
@section('title')
Edit Journey Date
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/input') }}">Add Bus Informations</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/dates/edit') }}\{{$single_date->id}}">Edit Journey Date</a></li>
            </ol>
        </div>
    </div>
    <!-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    @if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
    @endif -->
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
	        <div class="col-lg-8">
	            <div class="card">
	                <div class="card-body">
                        <h4 class="card-title">Edit Date</h4>
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('date_update') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="date">Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" id="date" name="date"  value="{{ $single_date->date }}" required>
                                        <input type="hidden" class="form-control" id="id" name="id"  value="{{ $single_date->id }}" required>
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