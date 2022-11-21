<?php
include '../../session/koneksi.php';
?>

<form method="post" id="id_form_tambah_customer_master" autocomplete="off">
    <script>
        $('#id_input_nama_customer_form_tambah_customer_master').keypress(function(e){
            var regular_expression = new RegExp("^[0-9a-zA-Z\\s\\.\\-]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regular_expression.test(str)) {
                return true;
            }
            karakter_huruf_tidak_diizinkan();
            return false;
        });
    </script>

    <div class="form-group mt-5 ml-5 mr-5">
        <label for="id_input_nama_customer_form_tambah_customer_master">Nama customer</label>
        <input type="text" class="form-control" id="id_input_nama_customer_form_tambah_customer_master" aria-describedby="emailHelp"
            placeholder="Masukkan nama customer" name="name_input_nama_customer_master" autofocus>
        <small id="emailHelp" class="form-text text-muted">Penggunaan kata harus menggunakan a-z A-Z . - dan SPASI.</small>
    </div>

    <div class="form-group mt-5 ml-5 mr-5">
        <button type="button" id="id_btn_kembali_form_tambah_customer_master" class="btn btn-outline-danger mr-5">KEMBALI</button>
        <button type="submit" class="btn btn-outline-success">SIMPAN</button>
    </div>


</form>