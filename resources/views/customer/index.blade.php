@extends('customer.app')

@section('css')

    <link href="{{ asset('search_asset/css/main.css') }}" rel="stylesheet" />
@endsection

@section('title')
Online Bus | Ticket 
@endsection


@section('content')
<!-- Main -->
    <!-- Page info -->
    <header class="site-title color">
      <div class="wrap">
        <div class="container">
          <h1>Search Bus</h1>
        </div>
      </div>
    </header>
      <div class="s002">
        <form role="search" action="/customer/search/result" method="post">
          @csrf

          <fieldset>
            <legend>SEARCH BUS</legend>
          </fieldset>
          <div class="inner-form">
            <div class="input-field first-wrap">
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                </svg>
              </div>
            </div>
            <div class="input-field fouth-wrap">
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                </svg>
              </div>
              <select data-trigger="" name="departure">
                <option>From</option>
                @foreach($all_departure as $departures)
                <option value="{{ $departures->id }}">{{ $departures->departure }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-field fouth-wrap">
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                </svg>
              </div>
              <select data-trigger="" name="destination">
                <option>To</option>
                @foreach($all_destination as $destinations)
                <option value="{{ $destinations->id }}">{{ $destinations->destination }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-field fouth-wrap">
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                </svg>
              </div>
              <select data-trigger="" name="journey_date">
                <option>Journey Date</option>
                @foreach($all_date as $dates)
                <option value="{{ $dates->id }}">{{ $dates->date }}</option>
                @endforeach
              </select>
            </div>{{-- 
            <div class="input-field second-wrap">
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                </svg>
              </div>
              <input class="datepicker" id="depart" type="date" placeholder="Journey Date" />
            </div> --}}
            in
            <div class="input-field fifth-wrap">
              <button class="btn-search" type="button">SEARCH</button>
            </div>
          </div>
        </form>
      </div>


@endsection

@section('js')
{{-- search --}}
    <script src="{{ asset('search_asset/js/extention/choices.js') }}"></script>
    <script src="{{ asset('search_asset/js/extention/flatpickr.js') }}"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
    @endsection