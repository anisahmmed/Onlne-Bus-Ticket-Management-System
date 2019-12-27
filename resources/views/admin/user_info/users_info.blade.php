@extends('admin.app')
@section('title')
User Informations
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/users_info') }}">Users</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; text-align: center;">User Informations</h4><br>
                        <a href="{{ url('/admin/create_user/index') }}" class="btn btn-info ">Create New <i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
                        <button class="btn btn-info" onclick="printDiv('printableArea')">Print</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        @if ($user->role_id ==1)
                                          <td>Admin</td>
                                        @elseif ($user->role_id==2)
                                          <td>Agent</td>
                                        @else
                                          <td>Customer</td>
                                        @endif

                                        @if ($user->status_id==1)
                                          <td>Active</td>
                                        @else
                                          <td>Blocked</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('/admin/users_info/edit') }}\{{ $user->id }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- Print area start here --}}
    <div id="printableArea" style="opacity:0;display:none;visibility:hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold; font-size: 22px;">Users Informations</h4><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
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
    </div>
    {{-- Print area end here --}}

</div>


@endsection
