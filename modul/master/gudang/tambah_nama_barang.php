<?php 
include '../../session/koneksi.php';
?>

<form method="post" id="id_form_simpan_nama_barang_master" autocomplete="off">
    <script>
        $('#id_nama_barang_form_tambah_nama_barang_master').keypress(function(e){
            var regularExpression = new RegExp("^[a-zA-Z0-9\\-\\.\\,\\s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <!-- Isi nama barang -->
    <div class="form-group">
        <button type="button" class="btn btn-outline-primary mt-2 ml-5" id="id_button_kembali_form_tambah_nama_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Nama barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_nama_barang_form_tambah_nama_barang_master">Nama Barang</label>
        <input type="text" maxlength="50" name="name_nama_barang_form_tambah_nama_barang_master" id="id_nama_barang_form_tambah_nama_barang_master" class="form-control w-50" aria-describedby="namaBarang" placeholder="Masukkan nama barang" autofocus required>
        <small id="namaBarang">Isi nama barang dengan lengkap</small>
    </div>

    <!-- Tombol Hapus dan Simpan -->
    <div class="form-group mt-5 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>