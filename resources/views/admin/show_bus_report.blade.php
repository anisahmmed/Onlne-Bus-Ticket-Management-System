@extends('admin.app')
@section('title')
Bus Report Detail
@endsection

@section('content')
  <div class="content-body">

      <div class="row page-titles mx-0">
          <div class="col p-md-0">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/admin/homepage') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active"><a href="{{ url('/admin/buses') }}">Create Bus Information</a></li>
              </ol>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                                  <div class="form-group row" style="color: #000;">
                                    <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Bus Name :</label>
                                      {{$busName}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Bus Chassis :</label>
                                      {{$chassis}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Destination :</label>
                                      {{$distination}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Journey Date :</label>
                                      {{date('d-M-Y', strtotime($journey))}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Bording Points :</label>
                                      {{$depature}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Seat Nos :</label>
                                      {{$seats}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Total Sold Seat :</label>
                                      {{$totalSeat}}
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Ticket Price :</label>
                                      {{$ticketPrice}} TK
                                    </div>
                                      <div class="col-lg-12"><label class="col-lg-4 col-form-label" style="font-weight: bold;">Total Sold Price :</label>
                                      {{$totalPrice}} TK
                                      </div>
                                          <div class="col-lg-8 ml-auto">
                                              <a href="{{ url('/generate-pdf') }}/{{ $chassis }}" class="btn btn-primary">PDF</a>
                                          </div>
                                    </div>
                                  </div>
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>


@endsection
