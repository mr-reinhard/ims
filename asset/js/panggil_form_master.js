function load_main_menu_master(){
  $.ajax({
    url:'../master/beranda/home.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data);
    }
  });
}

function load_info_menu_master(){
  $.ajax({
    url:'../master/informasi/info.html',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data);
    }
  });
}

function load_list_vendor(){
  $.ajax({
    url:'../master/partner/list_vendor.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data);
    }
  });
}

function load_list_customer(){
  $.ajax({
    url:'../master/partner/list_customer.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data);
    }
  });
}

function load_list_barang(){
  $.ajax({
    url:'../master/gudang/list_barang.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data);
    }
  });
}

function load_list_pic_gudang(){
  $.ajax({
    url:'../master/gudang/list_pic_gudang.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_transfer_barang(){
  $.ajax({
    url:'../master/gudang/transfer_barang.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_list_pembelian(){
  $.ajax({
    url:'../master/pembelian/list_pembelian.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_riwayat_masuk(){
  $.ajax({
    url:'../master/gudang/riwayat_masuk.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_riwayat_keluar(){
  $.ajax({
    url:'../master/gudang/riwayat_keluar.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_list_user(){
  $.ajax({
    url:'../master/user/list_user.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_list_pic_pembelian(){
  $.ajax({
    url:'../master/pembelian/list_pic_pembelian.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

function load_list_setting_akun(){
  $.ajax({
    url:'../master/akun/informasi_pengguna.php',
    type:'GET',
    success:function(data){
      $('#main_content_master').html(data)
    }
  });
}

//========================================================================