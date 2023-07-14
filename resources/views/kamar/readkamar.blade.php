<!DOCTYPE html>
<html lang="en">
    <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Kamar</title>
      
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
      <style>
          body {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
          }
      </style>
    </head>
      <style>
          body {
            background-image: url('{{ asset('assets/dist/img/begron.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
          }
      </style>
  <body>
    <div class="wrapper container-fluid">
        <header class="py-5">
          <h1 class="display-5 fw-bold text-center" style="color: white;font-size: 100px ;">INFORMASI KAMAR RSI KENDAL</h1>
        </header>
        <div class="row">
          @foreach($kamar as $a)
            @if ($kamar->count() == 1)
                <div class="col-md-12">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 270px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar" style="font-size: 100px;">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas" style="font-size: 100px;">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer" style="height: 700px">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center; font-size: 80px;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 500px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 2)
                <div class="col-md-6">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 180px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar"style="font-size: 70px;">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas"style="font-size: 60px;">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center; height: 160px; font-size: 80px;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 200px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 3)
                <div class="col-md-4">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 4)
                <div class="col-md-3">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 5)
                <div class="col-md-3">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 6)
                <div class="col-md-3">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 7)
                <div class="col-md-3">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @elseif($kamar->count() == 8)
                <div class="col-md-3">
                  <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info" style="height: 160px;">
                      <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}" />
                      <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                      <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                    </div>
                    <div class="card-footer">
                      <div class="description-block">
                        <h3 class="description-text" style="text-align:center;">STATUS</h3>
                        <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                      </div>
                    </div>
                  </div>
                </div>
            @endif
          @endforeach
        </div>
    </div>
    
    <audio id="audioPlayer" src="{{ asset('mp3/silence.mp3') }}" loop></audio>

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>

    {{-- ==========================================socket==================================================================== --}}
    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <script>
      const socket = io.connect('http://192.168.110.218:3030');
      socket.on('order_processed', (data) => {

        var id_status = data.item_id;
          var url = "{{route('cari-status',':id_status')}}";
          $.ajax({
            type: "GET",
            url: url.replace(':id_status', id_status),
            dataType: 'json',
            success: function(res) {
              h1Element.textContent = res.status;
            }
          });
          
      });
    </script>
    {{-- ==========================================end socket==================================================================== --}}
    <script>
        // var id_status = data.item_id;
        //   var url = "{{route('cari-status',':id_status')}}";
        //   $.ajax({
        //     type: "GET",
        //     url: url.replace(':id_status', id_status),
        //     dataType: 'json',
        //     success: function(res) {
        //       h1Element.textContent = res.status;
        //     }
        //   });
    </script>
  </body>
</html>