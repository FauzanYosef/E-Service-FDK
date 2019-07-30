<?php include 'header_mhs.php' ?>
<?php include 'sidebar_mhs.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dash_mhs.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Form Pengajuan Surat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Surat Izin Riset Survey/Konsultasi</h1>
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

											<div class="form-group">
												<label class="col-md-3 control-label" for="semester">Semester</label>
												<div class="col-md-6">
													<input id="semester" name="semester" type="text" placeholder="Semester" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="alamat">Alamat</label>
												<div class="col-md-6">
													<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Harus Jelas Ex: Jln. Babakan Desa No.1, Cibiru, Pasirbiru Kota Bandung" rows="5"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="Tujuan_obs">Tujuan Observasi</label>
												<div class="col-md-6">
													<input id="Tujuan_obs" name="Tujuan_obs" type="text" placeholder="Nama Tujuan Observasi Ex: PT Jaya Abadi" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="tmp_observasi">Alamat Observasi</label>
												<div class="col-md-6">
													<textarea class="form-control" id="tmp_observasi" name="tmp_observasi" placeholder="Alamat Instansi Ex:Jl.A.H Nasution No.05, Kota Bandung" rows="5"></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label" for="jdl_masalah">Judul/Topik/Masalah</label>
												<div class="col-md-6">
													<textarea class="form-control" id="jdl_masalah" name="jdl_masalah" placeholder="Judul/Topik/Masalah" rows="5"></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label" for="dospem1">Dosen Pembimbing 1</label>
												<div class="col-md-6">
													<input id="dospem1" name="dospem1" type="text" placeholder="Dosen Pembimbing 1" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="dospem2">Dosen Pembimbing 2</label>
												<div class="col-md-6">
													<input id="dospem2" name="dospem2" type="text" placeholder="Dosen Pembimbing 2" class="form-control">
												</div>
											</div>

											<!-- Form actions -->
											<div class="form-group">
												<div class="col-md-4 widget-right">
													<button type="submit" class="btn btn-primary btn-md pull-right">Submit</button>
												</div>
												<div class="col-md-4 widget-right">
													<button type="submit" class="btn btn-danger btn-md pull-left">Reset</button>
												</div>
												<div class="col-md-4 widget-right">
													<!-- Trigger the modal with a button -->
													<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Detail Surat</button>

													<!-- Modal -->
													<div id="myModal" class="modal fade" role="dialog">
													  <div class="modal-dialog">

													    <!-- Modal content-->
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal">&times;</button>
													        <h4 class="modal-title">Detail Surat Izin Riset Survey/Konsultasi</h4>
													      </div>
													      <div class="modal-body">
													        <p>Some text in the modal.</p>
													      </div>
													      <div class="modal-footer">
													        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													      </div>
													    </div>

													  </div>
													</div>
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