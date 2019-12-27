@extends('admin.app')
@section('title')
Edit Users Information
@endsection

@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/users_info/edit') }}/{{ $single_user_info->id }}">Edit User</a></li>
            </ol>
        </div>
    </div>

	<div class="container-fluid">
		    <div class="row justify-content-center">
		        <div class="col-lg-8">
		            <div class="card">
		                <div class="card-body">
	            			<h4 class="card-title">Edit User Info</h4>
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

		                        <form class="form-valide" action="{{ route('users_info_update') }}" method="post">
		                        	@csrf
		                            <div class="form-group row">
		                                <label class="col-lg-4 col-form-label" for="sessis_no">User Name<span class="text-danger">*</span></label>
		                                <div class="col-lg-6">
		                                    <input type="text" class="form-control" name="name" value="{{ $single_user_info->name }}" placeholder="User Name" required>
		                                    <input type="hidden" name="id" value="{{ $single_user_info->id }}">
		                                </div>
		                            </div>
		                            <div class="form-group row">
		                                <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger">*</span></label>
		                                <div class="col-lg-6">
		                                    <input type="email" id="email" class="form-control" name="email" value="{{ $single_user_info->email }}" placeholder="User Email" required>
		                                </div>
		                            </div>
		                            <div class="form-group row">
		                                <label class="col-lg-4 col-form-label" for="phone">Phone<span class="text-danger">*</span></label>
		                                <div class="col-lg-6">
		                                    <input type="number" id="phone" class="form-control" name="phone" value="{{ $single_user_info->phone }}" placeholder="User Phone" required>
		                                </div>
		                            </div>
		                            <div class="form-group row">
		                                <label class="col-lg-4 col-form-label" for="status_id">User Status<span class="text-danger">*</span></label>
		                                <div class="col-lg-6">
		                                    <select name="status_id" id="status_id" class="form-control" required>
		                                    	@if($single_user_info->status_id ==1)
		                                    	<option value="1" class="bg-success text-white">Active</option>
												                  @else
		                                    	<option value="2" class="bg-danger text-white">Deactive</option>
		                                    	@endif
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

</div>

@endsection
