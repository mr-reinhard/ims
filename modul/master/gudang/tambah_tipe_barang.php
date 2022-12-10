<?php 
include '../../session/koneksi.php';
 ?>

 <form method="post" id="id_form_tambah_nama_tipe_master" autocomplete="off">
    <script>

    </script>

    <div class="form-group mt-2 ml-5">
        <button type="button" class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_tipe_barang_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_pilih_nama_barang_form_tambah_tipe_master">Nama Barang</label>
        <select name="name_select_nama_barang_form_tambah_tipe_master" id="id_pilih_nama_barang_form_tambah_tipe_master" class="form-control w-50" aria-describedby="namaBarang" required>
            <?php 
            $sqlchecking = "SELECT * FROM tbl_master_barang ORDER BY nama_barang ASC";
            $runSql = mysqli_query($koneksi,$sqlchecking);
            if (mysqli_num_rows($runSql) > 0) {
                # code...
                while ($jumlahNamabarang = mysqli_fetch_array($runSql)) {
                    # code...
                    echo "<option value='".$jumlahNamabarang['id_barang']."'>".$jumlahNamabarang['nama_barang']."</option>";
                }
            }
            else {
                # code...
                echo "<option value='' disabled selected>Silahkan tambah nama barang</option>";
            }
            ?>
        </select>
        <small id="namaBarang">Pilih nama barang</small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_nama_tipe_form_tambah_tipe_master">Tipe Barang</label>
        <input type="text" name="name_nama_tipe_form_tambah_tipe_master" class="form-control w-50" id="id_nama_tipe_form_tambah_tipe_master" placeholder="Masukkan nama barang" aria-describedby="tipeBarang" required>
        <small id="tipeBarang">Masukkan tipe barang </small>
    </div>

    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
 </form>