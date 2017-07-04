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
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar h-navbar navbar-default navbar-fixed-top navbar-collapse">
			<div class="navbar-container container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-right collapsed" id="menu-toggler" data-toggle="collapse" data-target="#navbar-menu">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?= base_url() ?>" class="navbar-brand">
						<small>
							<i class="fa fa-bus"></i>
							Madu Kismo
						</small>
					</a>
				</div>

				<div id="navbar-menu" class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
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
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div> <!-- #navbar -->

		<div class="main-container container" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">						