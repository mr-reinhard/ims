<?php 
include '../../session/koneksi.php'
?>

<form method="post" id="id_form_tambah_vendor_master" autocomplete="off">
    <script>
        $('#id_input_nama_vendor_master').keypress(function(e){
            var regularExpression = new RegExp("^[a-zA-Z0-9\\-\\.\\,\\s]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
        $('#id_input_telfon_vendor_master').keypress(function(e){
            var regularExpression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
        $('#id_input_email_vendor_master').keypress(function(e){
            var regularExpression = new RegExp("^[a-zA-Z0-9\\-\\,\\@\\.]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
        $('#id_input_fax_vendor_master').keypress(function(e){
            var regularExpression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regularExpression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>
    
    <!-- Tombol Tambah Vendor -->
    <div class="form-group">
        <button type="button" id="id_button_kembali_form_tambah_vendor_master" class="btn btn-outline-primary mt-2 ml-5">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- Nama Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_nama_vendor_master">Nama Vendor</label>
        <input type="text" maxlength="50" id=id_input_nama_vendor_master" class="form-control" name="name_input_nama_vendor_form_tambah_vendor_master" aria-describedby="namaVendor" placeholder="Masukkan nama vendor" autofocus required>
        <small id="namaVendor" class="form-text text-muted">Isi nama vendor secara lengkap</small>
    </div>

    <!-- Alamat Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_alamat_vendor_master">Alamat Vendor</label>
        <textarea name="name_input_alamat_vendor_form_tambah_vendor_master" class="form-control" id="id_input_alamat_vendor_master" cols="30" rows="10" aria-describedby="alamatVendor" placeholder="Masukkan Alamat Vendor" required></textarea>
        <small id="alamatVendor" class="form-text text-muted">Isi alamat vendor secara lengkap</small>
    </div>

    <!-- Telfon Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_telfon_vendor_master">Telfon Vendor</label>
        <input type="text" maxlength="13" id="id_input_telfon_vendor_master" class="form-control" name="name_input_telfon_vendor_form_tambah_vendor_master" aria-describedby="telfonVendor" placeholder="Masukkan No. Telfon Vendor" required>
        <small id="telfonVendor" class="form-text text-muted">Isi telfon vendor secara lengkap</small>
    </div>

    <!-- Email Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_email_vendor_master">Email Vendor</label>
        <input type="text" maxlength="50" id="id_input_email_vendor_master" class="form-control" name="name_input_email_vendor_form_tambah_vendor_master" aria-describedby="emailVendor" placeholder="Masukkan email vendor" required>
        <small id="emailVendor" class="form-text text-muted">Isi email vendor secara lengkap</small>
    </div>

    <!-- Fax Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <label for="id_input_fax_vendor_master">Fax Vendor</label>
        <input type="text" maxlength="50" id="id_input_fax_vendor_master" class="form-control" name="name_input_fax_vendor_form_tambah_vendor_master" aria-describedby="faxVendor" placeholder="Masukkan Fax vendor" required>
        <small id="faxVendor" class="form-text text-muted">Isi fax vendor secara lengkap</small>
    </div>

    <!-- Tombol Hapus dan Simpan -->
    <div class="form-group mt-5 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>