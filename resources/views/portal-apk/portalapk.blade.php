<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  </head>
  <style>
    body {
      background-image: url('public/assets/dist/img/begron.png');
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <body>
    <div class="wrapper">
      <header class="py-5">
        <h1 class="display-5 fw-bold text-center" style="color: white;">Aplikasi RSI Kendal</h1>
      </header>
      <div class="row">
      @foreach ($portal as $a)
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$a->nama_apk}}</h3>
              <p>{{$a->ket_apk}}</p>
            </div>
            <div class="icon">
              <i class="{{$a->icon}}"></i>
            </div>
            <a href="{{$a->link}}" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>SIM MUTU</h3>
              <p>Mutu RS</p>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
            <a href="http://portal.rsikendal.com/mutu/login.php" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>SEKRETARIAT</h3>
              <p>Akses Sekretariat</p>
            </div>
            <div class="icon">
              <i class="fa fa-address-book"></i>
            </div>
            <a href="http://portal.rsikendal.com/sekretariat/" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>TELEMEDICINE</h3>
              <p>Konsultasi Medis</p>
            </div>
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <a href="https://komen.kemkes.go.id/v2/index.php/login" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>MY DPJP</h3>
              <p>Dashboard Dokter</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="http://portal.rsikendal.com/mydpjp/login.html" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>SPK RKK</h3>
              <p>Lihat File</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder-open"></i>
            </div>
            <a href="http://portal.rsikendal.com/spkrkk/" class="small-box-footer"> Lihat <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>KEPK RSI</h3>
              <p>Penelitian Kesehatan</p>
            </div>
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <a href="http://kepk.rsikendal.com/sim-epk-kepk/auth/login/" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>E KLAIM</h3>
              <p>fasilitas kesehatan rujukan tingkat lanjutan</p>
            </div>
            <div class="icon">
              <i class="fa fa-sitemap"></i>
            </div>
            <a href="http://eklaim.rsikendal.com/eklaim/" class="small-box-footer"> Login <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
  </body>
</html>