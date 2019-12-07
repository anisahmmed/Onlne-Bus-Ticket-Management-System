@extends('admin.app')
@section('title')
Report
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
                          <div class="form-validation">
                              <form class="form-valide" action="{{ Route('show_bus_details') }}" method="post">
                                @csrf
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="operator_name_id">Select Chassis<span class="text-danger">*</span></label>
                                      <div class="col-lg-6">
                                          <select name="chassis" id="operator_name_id" class="form-control" required>
                                            <option class="bg-dark text-white">Select</option>
                                            @php
                                              $ch = null;
                                            @endphp
                                            @foreach($all_bus_info as $operators)
                                            @endphp
                                            @if ($ch==null)
                                              @php
                                                $ch=$operators->bus_chassis;
                                              @endphp
                                              <option value="{{ $ch }}">{{ $ch }} ({{ $operators->bus_name }})</option>
                                            @else
                                              @if ($ch!=$operators->bus_chassis)
                                                @php
                                                  $ch=$operators->bus_chassis;
                                                @endphp
                                                <option value="{{ $ch }}">{{ $ch }} ({{ $operators->bus_name }})</option>
                                              @endif
                                            @endif
                                            @endforeach
                                          </select>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-8 ml-auto">
                                              <button type="submit" class="btn btn-primary">Show Details</button>
                                          </div>
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


@endsection
