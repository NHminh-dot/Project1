<?php 
	require_once '../connect.php';
	// print_r($_POST);
	$listMaKhachHang = [];
	foreach ($_POST as $key => $value) {
		$listMaKhachHang = explode("_", $key);
		$number = "tinhTrangKhachHang_".$listMaKhachHang[1];
		$tinh_trang_khach_hang = $_POST[$number];
		echo $tinh_trang_khach_hang;
		$sql = "update khach_hang set tinh_trang_khach_hang='$tinh_trang_khach_hang' where ma_khach_hang='$listMaKhachHang[1]'";
		// print_r($sql);
		// die();
		$result = mysqli_query($con,$sql);
	}
	mysqli_close($con);
	header("Location:../admin.php?case=5"); //chua co thong bao da cap nhat thanh cong trong header
?>