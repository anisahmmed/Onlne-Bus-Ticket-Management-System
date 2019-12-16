@extends('admin.app')
@section('title')
Create User
@endsection
@section('content')

<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="#">Create User</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-lg-8">
	            <div class="card">
	                <div class="card-body">
            			<h4 class="card-title">Create User</h4>
	                    <div class="form-validation">

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
	                        <form class="form-valide" action="{{ route('create_user') }}" method="post">
	                        	@csrf
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="sessis_no">User Name<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="text" class="form-control" name="name" value="{{ old('chassis_no') }}" placeholder="User Name" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="gender">Gender<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select class="form-control" name="gender">
                                        <option selected>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="User Email" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="phone">Phone<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="number" id="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="User Phone" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="password">Password<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="role_id">User Type<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="role_id" id="role_id" class="form-control" required>
	                                    	<option value="2">Agent</option>
	                                    	<option value="3">Customer</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label class="col-lg-4 col-form-label" for="status_id">User Status<span class="text-danger">*</span></label>
	                                <div class="col-lg-6">
	                                    <select name="status_id" id="status_id" class="form-control" required>
	                                    	<option value="1">Active</option>
	                                    	<option value="2">Deactive</option>
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
