<?php 
include '../../session/koneksi.php';
?>

<form method="post" id="id_form_tambah_ukuran_master" autocomplete="off">

    <script>

    </script>

    <!-- Tombol kembali ke halaman tambah inventory -->
    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_ukuran_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Pilih nama barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="">Nama barang</label>
        <select name="name_pilih_nama_barang_form_tambah_ukuran_barang_master" id="id_pilih_nama_barang_form_tambah_ukuran_master" class="form-control w-50" autofocus required>
            <?php 
            $queryNamaBarang = "SELECT * FROM tbl_master_barang ORDER BY nama_barang ASC";
            $execQuery = mysqli_query($koneksi,$queryNamaBarang);
            while ($hasilData = mysqli_fetch_array($execQuery)) {
                # code...
                echo "<option value='".$hasilData['id_barang']."'>".$hasilData['nama_barang']."</option>";
            }
            ?>
        </select>
        <small id="">Pilih nama barang</small>
    </div>

    <!-- Pilih tipe barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="">Tipe barang</label>
        <select name="name_pilih_tipe_barang_form_tambah_ukuran_barang_master" id="id_pilih_tipe_barang_form_tambah_ukuran_master" class="form-control w-50" required>
            <option disabled selected>Pilih Tipe barang</option>
        </select>
        <small id="">Pilih tipe barang</small>
    </div>

    <!-- Pilih ukuran barang -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_ukuran_barang_form_tambah_ukuran_barang_master">Ukuran barang</label>
        <input type="text" name="name_tambah_ukuran_barang_form_tambah_ukuran_barang_master" id="id_input_ukuran_barang_form_tambah_ukuran_barang_master" aria-describedby="ukuranBarang" class="form-control w-50" required>
        <small id="ukuranBarang">Pilih ukuran barang</small>
    </div>

    <!-- Tombol hapus dan simpan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>

</form>