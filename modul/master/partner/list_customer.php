
  <table class="table table-hover">

    <style>
      tr{
        text-align: center;
      }
    </style>

        <thead class="header thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Customer</th>
              <th>
                <button class="btn btn-success" id="id_form_list_customer_master" data-placement="bottom" title="Tambah Vendor">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <?php 
    include '../../session/koneksi.php';
    $no = 1;
    $query_data = "SELECT * FROM tbl_master_customer ORDER BY nama_customer ASC";
    $exec_data = mysqli_query($koneksi, $query_data);
    while ($hasil = mysqli_fetch_array($exec_data)) {
      # code...
      ?>
      <tr>
        <td>
          <?php echo $no++; ?>
        </td>

        <td>
          <?php echo $hasil['nama_customer']; ?>
        </td>

        <td>
        <button type="button" id="id_button_detail_customer_master" class="btn btn-primary" value="<?php echo $hasil['id_customer']; ?>" title="Detail Customer" name="button">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button type="button" id="id_button_tambah_alamat_customer_master" class="btn btn-secondary" value="<?php echo $hasil['id_customer']; ?>" title="Tambah Alamat Customer" name="button">
            <i class="fas fa-address-card"></i>
        </button>

        <button type="button" id="id_button_edit_customer_master" class="btn btn-warning" value="<?php echo $hasil['id_customer']; ?>" title="Edit Customer" name="button">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button type="button" id="id_button_hapus_customer_master" class="btn btn-danger" value="<?php echo $hasil['id_customer']; ?>" title="Hapus Customer" name="button">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
        </td>
      </tr>
      <?php
    }
    ?>

  </tbody>

</table>