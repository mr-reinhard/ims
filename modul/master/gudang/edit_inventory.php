<?php 
include '../../session/koneksi.php';
$idInventori = $_GET['id_inventory'];
$query = "SELECT * FROM vw_inventory WHERE id_inventory LIKE '%".$idInventori."%'";
$run = mysqli_query($koneksi,$query);
$fetchInventory = mysqli_fetch_array($run);
?>

<form method="POST" id="id_form_edit_inventory" autocomplete="off">
    <script>

    </script>

    <input type="text" name="name_id_inventory_form_edit_inventory_master" id="" value="<?php echo $fetchInventory['id_inventory']; ?>" readonly>
    <input type="text" name="name_nama_barang_form_edit_inventory_master" class="" id="id_nama_inventory" value="<?php echo $fetchInventory['nama_barang']; ?>" >
    <input type="text" name="name_nama_tipe_form_edit_inventory_master" class="" id="" value="<?php echo $fetchInventory['nama_tipe']; ?>" required>
    <input type="text" name="name_nama_ukuran_form_edit_inventory_master" class="" id="" value="<?php echo $fetchInventory['nama_ukuran']; ?>" required>
    <input type="text" name="name_nama_material_form_edit_inventory_master" class="" id="" value="<?php echo $fetchInventory['nama_material']; ?>" required>
    <input type="text" name="name_qty_form_edit_inventory_master" class="" id="" value="<?php echo $fetchInventory['qty']; ?>" required>
    
    <button type="reset" class="btn-outline-danger">HAPUS</button>
    <button type="submit" class="btn-outline-success btn_submit_form_edit_inventory" >SIMPAN</button>
</form>