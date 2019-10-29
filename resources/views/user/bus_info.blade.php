@extends('user.app')
@section('title')
Bus Information
@endsection

@section('content')
    <div class="container" style="margin-top: 130px; color: #000; font-weight: normal;">
        <div class="row">
            <div class="col-md-7 offset-md-2">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Operator</th>
                        <th scope="col">AC/NAC</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Arrival</th>
                        <th scope="col">Total Seat</th>
                        <th scope="col">Price</th>
                        <th scope="col">View Seats</th>
                    </tr>
                </thead>
                <tbody>

                    
                    <tr>
                        <th scope="row">sfgasdf</th>
                        <td>fdasafd</td>
                        <td>dfadada</td>
                        <td>dfasdaf</td>
                        <td>afddsaf</td>
                        <td>afdasdf</td>
                        <td>afdadvf</td>
                        <td>afdadvf</td>
                        <td>afdadvf</td>
                        <td>
                            <a href="{{ url('/user/bus_seat') }}" class="btn btn-primary" target="_blank">View Seats</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">sfgasdf</th>
                        <td>fdasafd</td>
                        <td>dfadada</td>
                        <td>dfasdaf</td>
                        <td>afddsaf</td>
                        <td>afdasdf</td>
                        <td>afdadvf</td>
                        <td>afdadvf</td>
                        <td>afdadvf</td>
                        <td>
                            <a href="{{ url('/user/bus_seat') }}" class="btn btn-primary" target="_blank">View Seats</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>



    

@endsection
