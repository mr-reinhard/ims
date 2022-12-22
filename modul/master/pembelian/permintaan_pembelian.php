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
            <th scope="col">Permintaan</th>
            <th scope="col">Tgl</th>
            <th scope="col">Qty</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include '../../session/koneksi.php';
        $no = 1;
        $queryData = "SELECT * FROM vw_request_barang ORDER BY nama_barang ASC";
        $execQuery = mysqli_query($koneksi,$queryData);
        while ($hasilData = mysqli_fetch_array($execQuery)) {
            # code...
            ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>

                <td>
                    <?php echo $hasilData['nama_barang']; ?>
                </td>

                <td>
                    <?php echo $hasilData['jenis_request']; ?>
                </td>

                <td>
                    <?php echo date("d-m-Y",strtotime($hasilData['date_time'])); ?>
                </td>

                <td>
                    <?php echo $hasilData['qty']; ?>
                </td>

                <td>
                    <button type="button" class="btn btn-warning" disabled>
                        <?php echo $hasilData['nama_status']; ?>
                    </button>
                </td>

                <td>
                    
                </td>

            </tr>
            <?php
        }
        ?>
    </tbody>
</table>