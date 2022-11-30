<table class="table table-hover">
    <style>
        tr{
            text-align: center;
        }
    </style>

    <thead class="header thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Departemen</th>
            <th>
               <button class="btn btn-success" id="id_btn_tambah_karyawan_form_list_karyawan_master" title="Tambah Karyawan">
                <i class="fa-solid fa-user-plus"></i>
               </button> 
            </th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include '../../session/koneksi.php';

        $no = 1;
        $query_karyawan = "SELECT * FROM tbl_master_karyawan";
        $exec_query = mysqli_query($koneksi, $query_karyawan);
        while ($hasil = mysqli_fetch_array($exec_query)) {
            # code...
            ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>

                    <td>
                        <?php echo $hasil['nama_karyawan']; ?>
                    </td>

                    <td>
                        Kelautan
                    </td>

                    <td>
                        <button type="button" id="" class="btn btn-secondary" value="" title="Tambah Alamat karyawan" name="button">
                            <i class="fas fa-address-card"></i>
                        </button>

                        <button type="button" id="" class="btn btn-warning" value="" title="Edit Karyawan" name="button">
                            <i class="fa-solid fa-user-pen"></i>
                        </button>

                        <button type="button" id="" class="btn btn-danger" value="" title="Hapus Karyawan" name="button">
                            <i class="fa-solid fa-user-xmark"></i>
                        </button>
                    </td>
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>