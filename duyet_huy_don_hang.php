<?php 
require  'connect.php';
	// print_r($_POST);
	// $listMaHoaDon = [];
	// foreach ($_POST as $key => $value) {
	// 	$listMaHoaDon = explode("_", $key);
	// 	$number = "tinhTrangHoaDon_".$listMaHoaDon[1];
	// 	$tinh_trang_hoa_don = $_POST[$number];
	// 	echo $tinh_trang_hoa_don;
	// 	$sql = "update hoa_don set tinh_trang_hd='$tinh_trang_hoa_don' where ma_hoa_don='$listMaHoaDon[1]'";
	// 	$result = mysqli_query($con,$sql);
	// }
	$ma_hoa_don = $_GET['ma_hoa_don'];
	$tinh_trang_hd = 0;
	$query = "update hoa_don
	set
	tinh_trang_hd='$tinh_trang_hd'
	where
	ma_hoa_don = '$ma_hoa_don'";
	mysqli_query($connect,$query);
	mysqli_close($connect);
	header("Location:lich_su_mua_hang.php");
?>