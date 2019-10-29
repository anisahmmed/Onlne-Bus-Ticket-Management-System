@extends('admin.app')
@section('title')
Update Users Information
@endsection

@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
            </ol>
        </div>
    </div>
	<div class="col-lg-12">
	    <div class="card">
	        <div class="card-body">
	            <h4 class="card-title">Update Users Informations</h4>
	            <div class="basic-form">
	                <form method="post" action="{{ route('users_info_update') }}">

	                	@csrf
	                    
	                        <div class="form-group col-md-8">
	                            <label for="name">Name</label>
	                            <input type="hidden" name="id" class="form-control" value="{{ $single_user_info->id }}">
	                            <input type="text" name="name" id="name"class="form-control" value="{{ $single_user_info->name }}">
	                        </div>
	                        <div class="form-group col-md-8">
	                            <label for="email">Email</label>
	                            <input type="email" name="email" id="email"class="form-control" value="{{ $single_user_info->email }}">
	                        </div>
		                    <div class="form-group col-md-8">
		                        <label for="phone">Phone</label>
		                        <input type="number" name="phone" id="phone" class="form-control" value="{{ $single_user_info->phone }}">
		                    </div>
	                    <button type="submit" class="btn btn-primary offset-md-3">Update Informations</button>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection