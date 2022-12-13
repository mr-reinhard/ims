<?php 
include '../../session/koneksi.php';
$id_ukuranBarang = $_GET[''];
$query_tblUkuran = "SELECT * FROM tbl_master_ukuran WHERE id_ukuran LIKE '%".$id_ukuranBarang."%'";
$run_tblUkuran = mysqli_query($koneksi,$query_tblUkuran);
$fetch_tblUkuran = mysqli_fetch_array($run_tblUkuran);
?>

<form method="post" id="" autocomplete="off">
    <script>

    </script>

    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <input type="text" class="" id="" name="" value="<?php echo $fetch_tblUkuran['nama_ukuran']; ?>">

    <button type="reset" id="" class="btn btn-outline-danger">HAPUS</button>
    <button type="submit" id="" class="btn btn-outline-successs">SIMPAN</button>
</form>