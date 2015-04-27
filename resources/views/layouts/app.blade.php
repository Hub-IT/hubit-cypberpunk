<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HubIT Cyberpunks | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! asset('packages/bower/admin-lte/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"
          type="text/css">
    <!-- Font Awesome Icons -->
    <link href="{!! asset('packages/bower/fontawesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- page specific plugin styles -->
    @yield('styles')
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="{!! asset('packages/bower/ionicons/css/ionicons.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="{!! asset('packages/bower/admin-lte/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{!! asset('packages/bower/admin-lte/dist/css/skins/_all-skins.min.css') !!}" rel="stylesheet"
          type="text/css">
    <!-- inline styles related to this page -->
    @yield('inline-styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link href="{!! asset('packages/bower/html5shiv/dist/html5shiv.min.js') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('packages/bower/respond/dest/respond.min.js') !!}" rel="stylesheet" type="text/css">
    <![endif]-->
</head>
<body class="skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

    @include('layouts._app_header')
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    @include('layouts._app_sidebar')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">

            @include('flash::message')

            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('layouts._app_footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="{!! asset('packages/bower/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! asset('packages/bower/admin-lte/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{!! asset('packages/bower/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') !!}"
        type="text/javascript"></script>
<!-- FastClick -->
<script src="{!! asset('packages/bower/admin-lte/plugins/fastclick/fastclick.min.js') !!}"
        type="text/javascript"></script>
<!-- page specific plugin scripts -->
@yield('scripts')
<!-- AdminLTE App -->
<script src="{!! asset('packages/bower/admin-lte/dist/js/app.min.js') !!}" type="text/javascript"></script>
<!-- inline scripts related to this page -->
@yield('inline-scripts')
</body>
</html>
