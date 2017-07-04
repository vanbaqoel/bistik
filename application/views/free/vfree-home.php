<?php
	$this->load->view("free/vfree-header");
?>

<div class="col-xs-12 col-sm-3">
	<div class="widget-box  widget-color-blue">
		<div class="widget-header">
			<h5 class="widget-title smaller">Jadwal dan Pemesanan</h4>
		</div>

		<div class="widget-body">
			<div class="widget-main">			
				<form action="pemesanan/cari_jadwal" id="frm-cari-jadwal" method="post" >
					<fieldset>
						<div class="form-group">
							<label class="control-label">Tanggal</label>												
							<div class="input-group">
								<input id="dtp-tanggal" class="form-control date-picker" name="dtp-tanggal" type="text" data-date-format="dd-mm-yyyy" readonly />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							</div>
						</div>
							
						<div class="space space-8"></div>
						
						<div class="form-group">
							<label for="asal" class="control-label">Kota Asal</label>
							<div>
								<select class="chosen-select form-control" id="cbo-asal" name="cbo-asal" data-placeholder="Pilih Kota Asal...">
								</select>					
							</div>
						</div>
							
						<div class="space space-8"></div>
						
						<div class="form-group">
							<label for="tujuan" class="control-label">Kota Tujuan</label>
							<div>
								<select class="chosen-select form-control" id="cbo-tujuan" name="cbo-tujuan"  data-placeholder="Pilih Kota Tujuan...">
								</select>
							</div>
						</div>
							
						<div class="space space-8"></div>
							
						<div class="form-group">
							<label for="text-penumpang" class="control-label">Jumlah Penumpang</label>						
							<div class="input-group">
								<input class="form-control" id="txt-penumpang" name="txt-penumpang" type="number" min="1" value="1" />
							</div>
						</div>

						<div class="space space-8"></div>

						<div class="form-group">
							<button class="btn btn-primary btn-block" id="btn-tampilkan" type="submit"> <i class="ace-icon fa fa-search bigger-120"></i> Tampilkan </button>
						</div>							
					</fieldset>											
				</form>
			</div>
		</div>
	</div>
</div>

<div class="hidden-xs col-sm-9 table-bordered">
	Blok untuk konten promo
</div>

<?php
	$this->load->view("free/vfree-footer");
?>