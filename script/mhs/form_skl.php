<?php include 'header_mhs.php' ?>
<?php include 'sidebar_mhs.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Form Pengajuan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Pengajuan Surat Keterangan Lulus</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Perhatian! Penulisan Instansi tujuan harus jelas. </em></div>
							<div>Isi form dibawah ini secara lengkap.</div>
							<div>
								<div class="panel-body">
									<form class="form-horizontal" action="" method="post">
										<fieldset>
											<div class="form-group">
												<label class="col-md-3 control-label" for="nama">Nama</label>
												<div class="col-md-6">
													<input id="nama" name="nama" type="text" placeholder="Nama" class="form-control">
												</div>
											</div>
										
											<div class="form-group">
												<label class="col-md-3 control-label" for="nim">NIM</label>
												<div class="col-md-6">
													<input id="nim" name="nim" type="text" placeholder="NIM" class="form-control">
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label">Program Studi</label>
												<div class="col-md-6">
												<select class="form-control">
													<option>401 - Bimbingan Konseling Islam</option>
													<option>402 - Komunikasi dan Penyiaran Islam</option>
													<option>403 - Manajemen Dakwah</option>
													<option>404 - Pengembangan Masyarakat Islam</option>
													<option>405 - Ilmu Komunikasi Jurnalitik</option>
													<option>406 - Ilmu Komunikasi Humas</option>
												</select>
												</div>
											</div>

											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="semester">Semester</label>
												<div class="col-md-6">
													<input id="semester" name="semester" type="text" placeholder="Semester" class="form-control">
												</div>
											</div> -->

											<div class="form-group">
												<label class="col-md-3 control-label" for="tgl_lahir">Tanggal Lahir</label>
												<div class="col-md-6">
													<div class="input-group date">
													    <div class="input-group-addon">
													       	<span class="glyphicon glyphicon-th"></span>
													 	</div>
													    <input placeholder="dd/mm/yyyy" type="text" class="form-control datepicker" name="tgl_lahir">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="alamat">Alamat</label>
												<div class="col-md-6">
													<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Harus Jelas Ex: Jln. Babakan Desa No.1, Cibiru, Pasirbiru Kota Bandung" rows="5"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="telp">Telepon</label>
												<div class="col-md-6">
													<input id="telp" name="telp" type="text" placeholder="Nomor Telepon" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="tgl_lulus">Tanggal Lulus (Munaqosyah)</label>
												<div class="col-md-6">
													<div class="input-group date">
													    <div class="input-group-addon">
													       	<span class="glyphicon glyphicon-th"></span>
													 	</div>
													    <input placeholder="yyyy/mm/dd" type="text" class="form-control datepicker" name="tgl_lulus">
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label" for="jdl_skripsi">Judul Skripsi</label>
												<div class="col-md-6">
													<textarea class="form-control" id="jdl_skripsi" name="jdl_skripsi" placeholder="Judul Skripsi Harus Lengkap dan Jelas" rows="5"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="ipk">Yudisium/IPK</label>
												<div class="col-md-6">
													<input id="ipk" name="ipk" type="text" placeholder="Ex : 4.00" class="form-control">
												</div>
											</div>
											<!-- Form actions -->
											<div class="form-group">
												<div class="col-md-6 widget-right">
													<button type="submit" class="btn btn-primary btn-md pull-right">Submit</button>
												</div>
												<div class="col-md-6 widget-right">
													<button type="submit" class="btn btn-danger btn-md pull-left">Reset</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->

<?php include 'footer_mhs.php' ?>