@extends('admin.app')
@section('title')
Admin Pannel
@endsection


@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-danger">
                                        <i class="mdi mdi-account-multiple"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Customer</p>
                                        <h3>{{ App\User::where('role_id',3)->count() }}</h3>
                                    </div>
                                </div>
                                <p class="mb-0"> Since Last Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-warning">
                                        <i class="mdi mdi-receipt"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Cost</p>
                                        <h3>৳24,358</h3>
                                    </div>
                                </div>
                                <p class="mb-0"> Since Last Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content d-flex justify-content-between">
                                    <div class="stat-text text-success">
                                        <i class="mdi mdi-poll-box"></i>
                                    </div>
                                    <div class="stat-digit">
                                        <p class="mb-2">Total Sales</p>
                                        <h3>৳52,365</h3>
                                    </div>
                                </div>
                                <p class="mb-0"> Since Last Month</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
