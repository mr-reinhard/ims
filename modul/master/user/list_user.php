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
              <th scope="col">Nama Pengguna</th>
              <th scope="col">Tipe Login</th>
              <th>
                <button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Akun Pengguna">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>Ahmad Rivai</td>
      <td>Warehouse</td>
      <td>
        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Atur Akses">
            <i class="fa-solid fa-user-lock"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail Akun">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Akun">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Akun">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">2</th>
      <td>Muhammad Rivco</td>
      <td>Warehouse</td>
      <td>
        
        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Atur Akses">
            <i class="fa-solid fa-user-lock"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail Akun">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Akun">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Akun">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>Septian Aditya</td>
      <td>Pembelian</td>
      <td>
        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Atur Akses">
            <i class="fa-solid fa-user-lock"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail Akun">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Akun">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Akun">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

  </tbody>

</table>