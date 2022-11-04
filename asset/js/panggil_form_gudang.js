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

  }

  function load_list_riwayat_keluar(){

  }

  function load_list_transfer(){

  }