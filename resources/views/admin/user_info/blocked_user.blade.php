<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
       @yield('title')
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/all-img/icon.jpg') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('dashboard/assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>

<body>
    
    <div class="welcome">Your account is not authorized</div>



    <script src="{{ asset('dashboard/assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/settings.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/gleek.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('dashboard/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('dashboard/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('dashboard/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/morris/morris.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('dashboard/assets/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('dashboard/assets/js/dashboard/dashboard-1.js') }}"></script>

</body>


</html>
