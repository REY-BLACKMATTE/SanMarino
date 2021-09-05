<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('screen', 'Inicio') | Carreras</title>
    <meta property="og:title" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <link rel="apple-touch-icon" sizes="192x192" href="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/dist/css/adminlte.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/iCheck/flat/blue.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Datetimepicker -->
    <!-- <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/datetimepicker/datetimepicker.css') }}"> -->
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
    <!-- estilos personalizados -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/plugins/datatables/dataTables.bootstrap4.css') }}">

    <!-- toastr-alerts -->
    <link rel="stylesheet" href="{{ url('assets/admin-lte/dist/js/plugins/toastr-alerts/toastr.min.css') }}">

    <link type="text/css" rel="stylesheet" href="css/bootstrap4/tail.select-success.css" />

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
    <!-- Back to top button -->
    <div id="back2top"></div>

    <div class="wrapper">
        <!-- Main Navbar -->
        @include('partials.topbar')
        <!-- /.navbar -->
        <!-- Main Menu -->
        @include('partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('screen', 'def')</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                                <li class="breadcrumb-item active">@yield('screen', 'def')</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main Content -->

            <section class="content">
                <div class="container">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('partials.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
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
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.3/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datetimepicker -->
    <!-- <script src="{{ url('assets/admin-lte/plugins/datetimepicker/datetimepicker.js') }}"></script> -->
    <!-- datepicker -->
    <script src="{{ url('assets/admin-lte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/datepicker/locales/bootstrap-datepicker.es.js') }}" charset="UTF-8"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> -->
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
    <script src="{{ url('js/general.js') }}"></script>
    <script src="{{ url('js/global.js') }}"></script>
    <script src="{{ url('js/formValidate.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ url('assets/admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ url('assets/admin-lte/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js') }}"></script>
    <!-- Modal -->
    <script src="{{ url('assets/admin-lte/dist/js/plugins/modal-alerts/sweetalert2.all.min.js') }}"></script>
    <!-- toastr-alerts -->
    <script src="{{ url('assets/admin-lte/dist/js/plugins/toastr-alerts/toastr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="js/tail.select.min.js"></script>
    <script src="js/tail.select-full.min.js"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="https://kit.fontawesome.com/22a9f60129.js" crossorigin="anonymous"></script>

    @yield('scripts')
</body>

</html>
