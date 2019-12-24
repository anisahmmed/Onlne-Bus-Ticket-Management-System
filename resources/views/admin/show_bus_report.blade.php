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
                          <div id="printableArea">
                          <p style="color: #000; font-size:18px;">Report of <strong style="color:green;">{{ $busName }}</strong> For <strong style="color:green;">{{ $bus_routes }}</strong> Route</p>
                          <br>
                              <div class="form-group row" style="color: #000; font-size:14px;">
                                <table class="table table-borderless">
                                  <thead>
                                    <tr class="table-warning">
                                      <th scope="col">Criteria</th>
                                      <th scope="col">Description</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Bus Name</td>
                                      <td>{{ $busName }}</td>
                                    </tr>
                                    <tr>
                                      <td class="table-warning">Bus Chassis No</td>
                                      <td>{{ $chassis }}</td>
                                    </tr>
                                    <tr>
                                      <td>Bus Route</td>
                                      <td>{{ $bus_routes }}</td>
                                    </tr>
                                    <tr>
                                      <td class="table-warning">Journey Date</td>
                                      <td>{{ date('d-M-Y', strtotime($journey)) }}</td>
                                    </tr>
                                    <tr>
                                      <td>Destination</td>
                                      <td>{{ $distination }}</td>
                                    </tr>
                                    <tr>
                                      <td class="table-warning">Boarding Points With Time</td>
                                      <td>{{ $depature }}</td>
                                    </tr>
                                    <tr>
                                      <td >Seat Nos</td>
                                      <td>{{ $seats }}</td>
                                    </tr>
                                    <tr>
                                      <td class="table-warning">Total Seat</td>
                                      <td>{{ $totalSeat }}</td>
                                    </tr>
                                    <tr>
                                      <td>Ticket Price</td>
                                      <td>{{ $ticketPrice }} Tk</td>
                                    </tr>
                                    <tr>
                                      <td class="table-warning">Total Sell</td>
                                      <td>{{ $totalPrice }} Tk</td>
                                    </tr>
                                  </tbody>
                                </table>


                              </div>
                            </div>
                            <div class="col-md-10 text-center">
                              <button id="singlebutton" name="singlebutton" class="btn btn-primary" onclick="printDiv('printableArea')">PDF!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          {{-- <button class="btn btn-primary" onclick="printDiv('printableArea')">Print</button> --}}
  </div>


@endsection
