@extends('admin.app')
@section('title')
Register Terminal
@endsection

@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Register Terminal Form</a></li>
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
            <!-- row -->
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form-validation">
	                        <form class="form-valide" action="{{ route('insert_terminal_register') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="operator_id">Operator Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="operator_id" id="operator_id" class="form-control" required>
                                            <option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_bus as $buses)
	                                    	<option value="{{ $buses->id }}" >{{ $buses->ralationbetweenOperator->operator_name }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="terminal_id">Terminal Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="terminal_id" id="terminal_id" class="form-control" required>
                                            <option class="bg-dark text-white">Select</option>
	                                    	@foreach($all_terminal as $terminals)
	                                    	<option value="{{ $terminals->id }}" >{{ $terminals->terminal_name }}</option>
	                                    	@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                            
	                            
	                            <div class="form-group row">
	                                <div class="col-lg-8 ml-auto">
	                                    <button type="submit" class="btn btn-primary">Submit</button>
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