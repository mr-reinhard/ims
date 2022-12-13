<table class="table table-hover">

    <style>
      tr{
        text-align: center;
      }
    </style>

        <thead class="header thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Tipe</th>
              <th scope="col">Uk.</th>
              <th scope="col">Mat.</th>
              <th scope="col">Qty</th>
              <th>
                <button type="button" class="btn btn-success" id="id_btn_tambah_inventory_master" title="Tambah Barang">
                    <i class="fas fa-cart-arrow-down"></i>
                </button>

                <button type="button" class="btn btn-primary">
                  <i class="fa-solid fa-boxes-stacked"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <?php 
    include '../../session/koneksi.php';
    $no = 1;
    $queryData = "SELECT * FROM vw_inventory ORDER BY nama_barang ASC";
    $runData = mysqli_query($koneksi,$queryData);
    while ($hasil = mysqli_fetch_array($runData)) {
      # code...
      if ($hasil['qty'] > 5) {
        # code...
        ?>
        <tr>
          <td>
            <?php echo $no++; ?>
          </td>

          <td>
            <?php echo $hasil['nama_barang']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_tipe'] ?>
          </td>

          <td>
            <?php echo $hasil['nama_ukuran']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_material']; ?>
          </td>

          <td>
            <?php echo $hasil['qty']; ?>
          </td>

          <td>
            <button type="button" class="btn btn-success" title="Tambah Qty">
              <i class="fas fa-plus-circle"></i>
            </button>

            <button type="button" class="btn btn-primary" title="Detail Barang">
              <i class="fa-solid fa-eye"></i>
            </button>

            <button type="button" class="btn btn-warning" value="<?php echo $hasil['id_inventory'] ?>" id="id_btn_edit_inventory_form_list_inventory_master" title="Edit barang">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>

            <button type="button" class="btn btn-danger" id="id_btn_hapus_inventory_form_list_inventory" value="<?php echo $hasil['id_inventory'] ?>" title="Hapus Barang">
                <i class="fas fa-minus-circle"></i>
            </button>
          </td>
        </tr>
        <?php
      }
      elseif ($hasil['qty'] <= 5 && $hasil['qty'] > 0) {
        # code...
        ?>
        <tr style="background-color: #F9E79F;">
          <td>
            <?php echo $no++; ?>
          </td>

          <td>
            <?php echo $hasil['nama_barang']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_tipe'] ?>
          </td>

          <td>
            <?php echo $hasil['nama_ukuran']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_material']; ?>
          </td>

          <td>
            <?php echo $hasil['qty']; ?>
          </td>

          <td>
            <button type="button" class="btn btn-success" title="Tambah Qty">
                <i class="fas fa-plus-circle"></i>
            </button>

            <button type="button" class="btn btn-primary" title="Detail Barang">
                <i class="fa-solid fa-eye"></i>
            </button>

            <button type="button" class="btn btn-warning" value="<?php echo $hasil['id_inventory'] ?>" id="id_btn_edit_inventory_form_list_inventory_master" title="Edit Barang">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>

            <button type="button" class="btn btn-danger" id="id_btn_hapus_inventory_form_list_inventory" value="<?php echo $hasil['id_inventory'] ?>" title="Hapus Barang">
                <i class="fas fa-minus-circle"></i>
            </button>
          </td>
        </tr>
        <?php
      }
      elseif ($hasil['qty'] == 0) {
        # code...
        ?>
        <tr style="background-color: #F5B7B1;">
          <td>
            <?php echo $no++; ?>
          </td>

          <td>
            <?php echo $hasil['nama_barang']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_tipe'] ?>
          </td>

          <td>
            <?php echo $hasil['nama_ukuran']; ?>
          </td>

          <td>
            <?php echo $hasil['nama_material']; ?>
          </td>

          <td>
            <?php echo $hasil['qty']; ?>
          </td>

          <td>
            <button type="button" class="btn btn-success" title="Tambah Qty">
                <i class="fas fa-plus-circle"></i>
            </button>

            <button type="button" class="btn btn-primary" title="Detail Barang">
                <i class="fa-solid fa-eye"></i>
            </button>

            <button type="button" class="btn btn-warning" value="<?php echo $hasil['id_inventory'] ?>" id="id_btn_edit_inventory_form_list_inventory_master"  title="Edit Barang">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>

            <button type="button" class="btn btn-danger" id="id_btn_hapus_inventory_form_list_inventory" value="<?php echo $hasil['id_inventory'] ?>" title="Hapus Barang">
                <i class="fas fa-minus-circle"></i>
            </button>
          </td>
        </tr>
        <?php
      }
    }
    ?>

  </tbody>

</table>