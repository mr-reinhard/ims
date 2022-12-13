<?php 
include '../../session/koneksi.php';
$id_tipeBarang = $_GET[''];
$query_tblTipe = "SELECT * FROM tbl_master_tipe WHERE id_tipe LIKE '%".$id_tipeBarang."%'";
$run_tblTipe = mysqli_query($koneksi,$query_namaTipe);
$fetch_tblTipe = mysqli_fetch_array($run_tblTipe);
?>

<form method="post" id="" autocomplete="off">
    <script>

    </script>

    <!-- Tombol kembali form edit tipe barang -->
    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <input type="text" name="" value="<?php echo $fetch_tblTipe['nama_tipe']; ?>" id="" class="" autofocus required>

    <button type="reset" class="">HAPUS</button>
    <button type="submit" class="">SIMPAN</button>
</form>