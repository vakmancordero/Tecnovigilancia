<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- StyleSheet -->
    <link href="{{ asset('lib/sb-admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/sb-admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/sb-admin/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/sb-admin/css/plugins/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap-table/dist/bootstrap-table.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/sb-admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/fullcalendar-3.4.0/fullcalendar.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/fullcalendar-3.4.0/fullcalendar.print.min.css') }}" rel="stylesheet" type="text/css" media='print'>

    @yield('stylesheets')

    @yield('javascript-before')

    <title>@yield('title')</title>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

@yield('content')

<!-- jQuery -->
<script src="{{ asset('lib/sb-admin/js/jquery.js') }}"></script>
{{-- AngularJS --}}
<script src="{{ asset('lib/angular/angular.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('lib/sb-admin/js/bootstrap.min.js') }}"></script>
{{-- Bootstrap Table --}}
<script src="{{ asset('lib/bootstrap-table/dist/bootstrap-table.js') }}"></script>
{{-- Moment JS --}}
<script src="{{ asset('lib/fullcalendar-3.4.0/lib/moment.min.js') }}"></script>
{{-- Full Calendar --}}
<script src="{{ asset('lib/fullcalendar-3.4.0/fullcalendar.min.js') }}"></script>

<!-- JavaScript -->
@yield('javascript')

</body>
</html>