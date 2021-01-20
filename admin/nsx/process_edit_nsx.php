<?php 
	require '../connect.php';
	$ma_nha_san_xuat = $_POST["txt_ma_nha_san_xuat"];
	$ten_nha_san_xuat = $_POST["txt_ten_nha_san_xuat"];
	$dia_chi = $_POST["txt_dia_chi_nha_san_xuat"];
	$dien_thoai = $_POST["txt_dien_thoai_nha_san_xuat"];
	$query = "update nha_san_xuat set ten_nha_san_xuat='$ten_nha_san_xuat', dia_chi='$dia_chi', dien_thoai='$dien_thoai' where ma_nha_san_xuat='$ma_nha_san_xuat'";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:../admin.php?case=8");
?>