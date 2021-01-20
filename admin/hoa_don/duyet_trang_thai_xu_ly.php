<?php 
include '../connect.php';
	print_r($_POST);
	$listMaHoaDon = [];
	foreach ($_POST as $key => $value) {
		$listMaHoaDon = explode("_", $key);
		$number = "tinhTrangHoaDon_".$listMaHoaDon[1];
		$tinh_trang_hoa_don = $_POST[$number];
		echo $tinh_trang_hoa_don;
		$sql = "update hoa_don set tinh_trang_hd='$tinh_trang_hoa_don' where ma_hoa_don='$listMaHoaDon[1]'";
		$result = mysqli_query($con,$sql);
	}
	mysqli_close($con);
	header("Location:../admin.php?case=20");
?>