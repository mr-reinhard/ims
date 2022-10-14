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
              <th scope="col">Nama Customer</th>
              <th>
                <button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tambah Vendor">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>PT. ULAR DERIK</td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Customer">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Customer">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Customer">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">2</th>
      <td>PT. ULAR COBRA</td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Customer">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Customer">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Customer">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>PT. ULAR PHYTON</td>
      <td>
        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Customer">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Customer">
            <i class="fa-solid fa-user-pen"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Customer">
            <i class="fa-solid fa-user-xmark"></i>
        </button>
      </td>
    </tr>

  </tbody>

</table>