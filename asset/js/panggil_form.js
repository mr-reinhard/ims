//deklarasi fungsi panggil form data pelanggan
function load_data_pelanggan(){
    $.ajax({
      url:'modul/pelanggan/data_pelanggan.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  //deklarasi fungsi panggil form tambah customer
  function load_tambah_pelanggan(){
    $.ajax({
      url:'modul/pelanggan/tambah_pelanggan.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  // deklarasi fungsi panggil form tampil golongan
  function call_tampil_golongan(){
    $.ajax({
      url:'modul/golongan/tampil_golongan.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  // deklarasi fungsi tambah golongan
  function call_tambah_golongan() {
    $.ajax({
      url:'modul/golongan/tambah_golongan.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  // deklarasi fungsi panggil form list customer
  // module ini berada di pembayaran
  function call_data_customer(){
    $.ajax({
      url:'modul/pembayaran/data_customer.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  // deklarasi fungsi panggil form pembayaran
  function call_form_pembayaran(){
    $.ajax({
      url:'modul/pembayaran/form_pembayaran.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }
  function call_form_riwayat() {
    $.ajax({
      url:'modul/riwayat/riwayat_pembayaran.php',
      type:'get',
      success:function(data){
        $('#content_data').html(data);
      }
    });
  }