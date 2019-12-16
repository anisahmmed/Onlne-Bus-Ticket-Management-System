@extends('admin.app')
@section('title')
Contact Informations
@endsection
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/contact-form/view') }}">Contact Info</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold; font-size: 22px; text-align: center;">Contact Information</h4><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" style="color: #000;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Received Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_contact_info as $contact_info)
                                    <tr>
                                        <td>{{$contact_info->id}}</td>
                                        <td>{{$contact_info->name}}</td>
                                        <td>{{$contact_info->email}}</td>
                                        <td>{{$contact_info->message}}</td>
                                        <td>{{$contact_info->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ url('/admin/users_info/delete') }}\{{ $contact_info->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $all_contact_info->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
