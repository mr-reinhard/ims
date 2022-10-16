<table class="table table-hover">

    <script>
        $(document).ready(function(){
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            });
        });
    </script>

        <thead class="header thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Tipe</th>
              <th scope="col">Tgl</th>
              <th scope="col">Vendor</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

  <tbody>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>Hexabolt</td>
      <td>M12 x 20</td>
      <td>12-10-2022</td>
      <td>CV. Alam Sejahtera</td>
      <td>
        <button class="btn btn-success" disabled>BERHASIL</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Pembelian">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Pembelian">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Pembelian">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">2</th>
      <td>Hexabolt</td>
      <td>M12 x 20</td>
      <td>12-10-2022</td>
      <td>CV. Alam Sejahtera</td>
      <td>
        <button class="btn btn-secondary" disabled>PROSESS</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Pembelian">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Pembelian">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Pembelian">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">3</th>
      <td>Hexabolt</td>
      <td>M12 x 20</td>
      <td>12-10-2022</td>
      <td>CV. Alam Sejahtera</td>
      <td>
        <button class="btn btn-warning">PENDING</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Pembelian">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Pembelian">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Pembelian">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

  </tbody>

</table>