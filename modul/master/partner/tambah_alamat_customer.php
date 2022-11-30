<?php 
include '../../session/koneksi.php';
$idCust = $_GET['id_customer'];
$query = "SELECT * FROM tbl_master_customer WHERE id_customer LIKE '%".$idCust."%'";
$run_query = mysqli_query($koneksi, $query);
$fetch_arr = mysqli_fetch_array($run_query);
?>

<form method="post" class="" id="id_form_tambah_alamat_master" autocomplete="off">
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
        $('#id_tambah_email_customer_form_master').keypress(function(e){
            var reguler_expression = new RegExp("^[a-zA-Z0-9\\-\\,\\@\\.]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (reguler_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
        $('#id_tambah_customer_master').keypress(function(e){
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
    <button type="button" id="id_button_kembali_form_tambah_alamat_customer_master" class="btn btn-outline-primary">
        <i class="fa-solid fa-circle-chevron-left"></i> KEMBALI
    </button>
    </div>

    <!-- Nama Customer -->
    <div class="form-group mt-3 ml-5 mr-5">
        <h3><?php echo $fetch_arr['nama_customer']; ?></h3>
    </div>

    <!-- Field id customer dan hidden -->
    <input type="text" maxlength="8" name="name_swap_id_customer_master" value="<?php echo $fetch_arr['id_customer']; ?>" readonly hidden>

    <!-- Alamat Customer -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_alamat_customer_master">Alamat Customer</label>
        <textarea class="form-control"  name="name_tambah_alamat_customer_master" id="id_tambah_alamat_customer_master" cols="30" rows="10" aria-describedby="alamatCust" placeholder="Masukkan alamat customer" autofocus required></textarea>
        <small id="alamatCust" class="form-text text-muted">Mohon isi alamat secara lengkap</small>
    </div>

    <!-- Telfon Customer -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_telfon_customer_master">Telfon customer</label>
        <input type="text" maxlength="13" class="form-control" id="id_tambah_telfon_customer_master" aria-describedby="telfCust" placeholder="Masukkan telfon customer" name="name_tambah_telfon_customer_master" required>
        <small id="telfCust" class="form-text text-muted">Gunakan angka, jika kosong harap tulis ' - '</small>
    </div>

    <!-- Email Customer -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_email_customer_form_master">Email customer</label>
        <input type="email" maxlength="50" name="name_tambah_email_customer_master" class="form-control" id="id_tambah_email_customer_form_master" placeholder="Masukkan email" aria-describedby="emailCust" required>
        <small id="emailCust" class="form-text text-muted">Harap menggunakan karakter ' @ '</small>
    </div>

    <!-- Fax Customer -->
    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_tambah_customer_master">Fax customer</label>
        <input type="text" maxlength="13" name="name_tambah_fax_customer_master" class="form-control" id="id_tambah_customer_master" placeholder="Masukkan fax" aria-describedby="faxCust" required>
        <small id="faxCust" class="form-text text-muted">Gunakan angka, jika kosong harap tulis ' - '</small>
    </div>

    <!-- Tombol Hapus dan Simpan -->
    <div class="form-group mt-5 ml-5 mr-5">
        <button type="reset" class="btn btn-outline-danger mr-5"><i class="fa-solid fa-xmark"></i> HAPUS</button>
        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-floppy-disk"></i> SIMPAN</button>
    </div>
</form>