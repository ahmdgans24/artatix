<?php
include "auth.php";

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
											<div class="col-sm-12">
												<!-- Basic Button table start -->
												<div class="card">
													<div class="col-md-12">

													</div>
													<div class="card-block">
														<div class="dt-responsive table-responsive">
															<table id="simpletable" class="table table-striped table-bordered nowrap">
																<?php
																include "dt_user.php";
																?>

															</table>
														</div>
													</div>
												</div>
												<!-- Alternative Pagination table end -->
											</div>
										</div>
										<!-- Basic Button table end -->

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