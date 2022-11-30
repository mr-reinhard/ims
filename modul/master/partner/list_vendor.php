<table class="table table-hoves">
    <style>
        tr{
            text-align: center;
        }
    </style>

    <thead class="header thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Vendor</th>
            <th>
                <button class="btn btn-success" id="id_tombol_tambah_vendor_baru_master" title="Tambah Vendor">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include '../../session/koneksi.php';

        $no = 1;
        $query_data = "SELECT * FROM tbl_master_vendor ORDER BY nama_vendor ASC";
        $exec_data = mysqli_query($koneksi, $query_data);
        while ($hasil = mysqli_fetch_array($exec_data)) {
            # code...
            ?>
            <tr>
              <td>
                <?php echo $no++; ?>
              </td>

              <td>
                <?php echo $hasil['nama_vendor']; ?>
              </td>

              <td>
                <button type="button" id="id_button_detail_vendor_master" class="btn btn-primary" value="<?php echo $hasil['id_vendor']; ?>" title="Detail Vendor" name="button">
                  <i class="fa-solid fa-eye"></i>
                </button>
                
                <button type="button" id="id_button_tambah_alamat_master" class="btn btn-secondary" value="<?php echo $hasil['id_vendor']; ?>" title="Tambah Alamat" name="button">
                  <i class="fas fa-address-card"></i>
                </button>

                <button type="button" id="id_button_edit_pelanggan_master" class="btn btn-warning" value="<?php echo $hasil['id_vendor']; ?>" title="Edit Vendor" name="button">
                  <i class="fa-solid fa-user-pen"></i>
                </button>

                <button type="button" id="id_button_hapus_pelanggan_master" class="btn btn-danger" value="<?php echo $hasil['id_vendor']; ?>" title="Hapus Vendor" name="button">
                  <i class="fa-solid fa-user-xmark"></i>
                </button>
              </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>