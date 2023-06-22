<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta http-equiv="refresh" content="3" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminAntrian</title>
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
  </head>
  <!-- <style>
    body {
      background-image: url('{{ asset('assets/dist/img/begron.png') }}');
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style> -->
  <body>
  <div class="wrapper">
      <header class="py-5">
        <h1 class="display-5 fw-bold text-center" style="color: white;">ANTRIAN POLIKLINIK RSI KENDAL</h1>
      </header>
      <div class="row">
        @foreach($poli as $a)
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
                        
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block btn-next" data-lorong="{{$a->id}}">Next</button>
                        </div>
                    </div>
                </div>
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

         setInterval(function() {
 
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
                             cardWidget.find('#no_antri' + item.id).text(item.no_antri);
                         });
                     }
                 });
             });
         }, 3000); // Mengatur waktu interval 3 detik (3000 milidetik)


        $('.btn-next').click(function() {
            var button = $(this);
            var lorongID = button.data('lorong');
            var cardWidget = button.closest('.card-widget');
            var noAntriElement = cardWidget.find('#no_antri' + lorongID);
            var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Mendapatkan nilai token CSRF dari tag meta

            $.ajax({
                type: "POST",
                url: "{{ route('update-no-antri', ':id_lorong') }}".replace(':id_lorong', lorongID),
                data: {
                    _token: csrfToken, // Menambahkan token CSRF ke data permintaan
                    lorongID: lorongID
                },
                dataType: 'json',
                success: function(res) {
                    if (res.success) {
                        var nextAntri = res.no_antri;
                        noAntriElement.text(nextAntri);
                    }
                }
            });
        });


    });
</script>    
 </body>
</html>