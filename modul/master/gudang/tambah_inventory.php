<?php 
include '../../session/koneksi.php';
?>

<form method="post" id="id_form_tambah_inventory_master" autocomplete="off">
    <script>
        $('#id_quantity_barang_form_tambah_inventory_master').keypress(function(e){
            var regularExpression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <div class="form-group">
        <button type="button" class="btn btn-outline-primary mt-2 ml-5" id="id_button_kembali_form_tambah_inventory_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Pilih nama barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_inventory_master">Nama Barang</label>
        <select name="name_pilih_nama_barang_form_tambah_inventory_master" class="form-control w-50" id="id_pilih_nama_barang_form_tambah_inventory_master" aria-describedby="pilihBarang" autofocus>
            <?php 
            $GetNamaBarang = "SELECT * FROM tbl_master_barang ORDER BY nama_barang ASC";
            $ExecNamaBarang = mysqli_query($koneksi,$GetNamaBarang);
            while ($hasilData = mysqli_fetch_array($ExecNamaBarang)) {
                # code...
                echo "<option value='".$hasilData['id_barang']."'>".$hasilData['nama_barang']."</option>";
            }
            ?>
        </select>
        <button type="button" class="btn btn-success mt-2" id="id_tambah_nama_barang_form_tambah_inventory_master" title="Tambah nama barang">
            <i class="fa-solid fa-circle-plus"></i>
        </button>

        <button type="button" class="btn btn-warning mt-2" id="" title="Edit Nama Barang">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>

        <button type="button" class="btn btn-danger mt-2" id="" title="Hapus nama Barang">
            <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </div>

    <!-- Tipe Barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_inventory_master">Tipe Barang</label>
        <select name="name_pilih_tipe_barang_form_tambah_inventory_master" class="form-control w-50" id="id_pilih_tipe_barang_form_tambah_inventory_master" aria-describedby="pilihBarang">
            <!-- List Tipe -->
        </select>
        <button type="button" class="btn btn-success mt-2" id="id_tambah_tipe_barang_form_tambah_inventory_master" title="Tambah tipe barang">
            <i class="fa-solid fa-circle-plus"></i>
        </button>

        <button type="button" class="btn btn-warning mt-2" id="" title="Edit Tipe Barang">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>

        <button type="button" class="btn btn-danger mt-2" id="" title="Hapus Tipe Barang">
            <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </div>

    <!-- Ukuran Barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_inventory_master">Ukuran Barang</label>
        <select name="name_pilih_ukuran_barang_form_tambah_inventory_master" class="form-control w-50" id="id_pilih_ukuran_barang_form_tambah_inventory_master" aria-describedby="pilihBarang">
            <!-- List Ukuran -->
        </select>
        <button class="btn btn-success mt-2" id="id_tambah_ukuran_barang_form_tambah_inventory_master" title="Tambah ukuran barang">
            <i class="fa-solid fa-circle-plus"></i>
        </button>

        <button type="button" class="btn btn-warning mt-2" title="Edit Ukuran Barang">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>

        <button type="button" class="btn btn-danger mt-2" title="Hapus Ukuran Barang">
            <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </div>

    <!-- Material Barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_inventory_master">Material Barang</label>
        <select name="name_pilih_material_barang_form_tambah_inventory_master" class="form-control w-50" id="id_pilih_material_barang_form_tambah_inventory_master" aria-describedby="pilihBarang">
            <!-- List Material -->
        </select>
        <button type="button" class="btn btn-success mt-2" id="id_tambah_material_barang_form_tambah_inventory_master" title="Tambah material barang">
            <i class="fa-solid fa-circle-plus"></i>
        </button>

        <button type="button" class="btn btn-warning mt-2" id="" title="Edit Material Barang">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>

        <button type="button" class="btn btn-danger mt-2" id="" title="Hapus Material Barang">
            <i class="fa-solid fa-circle-xmark"></i>
        </button>
    </div>

    <!-- Quantity barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_quantity_barang_form_tambah_inventory_master">Quantity Barang</label>
        <input type="text" maxlength="9" name="name_quantity_barang_form_tambah_inventory_master" class="form-control w-25" id="id_quantity_barang_form_tambah_inventory_master" placeholder="Masukkan jumlah barang" aria-describedby="qtyBarang" required>
        <small id="qtyBarang">Masukkan quantity barang</small>
    </div>

    <!-- Tombol hapus dan simpan barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>