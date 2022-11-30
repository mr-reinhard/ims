<?php 
include '../../session/koneksi.php';
$idVendor = $_GET['id_vendor'];
$sqlGetVendor = "SELECT * FROM tbl_master_vendor WHERE id_vendor LIKE'%".$idVendor."%'";
$runSql = mysqli_query($koneksi, $sqlGetVendor);
$fetchArr = mysqli_fetch_array($runSql);
 ?>

 <form method="" class="" id="id_form_tambah_alamat_vendor_master" autocomplete="off">
    <script>
        $('#id_tambah_telfon_customer_master').keypress(function(e){
            var reguler_expression = new RegExp("^[0-9]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <!-- Tombol Kembali -->
    <div class="form-group mt-2 ml-5">
        <button type="button" id="id_btn_kembali_form_tambah_alamat_vendor_master" class="btn btn-outline-primary">
            <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
        </button>
    </div>

    <!-- id_vendor -->
    <input type="text" maxlength="8" name="name_id_vendor_form_tambah_alamat_vendor_master" value="<?php echo $fetchArr['id_vendor']; ?>" readonly hidden>

    <!-- Nama Vendor Vendor -->
    <div class="form-group mt-3 ml-5 mr-5">
        <h3><?php echo $fetchArr['nama_vendor']; ?></h3>
    </div>

    <!-- Alamat Vendor -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_alamat_form_tambah_vendor_master">Alamat Vendor</label>
        <textarea name="name_tambah_alamat_form_tambah_vendor_master" id="id_tambah_alamat_form_tambah_vendor_master" class="form-control" cols="30" rows="10" aria-describedby="namaVend" placeholder="Masukkan alamat customer" autofocus required></textarea>
        <small id="namaVend" class="form-text text-muted">Masukkan alamt vendor secara lengkap</small>
    </div>

    <!-- Telfon Vendor -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_telefon_form_tambah_vendor_master">Telfon Vendor</label>
        <input type="text" name="name_tambah_telefon_form_tambah_vendor_master" id="id_tambah_telefon_form_tambah_vendor_master" class="form-control" aria-describedby="telfVend" placeholder="Masuukan telfon vendor" required>
        <small id="telfVend" class="form-text text-muted">Masukkan telfon vendor secara lengkap</small>
    </div>

    <!-- Email Vendor -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_email_form_tambah_vendor_master">Email Vendor</label>
        <input type="text" name="name_tambah_email_form_tambah_vendor_master" class="form-control" id="id_tambah_email_form_tambah_vendor_master" placeholder="Masukkan email vendor" aria-describedby="emailVend" required>
        <small id="emailVend" class="form-text text-muted">Masukkan email vendor secara lengkap</small>
    </div>

    <!-- Fax Vendor -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_fax_form_tambah_vendor_master">Fax Vendor</label>
        <input type="text" name="name_tambah_fax_form_tambah_vendor_master" id="id_tambah_fax_form_tambah_vendor_master" class="form-control" placeholder="Masukkan fax vendor" aria-describedby="faxVend" required>
        <small id="faxVend" class="form-text text-muted">Masukkan fax vendor dengan lengkap</small>
    </div>

    <div class="form-group mt-5 ml-5 mr-5">
        <button type="reset" id="" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
 </form>