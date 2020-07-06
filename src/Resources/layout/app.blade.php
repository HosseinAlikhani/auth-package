<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> D3CR33 / Login Page </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/src/auth/assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('/src/auth/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/src/auth/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/src/auth/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/src/auth/assets/css/forms/switches.css') }}">

    <!-- Custom CSS -->
    @yield('css')
</head>
<body class="form">


<div class="form-container">
    @yield('content')
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('/src/auth/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('/src/auth/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/src/auth/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- custom script -->
@yield('script')
</body>

</html>