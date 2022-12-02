<?php 
include '../../session/koneksi.php';
 ?>

 <form method="post" id="" autocomplete="off">
    <script>

    </script>

    <div class="form-group mt-2 ml-5">
        <button class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_tipe_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_tipe_master">Nama Barang</label>
        <select name="" id="id_pilih_nama_barang_form_tambah_tipe_master" class="form-control w-50" aria-describedby="namaBarang" required>
            <option value="">Hexabolt</option>
            <option value="">Spring</option>
        </select>
        <small id="namaBarang">Pilih nama barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_nama_tipe_form_tambah_tipe_master">Tipe Barang</label>
        <input type="text" name="" class="form-control w-50" id="id_nama_tipe_form_tambah_tipe_master" placeholder="Masukkan nama barang" aria-describedby="tipeBarang" required>
        <small id="tipeBarang">Masukkan tipe barang </small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
 </form>