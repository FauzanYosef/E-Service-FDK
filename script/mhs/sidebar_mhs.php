
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<!-- <div class="logo"><a href="index.php" title=""><img src="img/logo_uin.png" alt="logo"></a></div> -->
				<a class="navbar-brand" href="#"><span>E-Service</span> FDK-UIN SGD</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="dash_mhs.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#pen_surat">
				<em class="fa fa-envelope">&nbsp;</em> Pengajuan Surat <span data-toggle="collapse" href="#pen_surat" class="icon pull-right"><em class="fa fa-arrow-circle-down"></em></span>
				</a>
				<ul class="children collapse" id="pen_surat">
					<li><a href="form_surat.php">
					<span class="fa fa-envelope-open">&nbsp;</span>Pengajuan Surat</a></li>
					<li><a href="form_sak.php">
					<span class="fa fa-envelope-open">&nbsp;</span>Aktif Kuliah</a></li>
                    <li><a href="form_skkb.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>SKKB</a></li>
                    <li><a href="form_observasi.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Observasi</a></li>
                    <li><a href="form_skripsi.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Bimbingan Skripsi</a></li>
                    <li><a href="form_penelitian.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Izin Penelitian</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>PKL</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>SKL</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>Legalisir Ijazah</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>Transkrip Nilai</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>Pengambilan Ijazah</a></li>
                    <li><a href="#">
                    <span class="fa fa-envelope-open">&nbsp;</span>SPMK</a></li>
				</ul>
			</li>
			<li><a href="../../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->