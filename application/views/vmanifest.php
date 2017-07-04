<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Situs Resmi Bus Madu Kismo</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link href="<?= base_url(); ?>assets/images/bus_icon.png" rel="Shortcut Icon"/>


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/3.3.7/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/4.7.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/chosen/1.6.2/chosen.css" />		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" />

		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.min.css" />


		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-rtl.min.css" />
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" /> -->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->		

		<!-- ace settings handler -->
		<script src="<?= base_url(); ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?= base_url(); ?>assets/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="<?= base_url(); ?>assets/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- my custom styles -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/my-style.css" />
		<style type="text/css">
			.busseat{
				display: table-cell;
				width: 25px;				
			}
			.seat-wrapper{
				border: 1px solid #e3e3e3;
				background-color: #f5f5f5;
			    padding: 5px 10px;
			    margin: 10px 0;
			}
			.seat-legend{
				padding-right: 10px;
				margin-bottom: 5px;
				display: table-cell;
			}
			.seat-legend .legend-label{
				padding-left: 5px;
				padding-right: 20px;
				margin-bottom: 5px;				
				display: table-cell;
			}
			.inline-block{
				display: inline-block;
				/*border: 1px solid;*/
			}
			.step-pane h4 {
				font-size: 110%;
			    font-weight: 700;
			}
			.available, .booked{
				cursor: pointer;
			}
			.borderless-text{
				border-left: none;
				border-top: none;
				border-right: none;
			}
			.form-inline > input, .form-inline > select{
				margin-top: 5px;
			}
			.ikhtisar-header{
				font-weight: 700;				
				background-color: #E4E6E9;
			}
			.ikhtisar-header, .ikhtisar-data{
				margin-bottom: 5px;
				padding-top: 5px;
				padding-bottom: 5px;
			}
		</style>
	</head>

	<body class="no-skin">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#"><i class="fa fa-bus"></i>
							Madu Kismo</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			  
			  <ul class="nav navbar-nav navbar-right">
				<li class="">
							<a href="#">
								<i class="ace-icon fa fa-home"></i>
								<span class="">Beranda</span>
							</a>
						</li>
						<li class="">
							<a href="#">
								<i class="ace-icon fa fa-question-circle-o"></i>
								<span class="">Cara Pemesanan</span>
							</a>
						</li>
						<li class="">
							<a href="#">
								<i class="ace-icon fa fa-binoculars"></i>
								<span class="">Cek Pesanan</span>
							</a>
						</li>
						<li class="">
							<a href="#">
								<i class="ace-icon fa fa-check-square-o"></i>
								<span class="">Konfirmasi Pembayaran</span>
							</a>
						</li>						
						<li class="dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle" title="<?= $this->session->name; ?>">
								<i class="ace-icon fa fa-user"></i>
								<span class="">Login/Daftar</span>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Pengaturan
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?= base_url('autentikasi/logout'); ?>"> <!-- logout di route ke autentikasi/logout -->
										<i class="ace-icon fa fa-power-off"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>
						<!-- User information -->
						<!--<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle" title="<?= $this->session->name; ?>">
								<img class="nav-user-photo" src="<?= base_url(); ?>assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat datang,</small>
									<?= $this->session->name; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Pengaturan
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?= base_url('autentikasi/logout'); ?>"> <!-- logout di route ke autentikasi/logout ->
										<i class="ace-icon fa fa-power-off"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li> -->
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		

		<div class="main-container container" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12" id="cont">
							
								<!-- PAGE CONTENT BEGINS -->								

								<div class="well">
									Segera selesaikan pesanan anda sebelum: 
									<h1><b class="red"><?= $this->session->expired ?></b></h1>
								</div>								
								
								
								<div id="fuelux-wizard-container">
									<div>
										<ul class="steps">
											<li data-step="1" class="active">
												<span class="step">1</span>
												<span class="title">Pilih Kursi</span>
											</li>

											<li data-step="2">
												<span class="step">2</span>
												<span class="title">Manifest</span>
											</li>

											<li data-step="3">
												<span class="step">3</span>
												<span class="title">Selesai</span>
											</li>
										</ul>
									</div>

									<hr />

									<div class="step-content pos-rel">
										<div class="step-pane active" data-step="1">											
											<p>Untuk membatalkan, klik kembali kursi yang telah dipilih. </p>
											<div class="col-xs-12 col-sm-6">
												<div class="seat-wrapper">
													<div style="display: table-row;">
														<div class="busshow driver " title="driver " data-seat-number="driver"><img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_driver_bosbis.png" class="img-responsive"></div>
														<div class="busseat available" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat available" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat available" title="seat 12" data-seat-number="12">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat available" title="seat 16" data-seat-number="16">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
													</div>
													<div style="display: table-row;">
														<div class="busseat" title="driver " data-seat-number="driver"></div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
													</div>
													<div style="display: table-row;">
														<div class="busseat" title="driver " data-seat-number="driver"><canvas width="26px" height="27px" class="img-responsive"></canvas></div>
														<div class="busseat" title="driver " data-seat-number="driver"></div>
													</div>
													<div style="display: table-row;">
														<div class="busseat" title="driver " data-seat-number="driver"></div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
													</div>											
													<div style="display: table-row;">
														<div class="busseat" title="driver " data-seat-number="driver"></div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 4" data-seat-number="4">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
														<div class="busseat" title="seat 8" data-seat-number="8">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-responsive sold">
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<h4>Tempat Keberangkatan:</h4>
												<select class="chosen-select form-control" id="select-cpoint" name="select-cpoint" data-placeholder="Pilih tempat keberangkatan">
													<option></option>
													<option value="SRG" data-subtext="Banten">Serang</option>
													<option value="TGRS" data-subtext="Banten">Tangerang Selatan</option>
													<option value="MER" data-subtext="Banten">Merak</option>
													<option value="CLG" data-subtext="Banten">Cilegon</option>
													<option value="TGR" data-subtext="Banten">Tangerang</option>	
												</select>
												<h4>Keterangan Kursi:</h4>
												<div class="col-xs-12 col-sm-12">
													<div class="pull-left seat-legend">
														<div class="busseat available">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png" class="img-respionsive">
														</div>														
														<div class="seat-legend legend-label">Tersedia</div>
													</div>
													<div class="pull-left seat-legend">
														<div class="busseat sold">
															<img src="https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_grey_bosbis.png" class="img-respionsive">
														</div>
														<div class="seat-legend legend-label">Tidak Tersedia</div>
													</div>
												</div>
												<div>Jumlah Kursi dipesan: <b id="booked_seats_sum"><?= $this->session->jml_penumpang; ?></b></div>
												<div>Nomor Kursi: <b id="booked_seats_num"></b></div>
											</div>
										</div>

										<div class="step-pane" data-step="2">
											<div class="row">													
												<div class="col-xs-12">
													<div class="widget-box transparent">
														<div class="widget-header">
															<h4 class="widget-title black">
																<i class="ace-icon fa fa-user"></i>
																<span>Data Pemesan</span>
															</h4>
														</div>

														<div class="widget-body">
															<div class="widget-main no-padding-left no-padding-right">
																<div class="form-inline">
																	<input type="text" class="form-control" placeholder="Nama Lengkap" />
																	<input type="number" class="form-control" placeholder=" No. KTP" />
																	<input type="tel" class="form-control" placeholder=" No. Telp" />
																	<input type="email" class="form-control" placeholder=" Email" />																	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-xs-12">
													<div class="widget-box transparent">
														<div class="widget-header">
															<h4 class="widget-title black">
																<i class="ace-icon fa fa-users"></i>
																<span>Detil Penumpang</span>
															</h4>
														</div>

														<div class="widget-body">
															<div class="widget-main no-padding-left no-padding-right">
																<span>Mohon diisi dengan data yang sebenar-benarnya.</span>
																<div class="space-12"></div>
																<div>
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"> Pemesan sebagai penumpang</span>
																	</label>
																</div>	

																<div class="row">												
																	<div class="col-xs-12">
																		<div class="widget-box transparent">
																			<div class="widget-header">
																				<h6 class="widget-title">
																					<i class="ace-icon fa fa-user"></i>
																					<span>Penumpang Kursi 4</span>
																				</h6>
																			</div>

																			<div class="widget-body">
																				<div class="widget-main no-padding-left no-padding-right">
																					<div class="form-inline">
																						<input type="text" class="form-control" placeholder=" Nama Lengkap" />
																						<select class="form-control" id="select-gender" name="select-gender" data-placeholder="Jenis Kelamin">
																							<option value="L">Laki-Laki</option>
																							<option value="P">Perempuan</option>
																						</select>
																						<input type="text" class="form-control" placeholder="Tgl. Lahir" />
																						<input type="text" class="form-control" placeholder="No. Telp" />
																						<input type="text" class="form-control" placeholder="Alamat" />
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
											</div>
										</div>

										<div class="step-pane" data-step="3">
											<div class="row">	
												<div class="col-md-6 col-md-offset-3">
													<div class="center">
														<h3 class="green">Terima kasih!</h3>
														Pesanan anda telah tersimpan dalam sistem kami. Segera lakukan pembayaran dan konfirmasi pembayaran dalam batas waktu yang telah ditentukan. Pesanan yang tidak diselesaikan dalam batas waktu yang telah ditentukan akan dibatalkan secara otomatis oleh sistem.
													</div>
												</div>
											</div>
											<div class="space-12"></div>
											<div class="row">												
												<div class="col-xs-12">
													<div class="widget-box transparent">
														<div class="widget-header">
															<h6 class="widget-title">
																<i class="ace-icon fa fa-user"></i>
																<span>Ikhtisar Pesanan</span>
															</h6>
														</div>

														<div class="widget-body">
															<div class="widget-main no-padding-left no-padding-right">
																<div class="container">
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Kode Booking</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">201706210001</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Tgl. Booking</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">2017-06-21</div>			
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Jurusan</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Jakarta - Cepu(Blora)</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Berangkat Dari</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Terminal Pulogebang</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Berangkat</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">2017-06-21 08:00:00</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Tiba</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">2017-06-21 18:00:00</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Jml. Penumpang</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">3</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">No. Kursi</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">4,8,12</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Harga Tiket</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Rp. 400.000</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Total Harga</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Rp. 1.200.000</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Biaya Administrasi</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Rp. 1.000</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5 col-sm-3 ikhtisar-header">Jumlah yang Harus Dibayar</div>
																		<div class="col-xs-7 col-sm-9 ikhtisar-data">Rp. 1.201.000</div>
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

								<hr />
								<div class="wizard-actions">
									<button class="btn btn-prev">
										<i class="ace-icon fa fa-arrow-left"></i>
										Sebelumnya
									</button>

									<button class="btn btn-success btn-next" data-last="Finish">
										Selanjutnya
										<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?= base_url(); ?>assets/jquery/jquery-3.1.1.min.js"></script>
<!-- 		<script src="<?= base_url(); ?>assets/jquery/jquery-migrate-3.0.0.min.js"></script>
 -->
		<!-- <![endif]-->

		<!--[if IE]>
		<script src="<?= base_url(); ?>assets/jquery/jquery-1.12.4.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			//if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>")
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url(); ?>assets/jquery/jquery.mobile-1.4.5.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url(); ?>assets/bootstrap/3.3.7/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?= base_url(); ?>assets/chosen/1.6.2/chosen.jquery.min.js"></script>		
		<script src="<?= base_url(); ?>assets/js/wizard.min.js"></script>		
		<script src="<?= base_url(); ?>assets/js/bootbox.js"></script>

		<!-- ace scripts -->
		<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>
		

		<script>
		jQuery(function($) {
			$('.chosen-select').chosen(); 
			if(!ace.vars['touch']) {
					
				//resize the chosen on window resize
		
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				}).trigger('resize.chosen');
			}

			$('#fuelux-wizard').ace_wizard().on('change', function(e, info){
				//if(info.step == 1 && !$('#form-1').valid()) return false;
			}).on('finished', function(){
				alert('Success!');
			}).on('stepclick', function(){
				//return false;//if you don't want users click on backward steps
			});

			$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					// if(info.step == 1 && $validation) {
					// 	if(!$('#validation-form').valid()) e.preventDefault();
					// }
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});

				var booked_seats = [];
				function sortNumber(a,b) {
				    return a - b;
				}

				$(document).on("click",".available",function(event){
					$(this).html("<img src='https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_yellow_bosbis.png' class='img-responsive' />").removeClass('available').addClass('booked');
					var seat_data = parseInt($(this).data('seat-number'));
					booked_seats.push(seat_data);
					$('#booked_seats_num').html(booked_seats.sort(sortNumber).toString());

				});

				$(document).on("click",".booked",function(event){
					$(this).html("<img src='https://d374lxn0zq4jnw.cloudfront.net/images/kursi_icon_white_bosbis.png' class='img-responsive' />").removeClass('booked').addClass('available');
					var seat_data = parseInt($(this).data('seat-number'));
					booked_seats.splice($.inArray(seat_data, booked_seats), 1);
					$('#booked_seats_num').html(booked_seats.sort(sortNumber).toString());
				});

			});
		</script>
	</body>
</html>
