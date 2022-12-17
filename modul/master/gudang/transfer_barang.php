<table class="table table-hover">
    <script>

    </script>

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
                Aksi
              </th>
            </tr>
          </thead>

  <tbody>

  <?php 
  include '../../session/koneksi.php';
  $no = 1;
  $queryData = "SELECT * FROM vw_inventory WHERE qty > 0 ORDER BY nama_barang ASC";
  $runQuery = mysqli_query($koneksi,$queryData);
  while ($hasilQuery = mysqli_fetch_array($runQuery)) {
    # code...
    ?>
    <tr>
      <td>
        <!-- No -->
        <?php echo $no++; ?>
      </td>

      <td>
        <!-- Nama -->
        <?php echo $hasilQuery['nama_barang']; ?>
      </td>

      <td>
        <!-- Tipe -->
        <?php echo $hasilQuery['nama_tipe'] ?>
      </td>

      <td>
        <!-- Ukuran -->
        <?php echo $hasilQuery['nama_ukuran'] ?>
      </td>

      <td>
        <!-- Material -->
        <?php echo $hasilQuery['nama_material'] ?>
      </td>

      <td>
        <!-- Qty -->
        <?php echo $hasilQuery['qty'] ?>
      </td>

      <td>
        <!-- Tombol Aksi -->
        <button type="button" class="btn btn-primary">
          <i class="fa-solid fa-eye"></i>
        </button>

        <button type="button" class="btn btn-success">
          <i class="fas fa-share"></i>
        </button>
      </td>
    </tr>
    <?php
  }
  ?>
  </tbody>

</table>