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

    case 'hapus_data_karyawan':
        # code...
        $idKaryawan = $_POST['id_karyawan'];
        $query_deleteMasterKaryawan = "DELETE FROM tbl_master_karyawan WHERE id_karyawan LIKE '%".$idKaryawan."%'";
        $query_deleteDetailskaryawan = "DELETE FROM tbl_detail_karyawan WHERE id_karyawan LIKE '%".$idKaryawan."%'";

        $run_sqlHapus1 = mysqli_query($koneksi,$query_deleteMasterKaryawan);
        $run_sqlHapus2 = mysqli_query($koneksi,$query_deleteDetailskaryawan);
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

                $idBarang = $_POST['name_select_nama_barang_form_tambah_tipe_master'];
                $namaTipe = $_POST['name_nama_tipe_form_tambah_tipe_master'];

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

                $idTipe = $_POST['name_pilih_tipe_barang_form_tambah_ukuran_barang_master'];
                $namaUkuran = $_POST['name_tambah_ukuran_barang_form_tambah_ukuran_barang_master'];

                $checkUkuran = "SELECT * FROM tbl_master_ukuran WHERE nama_ukuran LIKE '%".$namaUkuran."%'";
                $insertUkuran = "INSERT INTO tbl_master_ukuran(id_ukuran,id_tipe,nama_ukuran)VALUES('$output_idUkuran','$idTipe','$namaUkuran')";
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

        case 'simpan_material_barang':
            # code...
                $unique_idMaterial = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_idMaterial = substr(str_shuffle($unique_idMaterial),0,8);

                $idUkuran = $_POST['name_pilih_ukuran_barang_form_tambah_material_master'];
                $namaMaterial = $_POST['name_masukkan_material_form_tambah_material_master'];

                $sql_checking = "SELECT * FROM tbl_master_material WHERE nama_material LIKE '%".$namaMaterial."%'";
                $sql_InsertData = "INSERT INTO tbl_master_material(id_material,
                id_ukuran,
                nama_material)VALUES('$output_idMaterial',
                '$idUkuran','$namaMaterial')";

                $run_checkingData = mysqli_query($koneksi,$sql_checking);

                if (mysqli_num_rows($run_checkingData) > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    $insert_DataMaterial = mysqli_query($koneksi,$sql_InsertData);
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

        case 'hapus_data_inventori':
            # code...
            $idInventory = $_POST['id_inventory'];
            $sqlDeleteInventory = "DELETE FROM tbl_inventory WHERE id_inventory LIKE '%".$idInventory."%'";
            $runDelete = mysqli_query($koneksi,$sqlDeleteInventory);
            break;

        case 'simpan_data_karyawan':
            # code...
                $unique_id_karyawan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_karyawan = substr(str_shuffle($unique_id_karyawan),0,8);

                $unique_id_detail_karyawan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_detail_karyawan = substr(str_shuffle($unique_id_detail_karyawan),0,8);

                $namaKaryawan = $_POST['name_nama_karyawan_form_tambah_karyawan_master'];
                $alamatKaryawan = $_POST['name_alamat_karyawan_form_tambah_karyawan_master'];
                $departemenKaryawan = $_POST['name_departemen_karyawan_form_tambah_karyawan_master'];
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

                $regkaryawan = "INSERT INTO tbl_register_karyawan(id_karyawan,
                id_departemen,
                id_status,
                remarks)VALUES('$output_id_karyawan','$departemenKaryawan','AAAA1','-')";

                $run_cekKaryawan = mysqli_query($koneksi, $cekKaryawan);
                if (mysqli_num_rows($run_cekKaryawan) > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    $run_insertKaryawan = mysqli_query($koneksi,$insert_karyawan);
                    $run_insertKaryawanDetails = mysqli_query($koneksi,$insert_karyawanDetail);
                    $run_saveRegKaryawan = mysqli_query($koneksi,$regkaryawan);
                }
                break;

        case 'simpan_data_departemen':
            # code...
                $unique_id_departemen = '0123456789ABCDEFGHIJKLMNOPQRSTUVWQYZ';
                $output_id_departemen = substr(str_shuffle($unique_id_departemen),0,5);

                $namaDepartemen = $_POST['name_form_tambah_departemen_master'];

                $checkDepartemen = "SELECT * FROM tbl_master_departemen WHERE nama_departemen LIKE '%".$namaDepartemen."%'";
                $simpanDepartemen = "INSERT INTO tbl_master_departemen(id_departemen,nama_departemen)VALUES('$output_id_departemen','$namaDepartemen')";

                if (mysqli_num_rows() > 0) {
                    # code...
                    echo "...";
                }
                else {
                    # code...
                    $run_simpan = mysqli_query($koneksi, $simpanDepartemen);
                }
            break;

        case 'fetch_tipe_form_tambah_ukuran':
            # code...
                $idBarang = $_POST['id_pilih_nama_barang_form_tambah_ukuran_master'];
                $querySql = "SELECT * FROM tbl_master_tipe WHERE id_barang LIKE '%".$idBarang."%'";
                $runSql = mysqli_query($koneksi,$querySql);
                while ($hasilQuery = mysqli_fetch_array($runSql)) {
                    # code...
                    $idTipe = $hasilQuery['id_tipe'];
                    $namaTipe = $hasilQuery['nama_tipe'];
                    echo "<option value = '$idTipe'>$namaTipe</option>";
                }
            break;

        case 'fetch_tipe_form_tambah_material':
            # code...
            $id_barang = $_POST['id_pilih_nama_barang_form_tambah_material_master'];
            $queryData = "SELECT * FROM tbl_master_tipe WHERE id_barang LIKE '%".$id_barang."%'";
            $execQuery = mysqli_query($koneksi,$queryData);
            while ($hasilData = mysqli_fetch_arraY($execQuery)) {
                # code...
                echo "<option value='".$hasilData['id_tipe']."'>".$hasilData['nama_tipe']."</option>";
            }
            break;

        case 'fetch_ukuran_form_tambah_material':
            # code...
            $idTipe = $_POST['id_pilih_tipe_barang_form_tambah_material_barang'];
            $queryData = "SELECT * FROM tbl_master_ukuran WHERE id_tipe LIKE '%".$idTipe."%'";
            $executeData = mysqli_query($koneksi,$queryData);
            while ($hasilUkuran = mysqli_fetch_array($executeData)) {
                # code...
                echo "<option value='".$hasilUkuran['id_ukuran']."'>".$hasilUkuran['nama_ukuran']."</option>";
            }
            break;

        case 'fetch_tipe_form_tambah_inventori':
            # code...
            $idBarang = $_POST['id_pilih_nama_barang_form_tambah_inventory_master'];
            $qData = "SELECT * FROM tbl_master_tipe WHERE id_barang LIKE '%".$idBarang."%'";
            $executeQ = mysqli_query($koneksi,$qData);
            while ($hasil = mysqli_fetch_array($executeQ)) {
                # code...
                echo "<option value='".$hasil['id_tipe']."'>".$hasil['nama_tipe']."</option>";
            }
            break;

        case 'fetch_ukuran_form_tambah_inventori':
            # code...
            $idTipe = $_POST['id_pilih_tipe_barang_form_tambah_inventory_master'];
            $Query = "SELECT * FROM tbl_master_ukuran WHERE id_tipe LIKE '%".$idTipe."%'";
            $execute = mysqli_query($koneksi,$Query);
            if (mysqli_num_rows($execute) > 0) {
                # code...
                while ($hasil = mysqli_fetch_array($execute)) {
                    # code...
                    echo "<option value='".$hasil['id_ukuran']."'>".$hasil['nama_ukuran']."</option>";
                }
            }
            else {
                # code...
                echo "<option value=''>Ukuran tidak ditemukan</option>";
            }

            break;

        case 'fetch_material_form_tambah_inventori':
            # code...
            $idUkuran = $_POST['id_pilih_ukuran_barang_form_tambah_inventory_master'];
            $queryData = "SELECT * FROM tbl_master_material WHERE id_ukuran LIKE '%".$idUkuran."%'";
            $execute_query = mysqli_query($koneksi,$queryData);
            if (mysqli_num_rows($execute_query) > 0) {
                # code...
                while ($hasil = mysqli_fetch_array($execute_query)) {
                    # code...
                    echo "<option value='".$hasil['id_material']."'>".$hasil['nama_material']."</option>";
                }
            }
            else {
                # code...
                echo "<option value=''>Ukuran tidak ditemukan</option>";
            }
            break;
    
    default:
        # code...
        break;
}
?>