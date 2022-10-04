<!-- 
    Program ini tidak berlisensi.
    di design dan dibuat untuk memenuhi syarat kelulusan di president university


    Nama    : Izaac Reinhard Latuwael
    NIM     : 012201605036
    Faculty : Computer Science
    Major   : Information System
    Batch   : 2016
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../asset/image/icon_tab.png">
    <title>IMS - Login System</title>
    <!-- Jquery Library -->
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Bootstrap 5 CSS Framework -->
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="../../asset/js/login_form_call.js"></script>
    <script type="text/javascript" src="../../asset/js/notifikasi_sesi_login.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }
    </style>

    <script type="text/javascript">
        $(document).ready(function(){
          // Modul Login
            load_form_login();
            
            // Pilih ke form registrasi ketika registrasi di klik
            $("#id_login_content").on("click","#id_direct_form_register",function(){
                call_register_form();
            });
            // dari form registrasi ke form login
            $("#id_login_content").on("click","#id_direct_form_login",function(){
                load_form_login();
            });
            // kasus pada login_form.php
            // jika dipilih master user maka login berubah
            // jika dipilih pembelian maka akan tertera info dibawah text field dan seterusnya
            $("#id_login_content").on("change","#id_select_pilih_login",function(){
              var masterUser = $(this).val();
              if (masterUser == "MASTER") {
                notifikasi_super_user();
                call_master_login();
              }else if(masterUser == "PEMBELIAN"){
                document.getElementById("id_login_sebagai_form_login").innerHTML = "PEMBELIAN";
              }else if(masterUser == "ENGINEERING"){
                document.getElementById("id_login_sebagai_form_login").innerHTML = "ENGINEERING";
              }else if(masterUser == "GUDANG"){
                document.getElementById("id_login_sebagai_form_login").innerHTML = "GUDANG";
              }else if(masterUser == "PRODUKSI"){
                document.getElementById("id_login_sebagai_form_login").innerHTML = "PRODUKSI";
              }
            });
            // kasus pada form register yaitu register_form.php
            $("#id_login_content").on("change","#id_pilih_login_form_register",function(){
              var registerUser = $(this).val();
              if (registerUser == "PEMBELIAN") {
                document.getElementById("id_daftar_sebagai_form_register").innerHTML = "PEMBELIAN";
              }else if(registerUser == "ENGINEERING"){
                document.getElementById("id_daftar_sebagai_form_register").innerHTML = "ENGINEERING";
              }else if(registerUser == "GUDANG"){
                document.getElementById("id_daftar_sebagai_form_register").innerHTML = "GUDANG";
              }else if(registerUser == "PRODUKSI"){
                document.getElementById("id_daftar_sebagai_form_register").innerHTML = "PRODUKSI";
              }
            });
            // dari master login ke login utama
            $("#id_login_content").on("click","#id_kembali_ke_home",function(){
              load_form_login();
            });
            // akhir dari modul login
        });
    </script>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="../../asset/image/cover_3.gif"
                class="img-fluid" alt="Sample image">
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form>

                <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </button>
                </div> -->
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">INVENTORY MANAGEMENT SYSTEMS</p>
                </div>

                <div class="class_login_content" id="id_login_content">
                    <!-- Panggil Login content via jquery -->
                </div>
                
                <!-- Checkbox -->
                <!-- <div class="d-flex justify-content-between align-items-center">
                  
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div> -->
      
                <!-- <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="button" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Tidak mempunyai akun? <a href="#!"
                      class="link-success">Daftar disini</a></p>
                </div> -->
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2022. [Company Name] | [Developer ID] | [Developer Name]
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <!-- <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div> -->
          <!-- Right -->
        </div>
      </section>
</body>
</html>