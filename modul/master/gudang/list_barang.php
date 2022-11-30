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
              <th scope="col">Nama Barang</th>
              <th scope="col">Tipe</th>
              <th scope="col">Uk.</th>
              <th scope="col">Mat.</th>
              <th scope="col">Qty</th>
              <th>
                <button class="btn btn-success" id="id_btn_tambah_inventory_master" data-toggle="tooltip" data-placement="bottom" title="Tambah Barang">
                    <i class="fas fa-cart-arrow-down"></i>
                </button>
              </th>
            </tr>
          </thead>

  <tbody>

    <tr style="background-color: #F5B7B1;">
      <th scope="row justify-content-center">1</th>
      <td>Mata bor</td>
      <td>Tapping</td>
      <td>8mm</td>
      <td>Tungsten CA</td>
      <td>25</td>
      <td>
        <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Qty">
            <i class="fas fa-plus-circle"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Barang">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Barang">
            <i class="fas fa-edit"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Barang">
            <i class="fas fa-minus-circle"></i>
        </button>
      </td>
    </tr>

    <tr style="background-color:#F9E79F;">
      <th scope="row justify-content-center">2</th>
      <td>Mata bor</td>
      <td>Tapping</td>
      <td>8mm</td>
      <td>Tungsten CA</td>
      <td>25</td>
      <td>
        <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Qty">
            <i class="fas fa-plus-circle"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Customer">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Customer">
            <i class="fas fa-edit"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Customer">
            <i class="fas fa-minus-circle"></i>
        </button>
      </td>
    </tr>

    <tr>
      <th scope="row justify-content-center">1</th>
      <td>Mata bor</td>
      <td>Tapping</td>
      <td>8mm</td>
      <td>Tungsten CA</td>
      <td>25</td>
      <td>
        <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Qty">
            <i class="fas fa-plus-circle"></i>
        </button>

        <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Detail Customer">
            <i class="fa-solid fa-eye"></i>
        </button>

        <button class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Customer">
            <i class="fas fa-edit"></i>
        </button>

        <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Customer">
            <i class="fas fa-minus-circle"></i>
        </button>
      </td>
    </tr>

  </tbody>

</table>