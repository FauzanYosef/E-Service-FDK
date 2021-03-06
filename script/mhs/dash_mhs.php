<?php include 'header_mhs.php' ?>
<?php include 'sidebar_mhs.php' ?>	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="panel panel-default"> -->
						<div class="panel-body">
							<div >
								<h3><span class="fa fa-pencil">&nbsp;</span>Keterangan Status Layanan</h3>
							</div>
							<div class="col-md-6">
								<div>
									<span class="label label-info">Open</span>&nbsp;Permohonan Baru, belum diproses
								</div>
								<div>
									<span class="label label-warning">In Progress</span>&nbsp;Permohonan sedang di proses
								</div>
							</div>
							<div class="col-md-6">
								<div>
									<span class="label label-success">Done</span>&nbsp;Permohonan telah selesai
								</div>
								<div>
									<span class="label label-danger">Rejected</span>&nbsp;Permohonan ditolak
								</div>
							</div>
						</div>
					</div>
				<!-- </div> -->
			</div><!--/.row-->
		</div>
<!-- 		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
						<div class="panel-body">
							<div >
								<h3><span class="fa fa-envelope">&nbsp;</span>Keterangan Pengajuan Surat</h3>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</div>
			</div>
		</div> --><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Forms</div> -->
					<div class="panel-body">
						<div>
							<h3><span class="fa fa-envelope	">&nbsp;</span>Status Pengajuan Surat</h3>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover">
								<thead align="center">
									<tr>
										<th>No</th>
										<th>Nama Layanan</th>
										<th>Keperluan</th>
										<th>Tanggal Permohonan</th>
										<th>Status</th>
										<th>Pesan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Surat Aktif Kuliah</td>
										<td>Beasiswa</td>
										<td>26 Desember 2019</td>
										<td><button type="button" class="btn btn-sm btn-primary"><em class="fa fa-arrow-circle-right"> </em> Open</button></td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
<?php include 'footer_mhs.php'  ?>