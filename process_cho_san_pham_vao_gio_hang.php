<?php 
	$ma_san_pham = $_GET['ma_san_pham'];

	//kiem tra tao gio hang
	session_start();
	if (!isset($_SESSION['gio_hang'])) {
		$_SESSION['gio_hang'] = [];
	}

	//khi co san pham
	if (isset($_SESSION['gio_hang'][$ma_san_pham])) {
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
	}
	else {
		require_once 'connect.php';
		$sql = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
		$array = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($array);

		$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham'] = $each['ten_san_pham'];
		$_SESSION['gio_hang'][$ma_san_pham]['anh'] = $each['anh'];
		$_SESSION['gio_hang'][$ma_san_pham]['gia'] = $each['gia'];
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong'] = 1;
		mysqli_close($connect);
	}
	header("Location:Xem_gio_hang.php");
	// print_r($_SESSION['gio_hang']);