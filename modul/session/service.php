<?php 
include 'koneksi.php';
$karakter_unique = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
$output_5_digit = substr(str_shuffle($karakter_unique),0,5);

$karakter_unique = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
$output_8_digit = substr(str_shuffle($karakter_unique),0,8);

switch ($_GET['aksi']) {
    case 'simpan_data_customer_master':
        # code...

        $id_customer = $_POST['name_input_nama_customer_master'];
        $sql_check = "SELECT * FROM tbl_master_customer WHERE nama_customer LIKE '%".$id_customer."%'";
        $sql_insert = "INSERT INTO tbl_master_customer(id_customer,nama_customer)VALUES('$output_8_digit','$id_customer')";
        $execute_query = mysqli_query($koneksi, $sql_check);
        if (mysqli_num_rows($execute_query) > 0) {
            # code...
            echo '<script type="text/javascript">alert("Data sudah ada")</script>';
        }
        else{
            $execute_query = mysqli_query($koneksi, $sql_insert);
        }
        break;

    case 'hapus_data_customer_master':

        $id_customer = $_POST['id_customer'];
        $sql_query = "DELETE FROM tbl_master_customer WHERE id_customer LIKE '%".$id_customer."%'";
        $sql_exec = mysqli_query($koneksi, $sql_query);
        break;
    
    default:
        # code...
        break;
}
?>