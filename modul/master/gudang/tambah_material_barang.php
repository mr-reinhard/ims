<?php 
include '../../session/koneksi.php';
?>

<form method="post" id="" autocomplete="off">
    <div class="form-group mt-2 ml-5">
        <button class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_material_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_masukkan_nama_barang_form_tambah_material_master">Nama Barang</label>
        <select name="" id="id_masukkan_nama_barang_form_tambah_material_master" class="form-control w-50" aria-describedby="namaBarang" required>
            <option value="">Mexabolt</option>
        </select>
        <small id="namaBarang">Masukkan nama barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_masukkan_tipe_barang_form_tambah_material_barang">Tipe Barang</label>
        <select name="" id="id_masukkan_tipe_barang_form_tambah_material_barang" class="form-control w-50" aria-describedby="tipeBarang" required>
            <option value="">M8</option>
        </select>
        <small id="tipeBarang">Masukkan tipe barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <select name="" id="" class="form-control w-50" required>
            <option value="">M8 X 12</option>
        </select>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for=""></label>
        <input type="text" name="" id="" class="form-control w-50" aria-describedby="materialBarang" required>
        <small id="materialBarang">Masukkan ama material barang</small>
    </div>
</form>