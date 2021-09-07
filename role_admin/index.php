<?php
include "auth.php";

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Dashboard</title>
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
            include "../role_member/navbar.php";
            ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded  pcoded-trigger">
                                    <a href="index.php">
                                        <span class="pcoded-micon active"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Management</div>
                            <ul class="pcoded-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="Active">
                                            <a href="event.php">
                                                <span class="pcoded-mtext active">Semua</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Event</span>
                                            </a>
                                        </li>
                                        <!-- <li class=" ">
                                            <a href="report_peserta.php">
                                                <span class="pcoded-mtext">Report Revenue</span>
                                            </a>
                                        </li> -->

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <!-- <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext">Withdraw</span>
                                    </a> -->
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Status</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded">
                                        <a href="user.php">
                                            <span class="pcoded-micon "><i class="feather icon-user"></i></span>
                                            <span class="pcoded-mtext">Users</span>
                                        </a>
                                    </li>
                                </ul>
                            </ul>

                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">

                                            <!-- statustic-card start -->
                                            <div class="col-xl-3 col-md-6">
                                                <?php
                                                $dtuser_needverification = mysqli_query($konek, "SELECT*FROM tbl_user WHERE uservl_status='0'");
                                                $count_dt = mysqli_num_rows($dtuser_needverification);
                                                ?>
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow f-w-600"><?= $count_dt ?> User</h4>
                                                                <span class="text-muted ">Need Validation</span>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-user-plus f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <a href="user_verification.php">
                                                                    <h6 class="text-white m-b-0">Check</h6>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-arrow-right text-white f-16"></i>
                                                            </div></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <?php
                                                $dtuser_event = mysqli_query($konek, "SELECT*FROM tbl_event WHERE event_status='0' and event_jenis='0'");
                                                $count_event = mysqli_num_rows($dtuser_event);
                                                ?>
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green f-w-600"><?= $count_event ?> Event</h4>
                                                                <span class="text-muted ">New Event</span>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-user-plus f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <a href="event.php">
                                                                    <h6 class="text-white m-b-0">Check</h6>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-arrow-right text-white f-16"></i>
                                                            </div></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">

                                            </div>
                                            <!-- <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-blue text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Orders</p>
                                                                <h4 class="m-b-0">$5,242</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- statustic-card start -->

                                            <!-- statustic-card start 
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Monthly View</h5>
                                                            <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block-big">
                                                        <div id="monthly-graph" style="height:250px"></div>
                                                    </div>
                                                </div>
                                            </div>

                                           statustic-card start -->


                                            <!-- <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Total Leads</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i> 18% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>76.12%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>16.40%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>4.56%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="tot-lead" height="150"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Total Vendors</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i> 24% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>68.52%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>28.90%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>13.50%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="tot-vendor" height="150"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Invoice Generate</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i> 20% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>68.52%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>28.90%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>13.50%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="invoice-gen" height="150"></canvas>
                                                </div>
                                            </div> -->


                                            <!-- ticket and update start -->
                                            <!-- <div class="col-xl-6 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Recent Tickets</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Status</th>
                                                                        <th>Subject</th>
                                                                        <th>Department</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Website down for one week</td>
                                                                        <td>Support</td>
                                                                        <td>Today 2:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-danger">closed</label></td>
                                                                        <td>Authorizations keys</td>
                                                                        <td>Support</td>
                                                                        <td>27, Aug</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-danger">closed</label></td>
                                                                        <td>Authorizations keys</td>
                                                                        <td>Support</td>
                                                                        <td>27, Aug</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-right m-r-20">
                                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>Latest Updates</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">2 hrs ago</p>
                                                                    <i class="feather icon-twitter bg-info update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+ 1652 Followers</h6>
                                                                    <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                                    <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+ 5 New Products were added!</h6>
                                                                    <p class="text-muted m-b-0">Congratulations!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                                    <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Database backup completed!</h6>
                                                                    <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-0">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                                    <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+2 Friend Requests</h6>
                                                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tr>
                                                                                <td class="b-none">
                                                                                    <a href="#!" class="align-middle">
                                                                                        <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>Jeny William</h6>
                                                                                            <p class="text-muted m-b-0">Graphic Designer</p>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="b-none">
                                                                                    <a href="#!" class="align-middle">
                                                                                        <img src="..\files\assets\images\avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>John Deo</h6>
                                                                                            <p class="text-muted m-b-0">Web Designer</p>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- ticket and update end -->

                                            <!-- latest activity end -->
                                            <!-- <div class="col-xl-8 col-md-12">
                                                <div class="card latest-activity-card">
                                                    <div class="card-header">
                                                        <h5>Latest Activity</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">just now</p>
                                                                    <i class="feather icon-sunrise bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>John Deo</h6>
                                                                    <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                                                                    <img src="..\files\assets\images\mega-menu\01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                                                                    <img src="..\files\assets\images\mega-menu\03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">5 min ago</p>
                                                                    <i class="feather icon-file-text bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Administrator</h6>
                                                                    <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">3 hours ago</p>
                                                                    <i class="feather icon-map-pin bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Jeny William</h6>
                                                                    <p class="text-muted m-b-15">Happy Hour! Free drinks at <span class="text-c-blue">Cafe-Bar all </span>day long!</p>
                                                                    <div id="markers-map" style="height:200px;width:100%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card per-task-card">
                                                    <div class="card-header">
                                                        <h5>Your Tasks</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row per-task-block text-center">
                                                            <div class="col-6">
                                                                <div data-label="45%" class="radial-bar radial-bar-45 radial-bar-lg radial-bar-primary"></div>
                                                                <h6 class="text-muted">Finished</h6>
                                                                <p class="text-muted">642</p>
                                                                <button class="btn btn-primary btn-round btn-sm">Manage</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div data-label="30%" class="radial-bar radial-bar-30 radial-bar-lg radial-bar-primary"></div>
                                                                <h6 class="text-muted">Remaining</h6>
                                                                <p class="text-muted">495</p>
                                                                <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card feed-card">
                                                    <div class="card-header">
                                                        <h5>Upcoming Deadlines</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\01.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New able - Redesign</h6>
                                                                <p class="text-c-pink m-b-0">2 Days Remaining</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\02.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New Admin Dashboard</h6>
                                                                <p class="text-c-pink m-b-0">Proposal in 6 Days</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\03.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">Logo Design</h6>
                                                                <p class="text-c-green m-b-0">10 Days Remaining</p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> -->
                                            <!-- latest activity end -->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Library Scripts -->
    <?php
    include "../bundle_script.php";
    ?>

    </script>
</body>

</html>