<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('screen', 'Inicio') | San Marino</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/dist/css/adminlte.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ url('fonts/css.css') }}">
    <!-- Material Icons -->
    <link rel="stylesheet" href="{{ url('fonts/icon.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('css/ionicons.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('css/all.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <!-- toastr-alerts -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/dist/js/plugins/toastr-alerts/toastr.min.css') }}">

    <!-- https://material.io/resources/icons/?style=baseline -->
    <link rel="stylesheet" href="{{ url('fonts/MI.css') }}">

    <!-- https://material.io/resources/icons/?style=outline -->
    <link rel="stylesheet" href="{{ url('fonts/MIO.css') }}">

    <!-- https://material.io/resources/icons/?style=round -->
    <link rel="stylesheet" href="{{ url('fonts/MIR.css') }}">

    <!-- https://material.io/resources/icons/?style=sharp -->
    <link rel="stylesheet" href="{{ url('fonts/MIS.css') }}">

    <!-- https://material.io/resources/icons/?style=twotone -->
    <link rel="stylesheet" href="{{ url('fonts/MITT.css') }}">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse" onbeforeunload="ALERTACARGANDO()" onload="CERRARALERTA()">
    <div class="wrapper">
        <!-- Main Top Menu -->
        <!-- Main Menu -->
        <!-- Main Content -->
        @yield('content')
        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ url('assets/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('assets/admin-lte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ url('assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('assets/admin-lte/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ url('assets/admin-lte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ url('assets/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ url('assets/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('assets/admin-lte/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('assets/admin-lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="assets/admin-lte/dist/js/pages/dashboard.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('assets/admin-lte/dist/js/demo.js') }}"></script>
    <!-- Modal -->
    <script src="{{ url('assets/admin-lte/dist/js/plugins/modal-alerts/sweetalert2.all.min.js') }}"></script>
    <!-- toastr-alerts -->
    <script src="{{ url('assets/admin-lte/dist/js/plugins/toastr-alerts/toastr.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
