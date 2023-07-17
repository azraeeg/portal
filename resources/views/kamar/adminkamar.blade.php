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
                <div class="col-md-3">
                    <div class="card card-widget widget-user">
                        <div class="widget-user-header bg-info" style="height: 170px;">
                            <input type="hidden" class="kode_ruang" id="kode_ruang" value="{{$a->kodekategori}}" />
                            <h1 class="widget-user-desc namakamar" style="font-size: 70px;">{{$a->namakamar}}</h1>
                            <h2 class="widget-user-desc kelas" style="font-size: 50px;">{{$a->kelas}}</h2>
                        </div>
                        <div class="card-footer">
                            <div class="description-block">
                                <h3 class="description-text" style="text-align:center; font-size: 50px;" >STATUS</h3>
                                <h4 class="description-text centered-h1" id="status{{$a->id}}" style="font-size: 70px;"></h4>
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
    <!-- <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
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
    </script> -->
    {{-- ==========================================end socket==================================================================== --}}
    
    
    {{-- ==========================================combobox==================================================================== --}}
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
    {{-- ==========================================end combobox==================================================================== --}}
    
    <script>
        $(document).ready(function() {
            
            $('.card-widget').each(function() {
                var cardWidget = $(this);
                var kode_ruang = $("input[id=kode_ruang]").val();
                var url = "{{route('cari-kamar',':kode_ruang')}}";
    
                console.log(kode_ruang);
                $.ajax({
                    type: "GET",
                    url: url.replace(':kode_ruang', kode_ruang),
                    dataType: 'json',
                    success: function(res) {
                    $.each(res, function(index, item) {
                        var h1Element = document.querySelector('#status' + item.id);
                        var previousContent = h1Element.textContent;
                        if (item.status !== previousContent) {
                        cardWidget.find('#status' + item.id).text(item.status);
                        }
                    });
                    }
                });
                });
        });
    
    </script>    
</body>
</html>