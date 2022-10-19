<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark text-white " style="background-color: #5A1F5A ;">
      <div class="container">
        <a href="/Assets/AdminLTE-3.2.0/index3.html" class="navbar-brand">
          <img src="/Assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">BEAUTY GUIDE</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/home" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
              <a href="/mahasiswa" class="nav-link">Treatment</a>
            </li>
            <li class="nav-item">
              <a href="/about" class="nav-link">Tentang Kami</a>
            </li>



          </ul>

          <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->

      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #FCEBFC;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <?php $this->renderSection('content'); ?>

          
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">


          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/Assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/Assets/AdminLTE-3.2.0/dist/js/demo.js"></script>
  <!-- Summernote -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function() {
      $('#deskripsi').summernote()
    })
  </script>
</body>

</html>