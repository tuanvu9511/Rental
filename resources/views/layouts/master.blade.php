<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('/')}}/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('/')}}/AdminLTE-3.1.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->

</head>
<body class="sidebar-mini sidebar-collapse">
<!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{URL::to('/')}}/AdminLTE-3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div> -->
<script src="{{URL::to('/')}}/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>

@include('layouts.navbar')
@include('layouts.sidebar')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid pt-3">
      	@yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('layouts.footer')

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

<script src="{{URL::to('/')}}/AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('/')}}/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>