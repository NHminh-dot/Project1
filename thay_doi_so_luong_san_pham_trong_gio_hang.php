<?php
$ma_san_pham = $_GET['ma_san_pham'];
$kieu = $_GET['kieu'];

session_start();
if ($kieu =='tru') {
	if ($_SESSION['gio_hang'][$ma_san_pham]['so_luong']>1) {
			$_SESSION['gio_hang'][$ma_san_pham]['so_luong']--;
	}
	else {
		unset($_SESSION['gio_hang'][$ma_san_pham]);
	}
}
else {
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
}
header("Location:Xem_gio_hang.php");
// print_r($_SESSION['gio_hang']);
