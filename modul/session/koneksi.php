<?php
 //koneksi ke database pembayaran listrik
 $server = "localhost";
 $user = "root";
 $pass = "";
 $dbname = "db_mis";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }
?>
