<?php
include "auth.php";
error_reporting(0)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Member | Dashboard</title>
    <!-- Library CSS -->
    <?php
    include "../bundle_css.php";
    ?>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php
            include "navbar.php";
            ?>


            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded pcoded-trigger">
                                    <a href="index.php">
                                        <span class="pcoded-micon "><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Management</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded">
                                    
                                    <a href="event.php">
                                        <span class="pcoded-micon "><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="col-sm-12">
                                    <!-- Alert card start -->

                                    <div class="col-sm-12 col-md-12 col-xl-12">

                                        <!-- Alert card end -->

                                        <div class="page-wrapper">
                                            <?php
                                            $status = mysqli_query($konek, "SELECT*FROM tbl_user where user_email='$session_useremail'");
                                            if ($status == false) {

                                                die("Terjadi Kesalahan : " . mysqli_error($konek));
                                            }
                                            while ($user = mysqli_fetch_assoc($status)) {

                                                $stat =  $user['uservl_status'];
                                            // }

                                                if ($stat == 0) {
                                                    echo ' <div class="page-header">

                                                        <div class="row align-items-end">
                                                            <div class="col-lg-12">
                                                                <div class="card text-black">
                                                                    <div class="card-block primary">
                                                                        <div class="row align-items-left">
                                                                            <div class="col-lg-9">
                                                                                <div class="page-header-title ">
                                                                                    <div class="ion-alert fa-lg text-primary">

                                                                                        &nbsp;<Span>Kamu belum melakukan verifikasi akun</SPAN>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <a href="user_profil.php?id='.$user["user_id"].'"><button class="btn  BTN-SM btn-primary">Verifikasi Sekarang</button></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>




                                            <div class="row align-items-end">

                                                <div class="col-lg-8">
                                                    <div class="page-header-title">
                                                        <div class="d-inline">
                                                            <h4>Home</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="page-header-breadcrumb">
                                                        <ul class="breadcrumb-title">
                                                            <li class="breadcrumb-item">
                                                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="page-body ">

                                                <div class="row align-items-end">
                                                    <div class="col-xl-4 col-md-6">
                                                        <a href="#">
                                                            <div class="card text-black">
                                                                <div class="card-block">
                                                                    <div class="row align-items-center">
                                                                        <div class="col">
                                                                            <p class="m-b-5">Event Aktif</p>
                                                                            <?php
                                                                            $dtuser_event = mysqli_query($konek, "SELECT*FROM tbl_event WHERE event_status='1' ");
                                                                            $count_event = mysqli_num_rows($dtuser_event);
                                                                            ?>
                                                                            <h4 class="m-b-0"><?= $count_event ?></h4>
                                                                        </div>
                                                                        <div class="col col-auto text-right">
                                                                            <i class="feather icon-credit-card f-50 "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <a href="#">
                                                            <div class="card text-black">
                                                                <div class="card-block">
                                                                    <div class="row align-items-center">
                                                                        <div class="col">
                                                                            <p class="m-b-5">Total Tiket Terjual</p>
                                                                            <h4 class="m-b-0">0</h4>
                                                                        </div>
                                                                        <div class="col col-auto text-right">
                                                                            <i class="fa fa-ticket f-50 "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <a href="#">
                                                            <div class="card text-black">
                                                                <div class="card-block">
                                                                    <div class="row align-items-center">
                                                                        <div class="col">
                                                                            <p class="m-b-5">Total Penjualan</p>
                                                                            <h4 class="m-b-0">RP 0</h4>
                                                                        </div>
                                                                        <div class="col col-auto text-right">
                                                                            <i class="icofont icofont-money-bag f-50 "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>






                                    </div>
                                    <!-- Library Scripts -->
                                    <?php
                                    include "../bundle_script.php";
                                    ?>

                                    </script>
</body>

</html>