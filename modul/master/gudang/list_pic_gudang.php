<table class="table table-hover">

    <script>
        $(document).ready(function(){
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            });
        });
    </script>

    <style>
      tr{
        text-align: center;
      }
    </style>

        <thead class="header thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Dept.</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Status</th>
              <th>
                <button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tambah PIC">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>AHMAD RIVAI</td>
      <td>Warehouse</td>
      <td>Picker</td>
      <td>
        <button class="btn btn-success" disabled>AKTIF</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail PIC">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit PIC">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus PIC">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">2</th>
      <td>YUDI SAPUTRA</td>
      <td>Warehouse</td>
      <td>Administrator</td>
      <td>
        <button class="btn btn-success" disabled>AKTIF</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail PIC">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit PIC">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus PIC">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>SLAMET RIYADI</td>
      <td>Warehouse</td>
      <td>Checker</td>
      <td>
        <button class="btn btn-success" disabled>AKTIF</button>
      </td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail PIC">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit PIC">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus PIC">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

  </tbody>

</table>