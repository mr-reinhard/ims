<?php 
include 'koneksi.php';


switch ($_GET['aksi']) {
    case 'simpan_data_customer_master':
        # code...
        $unique_id_customer = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
        $output_id_customer = substr(str_shuffle($unique_id_customer),0,8);

        $unique_id_customer_details = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
        $output_id_customer_details = substr(str_shuffle($unique_id_customer_details),0,8);
        
        $nama_customer = $_POST['name_isi_nama_customer_master'];
        $alamat = addslashes($_POST['name_isi_alamat_customer_master']);
        $telfon = $_POST['name_isi_telfon_customer_master'];
        $email = $_POST['name_isi_email_customer_master'];
        $fax = $_POST['name_isi_fax_customer_master'];
        $sql_check = "SELECT * FROM tbl_master_customer WHERE nama_customer LIKE '%".$nama_customer."%'";
        $sql_insert = "INSERT INTO tbl_master_customer(id_customer,nama_customer)VALUES('$output_id_customer',
        '$nama_customer')";
        $sql_insert_detail_cust = "INSERT INTO tbl_customer_details(id_customer_details,
        id_customer,
        alamat_customer,
        telfon_customer,
        email_customer,
        fax_customer)VALUES('$output_id_customer_details',
        '$output_id_customer','$alamat','$telfon','$email','$fax')";
        $execute_query = mysqli_query($koneksi, $sql_check);
        if (mysqli_num_rows($execute_query) > 0) {
            # code...
            echo "....";
        }
        else{
            $execute_query = mysqli_query($koneksi, $sql_insert);
            $execute_query2 = mysqli_query($koneksi,$sql_insert_detail_cust);
        }
        break;

    case 'hapus_data_customer_master':

        $id_customer = $_POST['id_customer'];
        $sql_query1 = "DELETE FROM tbl_master_customer WHERE id_customer LIKE '%".$id_customer."%'";
        $sql_query2 = "DELETE FROM tbl_customer_details WHERE id_customer LIKE '%".$id_customer."%'";
        $sql_exec = mysqli_query($koneksi, $sql_query1);
        $sql_exec2 = mysqli_query($koneksi, $sql_query2);
        break;

    case 'tambah_alamat_customer_master':
        # code...
        $unique_id_customer_details = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
        $output_id_customer_details = substr(str_shuffle($unique_id_customer_details),0,8);

        $idCust = $_POST['name_swap_id_customer_master'];
        $alamat_customer = addslashes($_POST['name_tambah_alamat_customer_master']);
        $telfon_customer = $_POST['name_tambah_telfon_customer_master'];
        $email_customer = $_POST['name_tambah_email_customer_master'];
        $fax_customer = $_POST['name_tambah_fax_customer_master'];

        $query_simpan_alamat_cust = "INSERT INTO tbl_customer_details(id_customer_details,
        id_customer,
        alamat_customer,
        telfon_customer,
        email_customer,
        fax_customer)VALUES('$output_id_customer_details',
        '$idCust',
        '$alamat_customer',
        '$telfon_customer',
        '$email_customer',
        '$fax_customer')";

        $sql_execute = mysqli_query($koneksi, $query_simpan_alamat_cust);
        break;

        case 'input_vendor_baru_master':
            # code...

            $unique_id_vendor = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
            $output_id_vendor = substr(str_shuffle($unique_id_vendor),0,8);

            $unique_id_vendor_details = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
            $output_id_vendor_details = substr(str_shuffle($unique_id_vendor_details),0,8);

            $nama_vendor = $_POST['name_input_nama_vendor_form_tambah_vendor_master'];
            $alamat_vendor = addslashes($_POST['name_input_alamat_vendor_form_tambah_vendor_master']);
            $telfon_vendor = $_POST['name_input_telfon_vendor_form_tambah_vendor_master'];
            $email_vendor = $_POST['name_input_email_vendor_form_tambah_vendor_master'];
            $fax_vendor = $_POST['name_input_fax_vendor_form_tambah_vendor_master'];

            $sql_check = "SELECT * FROM tbl_master_vendor WHERE nama_vendor LIKE '%".$nama_vendor."%'";
            $sql_insert_master = "INSERT INTO tbl_master_vendor(id_vendor,nama_vendor)VALUES('$output_id_vendor',
            '$nama_vendor')";
            $sql_insert_details = "INSERT INTO tbl_vendor_details(id_detail_vendor,
            id_vendor,
            alamat_vendor,
            telfon_vendor,
            email_vendor,
            fax_vendor)VALUES('$output_id_vendor_details',
            '$output_id_vendor',
            '$alamat_vendor',
            '$telfon_vendor',
            '$email_vendor',
            '$fax_vendor')";
            $run_check = mysqli_query($koneksi, $sql_check);
            if (mysqli_num_rows($run_check) > 0) {
                # code...
                echo "....";
            }
            else {
                # code...
                $run_insert_vendor_master = mysqli_query($koneksi, $sql_insert_master);
                $run_insert_vendor_details = mysqli_query($koneksi, $sql_insert_details);
            }
            break;

        case 'hapus_data_vendor':
                # code...
                $idVendor = $_POST['id_vendor'];
                $sql_delete_master = "DELETE FROM tbl_master_vendor WHERE id_vendor LIKE '%".$idVendor."%'";
                $sql_delete_details = "DELETE FROM tbl_vendor_details WHERE id_vendor LIKE '%".$idVendor."%'";

                $executeMaster = mysqli_query($koneksi, $sql_delete_master);
                $executeDetails = mysqli_query($koneksi, $sql_delete_details);
                break;

        case 'simpan_alamat_vendor':
                    # code...
        
                $unique_id_vendor_details = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_vendor_details = substr(str_shuffle($unique_id_vendor_details),0,8);

                $idVendor = $_POST['name_id_vendor_form_tambah_alamat_vendor_master'];
                $alamatVend = addslashes($_POST['name_tambah_alamat_form_tambah_vendor_master']);
                $telfonVend = $_POST['name_tambah_telefon_form_tambah_vendor_master'];
                $emailVend = $_POST['name_tambah_email_form_tambah_vendor_master'];
                $faxVend = $_POST['name_tambah_fax_form_tambah_vendor_master'];

                $sql_query = "INSERT INTO tbl_vendor_details(id_detail_vendor,
                id_vendor,
                alamat_vendor,
                telfon_vendor,
                email_vendor,
                fax_vendor)VALUES('$output_id_vendor_details',
                '$idVendor',
                '$alamatVend',
                '$telfonVend',
                '$emailVend',
                '$faxVend')";

                $run_query = mysqli_query($koneksi, $sql_query);

                break;

        case 'simpan_nama_barang':

                $unique_id_namaBarang = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_namaBarang = substr(str_shuffle($unique_id_namaBarang),0,8);

                $namaBarang = $_POST['name_nama_barang_form_tambah_nama_barang_master'];

                $cek_namaBarang = "SELECT * FROM tbl_master_barang WHERE nama_barang LIKE '%".$namaBarang."%'";
                $insertNamaBarang = "INSERT INTO tbl_master_barang(id_barang,
                nama_barang)VALUES('$output_id_namaBarang','$namaBarang')";
                
                $run_checkBarang = mysqli_query($koneksi, $cek_namaBarang);
                if (mysqli_num_rows($run_checkBarang) > 0) {
                    # code...
                    echo"..";
                }
                else {
                    # code...
                    $simpan_namaBarang = mysqli_query($koneksi, $insertNamaBarang);
                }
                break;

        case 'simpan_tipe_barang':
            # code...
                $unique_idTipe = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_idTipe = substr(str_shuffle($unique_idTipe),0,8);

                $idBarang = $_POST[''];
                $namaTipe = $_POST[''];

                $checkTipe = "SELECT * FROM tbl_master_tipe WHERE nama_tipe LIKE '%".$namaTipe."%'";
                $insertTipe = "INSERT INTO tbl_master_tipe(id_tipe,
                id_barang,
                nama_tipe)VALUES('$output_idTipe','$idBarang','$namaTipe')";
                $run_checkTipe = mysqli_query($koneksi, $checkTipe);

                if (mysqli_num_rows($run_checkTipe) > 0) {
                    # code...
                    echo "....";
                }
                else {
                    # code...
                    $insert_dataTipe = mysqli_query($koneksi,$insertTipe);
                }
                break;

        case 'simpan_ukuran_barang':
            # code...
                $unique_idUkuran = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_idUkuran = substr(str_shuffle($unique_idUkuran),0,8);

                $idTipe = $_POST[''];
                $namaUkuran = $_POST[''];

                $checkUkuran = "SELECT * FROM tbl_master_ukuran WHERE nama_ukuran LIKE '%".$namaUkuran."%'";
                $insertUkuran = "INSERT INTO(id_ukuran,id_tipe,nama_ukuran)VALUES('$output_idUkuran','$idTipe','$namaUkuran')";
                $run_checkUkuran = mysqli_query($koneksi,$checkUkuran);

                if (mysqli_num_rows($run_checkUkuran) > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    $run_saveUkuran = mysqli_query($koneksi,$insertUkuran);
                }
                break;

        case 'simpan_data_inventori':
            # code...
                $unique_id_inventory = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_inventory = substr(str_shuffle($unique_id_inventory),0,8);

                $idBarang = $_POST['name_pilih_nama_barang_form_tambah_inventory_master'];
                $idTipe = $_POST['name_pilih_tipe_barang_form_tambah_inventory_master'];
                $idUkuran = $_POST['name_pilih_ukuran_barang_form_tambah_inventory_master'];
                $idMaterial = $_POST['name_pilih_material_barang_form_tambah_inventory_master'];
                $qtyBarang = $_POST['name_quantity_barang_form_tambah_inventory_master'];

                $checkInventory = "SELECT * FROM tbl_inventory WHERE id_barang LIKE '%".$idBarang."%' AND id_tipe LIKE '%".$idTipe."%' AND id_ukuran LIKE '%".$idUkuran."%'";
                $sql_insertInventory = "INSERT INTO tbl_inventory(id_inventory,
                id_barang,
                id_tipe,
                id_ukuran,
                id_material,
                qty)VALUES('$output_id_inventory',
                '$idBarang',
                '$idTipe',
                '$idUkuran',
                '$idMaterial',
                '$qtyBarang')";

                $run_checkInventory = mysqli_query($koneksi, $checkInventory);

                if (mysqli_num_rows($run_checkInventory) > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    mysqli_query($koneksi,$sql_insertInventory);
                }
                break;

        case 'simpan_data_karyawan':
            # code...
                $unique_id_karyawan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_karyawan = substr(str_shuffle($unique_id_karyawan),0,8);

                $unique_id_detail_karyawan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_detail_karyawan = substr(str_shuffle($unique_id_detail_karyawan),0,8);

                $namaKaryawan = $_POST['name_nama_karyawan_form_tambah_karyawan_master'];
                $alamatKaryawan = $_POST['name_alamat_karyawan_form_tambah_karyawan_master'];
                $telfonKaryawan = $_POST['name_telfon_karyawan_form_tambah_karyawan_master'];
                $emailKaryawan = $_POST['name_email_karyawan_form_tambah_karyawan_master'];

                $cekKaryawan = "SELECT * FROM vw_karyawan WHERE nama_karyawan LIKE '%".$namaKaryawan."%' AND telfon_karyawan LIKE '%".$telfonKaryawan."%'";
                $insert_karyawan = "INSERT INTO tbl_master_karyawan(id_karyawan,
                nama_karyawan)VALUES('$output_id_karyawan','$namaKaryawan')";
                $insert_karyawanDetail = "INSERT INTO tbl_detail_karyawan(id_detail_karyawan,
                id_karyawan,
                alamat_karyawan,
                telfon_karyawan,
                email_karyawan)VALUES('$output_id_detail_karyawan',
                '$output_id_karyawan',
                '$alamatKaryawan',
                '$telfonKaryawan',
                '$emailKaryawan')";

                $run_cekKaryawan = mysqli_query($koneksi, $cekKaryawan);
                if (mysqli_num_rows($run_cekKaryawan) > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    $run_insertKaryawan = mysqli_query($koneksi,$insert_karyawan);
                    $run_insertKaryawanDetails = mysqli_query($koneksi,$insert_karyawanDetail);
                }
                break;
    
    default:
        # code...
        break;
}
?>