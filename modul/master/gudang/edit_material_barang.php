<?php 
include '../../session/koneksi.php';

$get_idMaterial = $_POST[''];
$query_tblMaterial = "";
$run_query = mysqli_query($koneksi,$query_tblMaterial);
$fetch_tblMaterial = mysqli_fetch_array($run_query);
?>

<form method="post" id="" autocomplete="off">
    <script>

    </script>

    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <input type="text" name="" class="" id="" value="<?php echo $fetch_tblMaterial['nama_material']; ?>">

    <button type="reset" class="btn btn-outline-danger">HAPUS</button>
    <button type="submit" class="btn-outline-successs">SIMPAN</button>
</form>