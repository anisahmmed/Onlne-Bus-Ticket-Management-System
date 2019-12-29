@extends('customer.app')
@section('title')
Search Result
@endsection

@section('content')

{{-- <div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Bus Information</a></li>
            </ol>
        </div>
    </div> --}}
    <main class="main" role="main">
        <!-- Page info -->
        <header class="site-title color">
            <div class="wrap">
                <div class="container">
                    <h1>Bus Informations</h1>
                    <nav role="navigation" class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/customer/bus_info') }}" title="Home">Search</a></li>
                            <li>Search Result</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                								<span>No Result Found..</span><br><br><br>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
