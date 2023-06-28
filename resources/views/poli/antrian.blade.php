<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antrian</title>
    
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
    .col-md-3 {
    padding: 0 15px;
    width: 50%; /* Mengatur lebar kolom menjadi 50% */
    box-sizing: border-box;
  }

  /* Mengatur lebar kolom menjadi 100% pada layar kecil */
  @media (max-width: 767px) {
    .col-md-3 {
      width: 100%;
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
        <h1 class="display-5 fw-bold text-center" style="color: white; font-size: 100px;">ANTRIAN POLIKLINIK RSI KENDAL</h1>
      </header>
      <div class="row">
        @foreach($poli as $a)
          @if ($poli->count() == 1)
              <div class="col-md-12">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 250px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli" style="font-size: 100px;">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter" style="font-size: 100px;">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer" style="height: 700px">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center; font-size: 80px;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 500px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 2)
              <div class="col-md-6">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 180px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli"style="font-size: 70px;">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter"style="font-size: 60px;">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center; height: 160px; font-size: 80px;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 200px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 3)
              <div class="col-md-4">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 4)
              <div class="col-md-3">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 5)
              <div class="col-md-3">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 6)
              <div class="col-md-3">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 7)
              <div class="col-md-3">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @elseif($poli->count() == 8)
              <div class="col-md-3">
                <div class="card card-widget widget-user">
                  <div class="widget-user-header bg-info" style="height: 160px;">
                    <input type="hidden" class="id_lorong" value="{{$a->master_lorong_id}}" />
                    <h1 class="widget-user-desc nama_poli">{{$a->nama_poli}}</h1>
                    <h2 class="widget-user-desc nama_dokter">{{$a->nama_dokter}}</h2>
                  </div>
                  <div class="card-footer">
                    <div class="description-block">
                      <h3 class="description-text" style="text-align:center;">NOMOR ANTRIAN</h3>
                      <h4 class="description-text centered-h1" id="no_antri{{$a->id}}" style="font-size: 150px;"></h4>
                    </div>
                  </div>
                </div>
              </div>
          @endif
        @endforeach
      </div>
  </div>
              

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



    <script>
      $(document).ready(function() {
      var soundPlayed = false; // Variabel flag untuk memeriksa apakah suara sudah diputar

      function playSoundAutomatically() {
      $('.card-widget').each(function() {
        var cardWidget = $(this);
        var id_lorong = cardWidget.find('.id_lorong').val();
        var url = "{{route('cari-poli',':id_lorong')}}";
      $.ajax({
        type: "GET",
        url: url.replace(':id_lorong', id_lorong),
        dataType: 'json',
        success: function(res) {
          $.each(res, function(index, item) {
            var h1Element = document.querySelector('#no_antri' + item.id);
            var previousContent = h1Element.textContent;
            if (item.no_antri !== previousContent && !soundPlayed) {
              playSound();
              soundPlayed = true;

              var footerElement = $(h1Element).closest('.card-footer');
              footerElement.addClass('bg-pink'); // Tambahkan kelas 'bg-pink' untuk mengubah warna latar belakang footer menjadi merah muda

              setTimeout(function() {
                footerElement.removeClass('bg-pink'); // Hapus kelas 'bg-pink' setelah 3 detik
              }, 3000);
            }

            cardWidget.find('#no_antri' + item.id).text(item.no_antri);
          });
                }
              });
            });
          }

          // Pemanggilan pertama tanpa menunggu interval pertama
          playSoundAutomatically();

          // Mengatur waktu interval 3 detik (3000 milidetik) untuk memanggil pemutaran suara secara otomatis
          setInterval(function() {
            soundPlayed = false; // Setel kembali flag menjadi false sebelum setiap iterasi
            playSoundAutomatically();
          }, 3000);
        });
    </script>
    <script>
        var h1Element = document.querySelector('.centered-h1');
        var previousContent = h1Element.textContent;

        function checkContentChange() {
          var currentContent = h1Element.textContent;
          if (currentContent !== previousContent) {
            previousContent = currentContent;
          }
          setTimeout(checkContentChange, 1);
        }

        function playSound() {
          var audio = new Audio('{{ asset('assets/dist/img/bel.mp3') }}');
          audio.play();
        }
        checkContentChange();
    </script>
    

  </body>
</html>