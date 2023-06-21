$(document).ready(function() {
    // Fungsi untuk mengambil data menggunakan Ajax
    function getData() {
      $.ajax({
        url: '', // Ganti dengan URL endpoint Anda untuk mengambil data
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          // Lakukan apa pun dengan data yang diterima
          $('#data-container').append('<p>' + response.no_antri +'</p>');
  
          // Memanggil fungsi ini secara berulang setiap 3 detik
          setTimeout(getData, 3000);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    }
  
    // Memanggil fungsi untuk pertama kali
    getData();
  });
  