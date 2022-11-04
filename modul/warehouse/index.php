<!doctype html>
<html lang="en">
<head>
    <!-- Halaman utama Admin dashboard Gudang -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../../asset/css/spur.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../../asset/js/chart-js-config.js"></script>
    <script src="../../asset/js/panggil_form_gudang.js"></script>
    <script src="../../asset/js/toastr.js"></script>
    <link rel="stylesheet" href="../../asset/css/toastr.css">
    <script src="../../asset/js/toastr_notifikasi_master.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../asset/js/swal2_notifikasi_master.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>IMS - Warehouse</title>
    <style>

    </style>
</head>

<body>

    <script type="text/javascript">
        $(document).ready(function(){

            // Testing Area
            //==================================



            //=================================
            // end testing area
            

            $("#id_navbar_menu_gudang").on("click","#id_beranda_home_gudang",function(){
                load_main_menu_gudang();
            });

            $("#id_navbar_menu_gudang").on("click","#id_list_barang_home_gudang",function(){
                load_list_barang_gudang();
            });

            $("#id_navbar_menu_gudang").on("click","#id_list_pic_gudang_home_gudang",function(){
                load_list_pic();
            });


            
        });
    </script>

    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#">
                    <img src="https://divedigital.id/wp-content/uploads/2022/07/10-Blank-Profile-Picture-with-Hat.jpg" alt="" width="100" height="100" class="rounded-circle">
                </a>
            </header>
            <div>

                <a href="">
                    <h6 class="text-center text-success">GUDANG</h6>
                </a>

                <a href="">
                    <h5 class="text-center">Docomo Z5</h5>
                </a>
                
                <a href="">
                    <hr class="bg-primary">
                </a>
            </div>
            <nav class="dash-nav-list" id="id_navbar_menu_gudang">

                <a href="#" class="dash-nav-item" id="id_beranda_home_gudang">
                    <i class="fas fa-home"></i>Beranda
                </a>

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-warehouse"></i> Gudang </a>
                    <div class="dash-nav-dropdown-menu">

                        <a href="#" class="dash-nav-dropdown-item" id="id_list_barang_home_gudang">
                            <i class="fas fa-boxes"></i>
                            &nbsp;
                            Stock Barang
                        </a>

                        <a href="#" class="dash-nav-dropdown-item" id="id_list_pic_gudang_home_gudang">
                            <i class="fas fa-user"></i>
                            &nbsp;
                            PIC
                        </a>

                        <div class="dash-nav-dropdown">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">
                                <i class="fas fa-exchange-alt"></i>
                                &nbsp;
                                Transfer
                            </a>

                            <div class="dash-nav-dropdown-menu">
                                <a href="#" class="dash-nav-dropdown-item" id="id_transfer_barang_home_master">
                                    <i class="fas fa-sign-out-alt"></i>
                                    &nbsp;
                                    Keluar
                                </a>
                            </div>
                        </div>

                        <div class="dash-nav-dropdown">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">
                                <i class="fas fa-clipboard-list"></i>
                                &nbsp;
                                Riwayat
                            </a>
                            <div class="dash-nav-dropdown-menu">
                                <a href="#" class="dash-nav-dropdown-item" id="id_riwayat_masuk_home_master">
                                    <i class="fas fa-sign-in-alt"></i>
                                    &nbsp;
                                    Masuk
                                </a>
                                <a href="#" class="dash-nav-dropdown-item" id="id_riwayat_keluar_home_master">
                                    <i class="fas fa-sign-out-alt"></i>
                                    &nbsp;
                                    Keluar
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-people-carry"></i>Produksi</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="login.html" class="dash-nav-dropdown-item">Log in</a>
                        <a href="signup.html" class="dash-nav-dropdown-item">Sign up</a>
                    </div>
                </div> -->

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-question-circle"></i> Informasi </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="#" class="dash-nav-dropdown-item" id="id_info_home_master">
                            <i class="fas fa-info-circle"></i>
                            &nbsp;&nbsp;
                            IMS v1.0
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <!-- Start Partition -->
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>

                <div class="tools">

                    <a href="https://github.com/mr-reinhard" 
                    target="_blank"
                    data-placement="top" 
                    class="tools-item" 
                    title="Github Reinhard">
                        <i class="fab fa-github"></i>
                    </a>

                    <a href="#!" class="tools-item" title="Pemberitahuan">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>

                    <div class="dropdown tools-item">

                        <a href="#" class=""
                        id="dropdownMenu1" 
                        data-toggle="dropdown"
                        aria-haspopup="true" 
                        aria-expanded="false"
                        title="Akun Saya">
                            <i class="fas fa-user"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1" id="id_menu_setting_akun_home_master">

                            <a class="dropdown-item" href="#" id="id_pengaturan_akun_home_master">
                                <i class="fas fa-cog"></i> Pengaturan
                            </a>

                            <a href="#">
                                <hr class="dropwon-divider">
                            </a>

                            <a class="dropdown-item" href="#!">
                                <!-- href="login.html" -->
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>

                    </div>
                </div>      
            </header>

            <div id="main_content_gudang">

            </div>

        </div>
        <!-- End partition -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../../asset/js/spur.js"></script>
</body>

</html>