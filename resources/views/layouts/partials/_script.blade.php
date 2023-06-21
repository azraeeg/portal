<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>

<!-- Ajax Simpan Kategori -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-simpan-kategori").click(function(e) {

        e.preventDefault();

        var kode = $("input[name=kode]").val();
        var nama = $("input[name=nama]").val();
        var ket = $("input[name=ket]").val();
        var url = '{{ url('/kategori/store') }}';

        if (kode == '' && nama == ''&& ket == '') {
            alert('Data Masih Kosong!!');
        } else {
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    kode: kode,
                    nama: nama,
                    ket: ket,
                },
                success: function(response) {
                    if (response.success == true) {
                        setTimeout(function() { // wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 100);
                        alert(response.message) //Message come from controller
                    } else {
                        alert("Error")
                    }
                },
                error: function(error) {
                    console.log(error)
                }
            });
        }
    });
</script>