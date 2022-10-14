<style>
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
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: absolute;
  bottom: 10px;
  right: 13px;
}

.btn{
border-radius: 100%;
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
                <h1 class="dash-title">
                    <div class="outer">
                        <img src="https://divedigital.id/wp-content/uploads/2022/07/10-Blank-Profile-Picture-with-Hat.jpg" class="rounded-circle img-thumbnail" alt="">
                        <div class="inner">
                            <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Rubah Foto">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </div>
                    </div>
                    
                </h1>

                <h3 class="text-success">
                    Docomo Z5
                    <h1>
                        MASTER USER
                    </h1>
                </h3>
            </div>
        </div>
    </div>
</main>