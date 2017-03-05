<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | @yield('title')</title>

    @yield('head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layouts.man_sidebar')

    <!-- Content Wrapper. Contains page content -->
    @include('admin.layouts.content_wrapper')
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')

    @include('admin.layouts.control_sidebar')

</div>
@yield('libs')
<script>
    $(function () {
        $('.main-sidebar .sidebar .sidebar-menu li ul li.active').parent().parent().addClass("active");
    })
</script>
</body>
</html>
