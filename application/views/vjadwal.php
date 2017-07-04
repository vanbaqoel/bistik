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
		<!--
		<div id="navbar" class="navbar h-navbar navbar-default navbar-fixed-top navbar-collapse">
			<div class="navbar-container container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler navbar-right navbar-collapse collapsed" data-toggle="collapse"  data-target=".navbar-menu">
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

				<nav class="navbar-menu navbar-collapse collapse" role="navigation">
					<ul class="nav ace-nav navbar-right">
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
									<a href="<?= base_url('autentikasi/logout'); ?>"> <!-- logout di route ke autentikasi/logout ->
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
				</nav>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container container" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12" id="cont">
							
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-12 container">
									<div class="row table-bordered">
										<div class="hidden-xs col-xs-6 col-sm-2">
											Operator
										</div>
										<div class="hidden-xs col-xs-6 col-sm-2">
											Keberangkatan
										</div>
										<div class="hidden-xs col-xs-6 col-sm-2">
											Via
										</div>
										<div class="hidden-xs col-xs-6 col-sm-2">
											Kedatangan
										</div>
										<div class="hidden-xs col-xs-6 col-sm-2">
											Harga
										</div>
										<div class="hidden-xs col-xs-6 col-sm-2">
											Operator
										</div>
									</div>
									<?php
										foreach ($datas as $row) {
											$berangkat = new DateTime($tgl_berangkat." ".$row[7]);
											$xp = explode(":", $row[8]);
											$tiba = $berangkat->add(new DateInterval('P0Y0M0DT'.intval($xp[0]).'H'.intval($xp[1]).'M'.intval($xp[2]).'S'));
											echo "												
												<div class='row'>
													<div class='hidden-xs col-xs-6 col-sm-2'>
														<div class=''>
															$row[6]
														</div>
														<div class=''>
															(Seat:$row[10])
														</div>
													</div>
													<div class='hidden-xs col-xs-6 col-sm-2'>
														<div class='text-center'>".
															$tgl_berangkat.
														"</div>
														<div class='bigger-120'>
															$row[7]
														</div>
														<div>
															$row[1]
														</div>
														<div>
															$row[2]
														</div>
													</div>
												</div>";
										}
									?>
										
									</div>
								</div>
								<div class="col-xs-12 widget-container-col" id="widget-container-col-2">
											<div class="widget-box widget-color-blue no-border" id="widget-box-2">
												<div class="widget-body">
													<div class="widget-main no-padding table-responsive">
														<table class="table table-hover">
															<thead class="thin-border-bottom">
																<tr>
																	<th class="text-center">Kelas</th>
																	<th class="text-center">Keberangkatan</th>
																	<th class="text-center">Via</th>
																	<th class="text-center">Kedatangan</th>
																	<th class="text-center">Harga</th>
																	<th></th>
																</tr>
															</thead>

															<tbody class="thin-border-bottom">
															<?php
																// var_dump($datas);
																foreach($datas as $row){
																	$berangkat = new DateTime($tgl_berangkat." ".$row[7]);
																	$xp = explode(":", $row[8]);
																	$tiba = $berangkat->add(new DateInterval('P0Y0M0DT'.intval($xp[0]).'H'.intval($xp[1]).'M'.intval($xp[2]).'S'));
																	echo "<tr>
																	<td class='text-center'>
																		$row[6]<br />
																		(Seat:$row[10])
																	</td>
																	<td class='text-center'>".
																		$tgl_berangkat."<br />
																		<b class='bigger-120'>$row[7]</b><br />
																		<b>$row[1]</b><br />
																		$row[2]
																	</td>
																	<td class='text-center'>$row[5]</td>
																	<td class='text-center'>".
																		$tiba->format('Y-m-d')."<br />
																		<b class='bigger-120'>".$tiba->format('H:i:s')."</b><br />
																		<b>$row[3]</b><br />
																		$row[4]
																	</td>
																	<td class='text-center text-primary'><b>Rp. ".
																	number_format($row[9], 0, ',', '.')."</b></td>
																	<td>
																		<button class='btn btn-primary btn-xs' onclick='location=".'"'.base_url("pemesanan/pesan_tiket/".$row[0]."/".$berangkat->format('Y-m-d H:i:s')."/".$tiba->format('Y-m-d H:i:s')."/".$jml_penumpang).'"'."'>Pesan Sekarang </button>
																	</td>
																</tr>";
																}
															?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div><!-- /.span -->
									
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

		<!-- ace scripts -->
		<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>
		<!-- page specific plugin scripts -->
		<script src="<?= base_url(); ?>assets/chosen/1.6.2/chosen.jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/1.10.13/jquery.dataTables.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script> <!-- Somehow we still need this -->
		<script src="<?= base_url(); ?>assets/dataTables/buttons-1.2.4/dataTables.buttons.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/buttons-1.2.4/buttons.flash.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/buttons-1.2.4/buttons.html5.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/buttons-1.2.4/buttons.print.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/buttons-1.2.4/buttons.colVis.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/select-1.2.0/dataTables.select.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/jszip-2.5.0/jszip.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/pdfmake-0.1.18/pdfmake.min.js"></script>
		<script src="<?= base_url(); ?>assets/dataTables/pdfmake-0.1.18/vfs_fonts.js"></script>
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

			$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			// $('.date-picker').datepicker('setDate', '<?= $tgl_berangkat ?>');
			// $('#select-asal').val('<?= $kota_asal ?>').trigger("chosen:updated");
			// $('#select-tujuan').val('<?= $kota_tujuan ?>').trigger("chosen:updated");
			// $('#text-penumpang').val('<?= $jml_penumpang ?>');
		});
		</script>
	</body>
</html>
