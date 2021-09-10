<?php
session_start();

// ketika user sudah login maka
if(isset($_SESSION['user_level']) === 'admin'){
    header('Location: role_admin/index.php');
} elseif(isset($_SESSION['user_level']) === 'member') {
    header('Location: role_member/index.php');
}

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Login</title>
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <style>
        .alert {
            margin-bottom: 0 !important;
        }
        .input-group-addon {
            background-color: #1f1f95;
            color: #fff;
        }
        .input-group-addon i {
            color: #fff;
        }
    </style>
    <!-- Library CSS -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>

<body>
    <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger' role='alert'>Username dan Password tidak sesuai !</div>";
            } elseif($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-success' role='alert'>Anda berhasil logout</div>"; 
            } elseif($_GET['pesan'] == "belum_login") {
                echo "<div class='alert alert-danger' role='alert'>Silahkan login terlebih dahulu!</div>";
            } else {
                echo '';
            }
        }
    ?>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-7 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-5 white">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        

                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <a href="index.php"><img src="img/logo/Artatix2.png" alt="logo" width="100%" height="60" class="mb-4 logo_login "></a>
                                <p class="text-muted mb-4 text-center">Sudah punya akun ? silahkan login untuk melanjutkan</p>

                                <form action="page_login_vl.php" method="post">

                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" name="user_email" placeholder="Email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group">
                                            <input id="inputPassword" type="password" name="user_password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                            <span class="input-group-addon" id="eye-pass"><i class="fa fa-eye"></i></span>
                                        </div>
                                    </div>
                                    <a href="page_lupapass.php" class="text-seondary">
                                        <p for="customCheck1" class="text-secondary">Lupa password ?</p>
                                    </a>

                                    <button type="submit" class="genric-btn primary rounded btn-block  mb-2 rounded-pill shadow-md">Masuk</button>

                                    <div class="text-center  justify-content-between mt-4">
                                        atau login melalui
                                        <div class="col sosmed_login">
                                            <a href="#" class="fb ">
                                                <i class="fa fa-facebook fa-fw fa-login"></i>
                                            </a>
                                            <?php
                                            include 'google_config.php';

                                            $authUrl = $gclient->createAuthUrl();
                                            echo '<a href="'.$authUrl.'" class="google">
                                                    <i class="fa fa-google fa-fw fa-login"></i>
                                                </a>';
                                            ?>
                                        </div>
                                    </div>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Belum punya akun ? daftar <a href="page_register.php">disini</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>



    <script>
        $(document).ready(function(){
            $('#eye-pass').click(function(e){
                console.log(e);
                if($('#inputPassword').attr("type") == "password"){
                    $('#inputPassword').attr('type', 'text');
                    $('#eye-pass i').addClass( "fa-eye-slash" );
                    $('#eye-pass i').removeClass( "fa-eye" );
                } elseif($('#inputPassword').attr("type") == "text"){
                    $('#inputPassword').attr('type', 'password');
                    $('#eye-pass i').addClass( "fa-eye" );
                    $('#eye-pass i').addClass( "fa-eye-slash" );
                }
            });
        });
    </script>

    <!-- Library Script -->
    <?php
    include "bundle_script_enduser.php";
    ?>
</body>

</html>