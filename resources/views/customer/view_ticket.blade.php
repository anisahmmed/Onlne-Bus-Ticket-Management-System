<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ticket</title>
    <link rel="shortcut icon" href="{{ asset('frontend/front/images/favicon.png') }}" />
    

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }

    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin:0 auto;
      }


    </style>
</head>

<body>
  <div id="printableArea">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">

                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('frontend/front/images/transfers.jpg') }}" style="width:100%; max-width:300px;">
                            </td>


                              <td>
                                <strong>Journey Date   :</strong> {{ $journey_date }}<br>
                                <strong>Departure Time :</strong> {{ $departure_time }}<br>
                                <strong>Boarding Point :</strong> {{ $terminal }}
                              </td>

                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <strong>Customer Name :</strong> {{ $customer_name }}<br>
                                <strong>Contact No    :</strong> {{ $customer_phone }}<br>
                                <strong>Gender        :</strong> {{ $customer_gender }}
                            </td>

                            <td>
                                <strong>Bus Name       :</strong> {{ $bus_name }}<br>
                                <strong>Coach Type     :</strong>{{ $bus_type }}<br>
                                <strong>Bus Chassis No :</strong> {{ $bus_chassis }}<br>
                                <strong>Bus Route      :</strong> {{ $bus_route }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Method</td>

                <td>Status</td>
            </tr>

            <tr class="details">
                <td>Online</td>
                @if ($payment_status ==1)

                  <td>Paid</td>
                  @else
                    <td>Pending</td>
                @endif
            </tr>

            <tr class="heading">
                <td>Description</td>

                <td></td>
            </tr>

            <tr class="item">
                <td>Seat Nos</td>

                <td>{{ $seat_no }}</td>
            </tr>

            <tr class="item">
                <td>Total Seat</td>

                <td>{{ $total_seat }}</td>
            </tr>
            <tr class="item">
                <td>Ticket Price</td>

                <td>{{ $ticket_price }}</td>
            </tr>

            <tr class="total">
                <td>Total Fare</td>

                <td>Total: {{ $total_price }}</td>
            </tr>
        </table>


    </div>
  </div>
  <br>
  <div style="text-align:center;">
    <button class="button" onclick="printDiv('printableArea')">PDF</button>
  </div>

    {{-- Print --}}
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</body>
</html>
