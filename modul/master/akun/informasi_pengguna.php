<style>
input[type="file"] {
    display: none;
}
    .custom-file-upload {
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 100%;
}

.outer {
  width: 100% !important;
  height: 100% !important;
  max-width: 200px !important; /* any size */
  max-height: 200px !important; /* any size */
  margin: auto;
  border-radius: 100%;
  position: relative;
  }
  
.inner {
  width: 150px;
  height: 150px;
  border-radius: 100%;
  position: absolute;
  bottom: -100px;
  right: -35px;
}
</style>
<script>
    $(document).ready(function(){
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            });
        });
</script>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xl-10">

                <form action="" method="post" enctype="multipart/form-data" >
                    <h1 class="dash-title">
                        <div class="outer">
                            <img src="https://divedigital.id/wp-content/uploads/2022/07/10-Blank-Profile-Picture-with-Hat.jpg" class="rounded-circle img-thumbnail" alt="">
                            <div class="inner">
                                <label for="file_upload_foto_profile" class="custom-file-upload btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Ubah Foto">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </label>
                            </div>
                        </div>
                    </h1>

                    <input id="file_upload_foto_profile" type="file" name="name_foto_profile">

                    <h3 class="text-success">
                        Docomo Z5
                        <h1>
                            MASTER USER
                        </h1>
                    </h3>
                </form>

            </div>
        </div>
    </div>
</main>