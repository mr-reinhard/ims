<?php 
include '../../session/koneksi.php';
?>

<form method="POST" id="id_form_tambah_departemen_master" autocomplete="off">
    <script>

    </script>

    <!-- Tombol kembali -->
    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="id_tombol_kembali_form_tambah_departemen_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Nama Departemen -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_nama_departemen_form_tambah_departemen_master">Nama Departemen</label>
        <input type="text" name="" class="form-control w-50" id="id_nama_departemen_form_tambah_departemen_master" aria-describedby="namaDept" autofocus required>
        <small id="namaDept">Masukkan nama departemen</small>
    </div>

    <!-- Tombol hapus dan simpan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>