<?php 
include '../../session/koneksi.php';
 ?>

 <form method="post" id="id_form_tambah_karyawan_master" autocomplete="off">
    <script>
        $('#id_nama_karyawan_form_tambah_karyawan_master').keypress(function(e){
            var reguler_expression = new RegExp("^[a-zA-Z0-9\\-\\.\\,\\s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });

        $('#id_telfon_karyawan_form_tambah_karyawan_master').keypress(function(e){
            var reguler_expression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });

        $('#id_email_karyawan_form_tambah_karyawan_master').keypress(function(e){
            var reguler_expression = new RegExp("^[a-zA-Z0-9\\-\\,\\@\\.]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <!-- Tombol kembali -->
    <div class="form-group mt-2 ml-5">
        <button class="btn btn-outline-primary" id="id_btn_kembali_form_tambah_karyawan_master">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Nama karyawan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_nama_karyawan_form_tambah_karyawan_master">Nama karyawan</label>
        <input type="text" name="name_nama_karyawan_form_tambah_karyawan_master" class="form-control w-50" id="id_nama_karyawan_form_tambah_karyawan_master" title="Masukkan nama karyawan" placeholder="Masukkan nama karyawan" aria-describedby="namaKaryawan" autofocus required>
        <small id="namaKaryawan">Nama karyawan harus alpanumerik dan spasi</small>
    </div>

    <!-- Alamat karyawan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_alamat_karyawan_form_tambah_karyawan_master">Alamat karyawan</label>
        <textarea name="name_alamat_karyawan_form_tambah_karyawan_master" class="form-control w-50" id="id_alamat_karyawan_form_tambah_karyawan_master" title="Masukkan alamat karyawan" placeholder="Masukkan alamat karyawan" aria-describedby="alamatKaryawan" cols="30" rows="10" required></textarea>
        <small id="alamatKaryawan">Tulis alamat dengan lengkap</small>
    </div>

    <!-- Telfon karyawan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_telfon_karyawan_form_tambah_karyawan_master">Telfon karyawan</label>
        <input type="text" name="name_telfon_karyawan_form_tambah_karyawan_master" class="form-control w-50" id="id_telfon_karyawan_form_tambah_karyawan_master" title="Masukkan telfon karyawan" placeholder="Masukkan telfon karyawan" aria-describedby="telfonKaryawan" required>
        <small id="telfonKaryawan">Masukkan telfon karyawan dengan lengkap</small>
    </div>

    <!-- Email karyawan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_email_karyawan_form_tambah_karyawan_master">Email karyawan</label>
        <input type="text" name="name_email_karyawan_form_tambah_karyawan_master" class="form-control w-50" id="id_email_karyawan_form_tambah_karyawan_master" title="Masukkan email karyawan" placeholder="Masukkan email karyawan" aria-describedby="emailKaryawan" required>
        <small id="emailKaryawan">Masukka email dengan menggunakan '@'</small>
    </div>

    <!-- Tombol Hapus dan simpan -->
    <div class="form-group mt-3 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
 </form>