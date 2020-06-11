<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="{{ asset("/vendor/admin-lte/plugins/fontawesome-free/css/all.min.css")}}" rel="stylesheet"
          type="text/css"/>

    <!-- Theme style -->
    <link href="{{ asset("/vendor/admin-lte/dist/css/adminlte.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    @include('layout.admin_lte.includes.left-navbar')
    <!-- SEARCH FORM -->
    @include('layout.admin_lte.includes.search')

    <!-- Right navbar links -->
        @include('layout.admin_lte.includes.right-navbar')
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('layout.admin_lte.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layout.admin_lte.includes.header')
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            @yield('content')
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@include("layout.admin_lte.includes.control_sidebar")

<!-- Main Footer -->
    @include("layout.admin_lte.includes.footer")
</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/vendor/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/vendor/bootstrap/js/bootstrap.bundle.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/vendor/admin-lte/dist/js/adminlte.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>
