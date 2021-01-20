<!--  <?php 
session_start();
?> --> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/top-header.css">
	<link rel="stylesheet" href="css/logo.css">
	<link rel="stylesheet" href="css/tu-van-thiet-ke.css">
	<link rel="stylesheet" href="css/login_register.css">
<style>
	body{margin: 0px; padding: 0px;}	
</style>	
</head>
<body>
	<div id="header">
		<div id="top-header">
			<div id="logo-header">
				<a href="index.php"><img src="anh/logo.jpg" alt="homedesign"></a>
			</div>
			<div id="tim-kiem">
				<?php require_once 'tim-kiem.php'; ?>
			</div>
			<div id="tu-van-thiet-ke">
				<img src="anh/tuvanthietke.jpg">
			</div>
			<div id="login_register">
				<?php if (isset($_SESSION['ma_khach_hang'])) { ?>
					Xin chào: <?php echo $_SESSION['ten_khach_hang']; ?>
					&nbsp;
					<a href="dang-xuat.php">Đăng xuất</a>
			 	<?php } else { ?>
			 		<div class="dang_nhap_dang_ky">
			 		<a href="dang_nhap_kh.php">Đăng nhập</a>
					<a href="dang_ky_kh.php">Đăng ký</a>
					</div>
			 	<?php } ?>
			</div>
		</div>
		<div id="main-menu" style="width: 100%;">
			<?php require_once 'menu.php'; ?>
		</div>
	</div>