function load_main_menu_gudang(){
    $.ajax({
      url:'beranda/beranda_gudang.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data);
      }
    });
  }

function load_list_barang_gudang(){
    $.ajax({
      url:'barang/list_barang.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data);
      }
    });
  }

  function load_list_pic(){
    $.ajax({
      url:'pic/list_pic.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data)
      }
    });
  }

  function load_list_riwayat_masuk(){
    $.ajax({
      url:'barang/riwayat_masuk.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data)
      }
    });
  }

  function load_list_riwayat_keluar(){
    $.ajax({
      url:'barang/riwayat_keluar.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data)
      }
    });
  }

  function load_list_transfer(){
    $.ajax({
      url:'barang/transfer_barang.php',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data)
      }
    });
  }

  function load_list_informasi(){
    $.ajax({
      url:'../master/informasi/info.html',
      type:'GET',
      success:function(data){
        $('#main_content_gudang').html(data)
      }
    });
  }

  function load_list_header_transfer(){
    $.ajax({
      url:'',
      type:'GET',
      success:function(data){
        $('').html(data)
      }
    });
  }