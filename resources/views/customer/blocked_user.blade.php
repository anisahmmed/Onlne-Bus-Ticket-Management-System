@extends('customer.app')
@section('title')
  Blocked User
@endsection

@section('content')

  <main class="main" role="main">
      <!-- Page info -->
      <header class="site-title color">
          <div class="wrap">
              <div class="container">
                  <h1>Bus Informations</h1>
                  <nav role="navigation" class="breadcrumbs">
                      <a href="{{ url('/customer/booking-information') }}" class="btn color medium ">View Booking Informations</a>
                  </nav>
              </div>
          </div>
      </header>
        <p style="margin: 30%; font-size: 25px; color: red;">CURRENTLY YOUR ACCOUNT IS BLOCKED.</p>
</main>
@endsection
