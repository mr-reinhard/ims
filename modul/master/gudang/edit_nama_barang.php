<?php 
include '../../session/koneksi.php';
$id_namaBArang = $_GET[''];
$query_namaBarang = "SELECT * FROM tbl_master_barang WHERE id_barang LIKE '%".$id_namaBArang."%'";
$runQuery = mysqli_query($koneksi,$query_namaBarang);
$fetchArray_barang = mysqli_fetch_array($runQuery);
?>

<form method="POST" id="" autocomplete="off">
    <script>

    </script>

    <!-- Tombol Kembali form edit nama barang -->
    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <input type="text" name="" class="" value="<?php echo $fetchArray_barang['nama_barang']; ?>" id="" autofocus required>

    <button type="reset" class="btn btn-outline-danger">Hapus</button>
    <button type="submit" class="btn btn-outline-success">Simpan</button>
</form>