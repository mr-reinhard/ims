<table class="table table-hover">

    <style>
        tr{
            text-align: center;
        }
    </style>

    <thead class="header thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Barang</th>
            <th scope="col">Tipe</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Material</th>
            <th>
                Aksi
            </th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include '../../../session/koneksi.php';
        $no = 1;
        $queryData = "SELECT * FROM vw_inventory ORDER BY nama_barang ASC";
        $runQuery = mysqli_query($koneksi,$queryData);
        while ($DataBarang  = mysqli_fetch_array($runQuery)) {
            # code...
            ?>
            <tr>
                <!-- No -->
                <td>
                    <?php echo $no++;  ?>
                </td>

                <!-- Nama Barang -->
                <td>
                    <?php echo $DataBarang['nama_barang']; ?>
                </td>

                <!-- Tipe barang -->
                <td>
                    <?php echo $DataBarang['nama_tipe']; ?>
                </td>

                <!-- Ukuran barang -->
                <td>
                    <?php echo $DataBarang['nama_ukuran']; ?>
                </td>

                <!-- Material barang -->
                <td>
                    <?php echo $DataBarang['nama_material']; ?>
                </td>

                <!-- Tombol aksi -->
                <td>
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-eye"></i>
                    </button>

                    <button type="button" class="btn btn-success" id="id_tombol_buka_form_permintaan_barang_master" value="<?php echo $DataBarang['id_inventory']; ?>">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </td>
            </tr>
            <?php
        }
         ?>
    </tbody>
</table>