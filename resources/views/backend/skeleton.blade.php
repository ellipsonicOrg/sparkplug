<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $product_name }}</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />


    <link href="{{ URL::asset('backend/css/production.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('backend/angular/angular-ui-grid/ui-grid.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('backend/css/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="{{ URL::asset('custom/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="{{ $body_class }}">

    <div class="wrapper">

        @yield('template')

    </div><!-- ./wrapper -->

</body>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ URL::asset('backend/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ URL::asset('backend/plugins/chartjs/Chart.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('backend/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Production JS -->
<script src="{{ URL::asset('backend/js/production.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('backend/angular/angular.min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('backend/angular/angular-ui-grid/ui-grid.min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('backend/angular/angular-touch/angular-touch.min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('custom/script.js') }}" type="text/javascript"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->


@yield('extra_scripts')

</html>