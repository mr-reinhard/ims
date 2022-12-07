<?php 
include '../../session/koneksi.php';
?>

<form method="post" id="" autocomplete="off">

    <!-- Tombol kembali -->
    <div class="form-group mt-2 ml-5">
        <button class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_material_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Masukkan nama barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_masukkan_nama_barang_form_tambah_material_master">Nama Barang</label>
        <select name="" id="id_masukkan_nama_barang_form_tambah_material_master" class="form-control w-50" aria-describedby="namaBarang" required>
            <option value="">Mexabolt</option>
        </select>
        <small id="namaBarang">Masukkan nama barang</small>
    </div>

    <!-- Masukkan tipe barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_masukkan_tipe_barang_form_tambah_material_barang">Tipe Barang</label>
        <select name="" id="id_masukkan_tipe_barang_form_tambah_material_barang" class="form-control w-50" aria-describedby="tipeBarang" required>
            <option value="">M8</option>
        </select>
        <small id="tipeBarang">Masukkan tipe barang</small>
    </div>

    <!-- Masukkan ukuran barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_ukuran_barang_form_tambah_material_barang_master">Ukuran barang</label>
        <select name="" id="id_pilih_ukuran_barang_form_tambah_material_barang_master" class="form-control w-50" aria-describedby="ukBarang" required>
            <option value="">M8 X 12</option>
        </select>
        <small id="ukBarang">Pilih ukuran barang dengan jelas</small>
    </div>

    <!-- Masukkan material barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_masukkan_ukuran_form_tambah_material_barang_master">Material barang</label>
        <input type="text" name="" id="id_masukkan_ukuran_form_tambah_material_barang_master" class="form-control w-50" aria-describedby="materialBarang" required>
        <small id="materialBarang">Masukkan nama material barang</small>
    </div>

    <!-- tombol hapus dan simpan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>