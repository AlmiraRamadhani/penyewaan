<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="assets/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<!-- SEARCH FORM -->

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
		</ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<!-- <a href="#" class="d-block"><?= $admin['name']; ?></a> -->
				</div>
			</div>
			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
					<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
					<li class="nav-header">Dashboard</li>
					<li class="nav-item">
						<a href="admin/dashboard.php" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt fa-fw"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
					<li class="nav-header">Data</li>
					<li class="nav-item">
						<a href="admin/user.php" class="nav-link">
							<i class="nav-icon far fa-clock fa-fw"></i>
							<p>
								Data User
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin/product.php" class="nav-link">
							<i class="nav-icon far fa-clock fa-fw"></i>
							<p>
								Data Produk
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin/customer.php" class="nav-link">
							<i class="nav-icon fas fa-users fa-fw"></i>
							<p>
								Data Customer
							</p>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="user" class="nav-link">
							<i class="nav-icon fas fa-user fa-fw"></i>
							<p>
								Comment User
							</p>
						</a>
					</li> -->
					<!-- <li class="nav-item">
					<a href="<?= base_url('chatbot/chat'); ?>" class="nav-link">
						<i class="nav-icon fas fa-comments fa-fw"></i>
						<p>
							History Chat
						</p>
					</a>
				</li> -->
					<li class="nav-item">
						<a href="admin/pertanyaan.php" class="nav-link">
							<i class="nav-icon fas fa-shopping-cart fa-fw"></i>
							<p>
								Pertanyaan
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin/transaksi.php" class="nav-link">
							<i class="nav-icon fas fa-shopping-cart fa-fw"></i>
							<p>
								Transaksi Penyewaan
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin/transaksi_history.php" class="nav-link">
							<i class="nav-icon fas fa-history fa-fw"></i>
							<p>
								History Penyewaan
							</p>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="<?= base_url('denda'); ?>" class="nav-link">
							<i class="nav-icon far fa-clock fa-fw"></i>
							<p>
								Denda
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('transport'); ?>" class="nav-link">
							<i class="nav-icon far fa-clock fa-fw"></i>
							<p>
								Transport
							</p>
						</a>
					</li> -->
					<li class="nav-item">
						<a href="admin/chabot_hitung.php" class="nav-link">
							<i class="nav-icon fas fa-history fa-fw"></i>
							<p>
								TF-IDF
							</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-pills nav-sidebar flex-column" role="menu">
					<li class="nav-header">User Settings</li>
					<li class="nav-item">
						<a href="registrasi.php" class="nav-link">
							<i class="nav-icon fas fa-user fa-fw"></i>
							<p>
								Register
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="changePassword.php" class="nav-link">
							<i class="nav-icon fas fa-user fa-fw"></i>
							<p>
								Ganti Password
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="logout.php" class="nav-link collapsed" data-toggle="modal" data-target="#logoutModal">
							<i class="nav-icon fas fa-sign-out-alt fa-fw"></i>
							<p>
								Logout
							</p>
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1><?= $title; ?></h1>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Title</h3>
					</div>
					<div class="card-body">
						Selamat Datang !
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->