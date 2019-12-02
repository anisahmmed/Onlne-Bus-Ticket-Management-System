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
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Register Terminal Information</a></li>
            </ol>
        </div>
    </div>

	<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; text-align: center;">Register Terminal information</h4><br>
                        <a href="{{ route('terminal_register_index') }}" class="btn btn-info ">Register New <i class="fa fa-plus-square-o" aria-hidden="true"></i></a> 
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000; font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Operator Name</th>
                                        <th>Terminal Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($all_register_terminal as $register_terminals)
                                    <tr>
                                    	<td>{{ $register_terminals->id }}</td>
                                        <td>{{App\Operator::findOrFail($register_terminals->bus_id)->operator_name}}</td>
                                    	<td>{{App\BoardingPoint::findOrFail($register_terminals->boarding_point_id)->terminal_name}}</td>

                                        <td>
                                            <a href="{{ url('/admin/register_terminal/edit') }}\{{ $register_terminals->id }}" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection