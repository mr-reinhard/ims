<?php 
include '../../../session/koneksi.php';
$id_inventory = $_GET['id_inventory'];
$query = "SELECT * FROM vw_inventory WHERE id_inventory LIKE '%".$id_inventory."%'";
$runQurery = mysqli_query($koneksi,$query);
$fetchData = mysqli_fetch_array($runQurery);
?>


<form method="post" id="id_form_request_form_permintaan_master" autocomplete="off">
    <script>
        $('#id_btn_pilih_qty_form_request_barang_master').keypress(function(e){
            var reguler_expression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <!-- id_inventory cuman di hidden  -->
    <input type="text" name="name_id_inventory_form_permintaan_barang_master" hidden id="" value="<?php echo $fetchData['id_inventory'] ?>" readonly>

    <!-- Field nama barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <small id="test">Nama barang</small>
        <h2 id="id_nama_barang" class="font-weight-bold text-underline" aria-describedby="test"><u><?php echo $fetchData['nama_barang']; ?></u></h2>
    </div>

    <!-- Field tipe barang -->
    <div class="form-group mt-1 ml-5 mr-5">
        <small id="id_tipe_barang">Tipe barang</small>
        <h4 id="id_tipe_barang" class="font-weight-bold"><u><?php echo $fetchData['nama_tipe']; ?></u></h4>
    </div>

    <!-- Fieldn ukuran barang -->
    <div class="form-group mt-1 ml-5 mr-5">
        <small id="id_ukuran_barang">Ukuran barang</small>
        <h4 id="id_ukuran_barang" class="font-weight-bold"><u><?php echo $fetchData['nama_ukuran']; ?></u></h4>
    </div>

    <!-- Field material barang -->
    <div class="form-group mt-1 ml-5 mr-5">
        <small id="id_material_barang">Material barang</small>
        <h4 id="id_material_barang" class="font-weight-bold"><u><?php echo $fetchData['nama_material']; ?></u></h4>
    </div>

    <!-- Pilih tipe request -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_select_tipe_request_form_permintaan_master">Tipe Permintaan</label>
        <select name="name_pilih_tipe_request_form_permintaan_barang_master" id="id_select_tipe_request_form_permintaan_master" class="form-control w-50" aria-describedby="tipeRequest" required>
            <option value="A1">Purhasing</option>
            <option value="A2">Produksi</option>
        </select>
        <small id="tipeRequest">Pilih tipe permintaan barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_btn_pilih_qty_form_request_barang_master">Masukkan quantity</label>
        <input type="text" name="name_masukkan_quantity_form_permintaan_barang_master" id="id_btn_pilih_qty_form_request_barang_master" placeholder="Quantity barang" class="form-control w-25" maxlength="9" required>
        <small id="id_btn_pilih_qty_form_request_barang_master">Isi quantity permintaan barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_textarea_remarks_form_permintaan_master">Masukkan catatan</label>
        <textarea name="name_catatan_form_permintaan_barang_master" id="id_textarea_remarks_form_permintaan_master" class="form-control w-50" required></textarea>
        <small id="id_textarea_remarks_form_permintaan_master">Jika catatan kosong harap isi ( - )</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        
        <button type="button" class="btn btn-outline-primary" id="id_btn_kembali_form_permintaan_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>

        <button type="submit" class="btn btn-outline-success ml-3">
            SIMPAN <i class="fa-solid fa-floppy-disk"></i>
        </button>

    </div>
</form>