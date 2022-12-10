<?php 
include '../../session/koneksi.php';
$idInventori = $_GET[''];
$query = "SELECT * FROM vw_inventori WHERE id_inventory LIKE '%".$idInventori."%'";
$run = mysqli_query($koneksi,$query);
$fetchInventory = mysqli_fetch_array($run);
?>

<form method="" id="" autocomplete="off">
    <script>

    </script>

    
</form>