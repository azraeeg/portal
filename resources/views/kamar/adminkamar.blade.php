<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta http-equiv="refresh" content="3" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminKamar</title>
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
        <h1 class="display-5 fw-bold text-center" style="color: black;"></h1>
      </header>
        <div class="col-md-6">
            <div class="form-group">
                <form method="GET" action="{{route('admin-kamar', [$kode_ruang])}}">
                    @csrf
                    <label style="font-size: 50px; color: white;">Cari Nama Kamar:</label>
                    <select class="form-control select2" style="width: 50%;" id="namakamar" name="namakamar" onchange="this.form.submit()">
                        <option value="">Filter Berdasarkan Nama Kamar</option>
                    @foreach ($list_kamar as $item)
                        <option value="{{$item->namakamar}}" @if ($keyword != null && $item->namakamar == $keyword) selected @endif>{{$item->namakamar}}</option>
                    @endforeach
                    </select>
                </form>
            </div>
        </div>
        <div class="row">
        @foreach($kamar as $a)
                <div class="col-md-4">
                    <div class="card card-widget widget-user">
                        <div class="widget-user-header bg-info" style="height: 160px;">
                        <input type="hidden" class="kode_ruang" value="{{$a->kodekategori}}"/>
                            <h1 class="widget-user-desc namakamar">{{$a->namakamar}}</h1>
                            <h2 class="widget-user-desc kelas">{{$a->kelas}}</h2>
                        </div>
                        <div class="card-footer">
                            <div class="description-block">
                                <h3 class="description-text" style="text-align:center;">STATUS</h3>
                                <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 150px;"></h4>
                            </div>
                            <div class="form-group">
                          <select class="form-control select" style="width: 100%;">
                              <option selected="selected">Ganti Status</option>
                              <option>Terisi</option>
                              <option>Kosong</option>
                              <option>Belum Siap</option>
                              <option>Tutup</option>
                          </select>
                      </div>
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
    <!-- Select2 -->
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
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
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
    <script>
        const socket = io.connect('http://192.168.110.218:3030');
        document.addEventListener('click', (e) => {
            if(e.target.tagName.toLowerCase() === 'button' && e.target.getAttribute('data-id')) {
                const itemID = e.target.getAttribute('data-id');
                socket.emit('order', {
                    item_id : itemID,
                })
            }
        });
    </script>
    {{-- ==========================================end socket==================================================================== --}}
    
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'

            })
        });
    </script>

    <script>
        $(document).ready(function() {
        function statusKamar() {
            $('.card-widget').each(function() {
            var cardWidget = $(this);
            var kode_ruang = cardWidget.find('.kode_ruang').val();
            var url = "{{route('cari-kamar',':kode_ruang')}}";

            $.ajax({
                type: "GET",
                url: url.replace(':kode_ruang', kode_ruang),
                dataType: 'json',
                success: function(res) {
                $.each(res, function(index, item) {
                    var h1Element = document.querySelector('#status' + item.id);
                    var previousContent = h1Element.textContent;
                    if (item.no_antri !== previousContent) {
                    cardWidget.find('#status' + item.id).text(item.status);
                    }
                });
                }
            });
            });
        }
        });
    // $(document).ready(function() {

    //     var keyword = $('input[name="nama_dokter"]').val(); // Mendapatkan nilai input dari form cari
    //         $('.card-widget').each(function() {
    //             var cardWidget = $(this);
    //             var namaDokter = cardWidget.find('.nama_dokter').text().trim(); // Mendapatkan nilai nama_dokter pada elemen card-widget
                
    //             var id_lorong = cardWidget.find('.id_lorong').val();
    //             var url = "{{ route('cari-poli', ':id_lorong') }}".replace(':id_lorong', id_lorong);
                
    //             $.ajax({
    //                 type: "GET",
    //                 url: url,
    //                 dataType: 'json',
    //                 success: function(res) {
    //                     $.each(res, function(index, item) {
    //                         cardWidget.find('#no_antri' + item.id).text(item.no_antri);
    //                     });
    //                 }
    //             });
                
    //             if (namaDokter === keyword || keyword === '') {
    //                 // Tambahkan kode lain yang ingin Anda lakukan jika namaDokter cocok dengan keyword atau jika keyword kosong
    //             }
    //         });
    </script>    
</body>
</html>