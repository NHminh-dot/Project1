<?php 
	require '../connect.php';
	$ten_nha_san_xuat = $_POST["txt_ten_nha_san_xuat"];
	$dia_chi = $_POST["txt_dia_chi_nha_san_xuat"];
	$dien_thoai = $_POST["txt_dien_thoai_nha_san_xuat"];
	$query = "insert into nha_san_xuat(ten_nha_san_xuat,dia_chi,dien_thoai) values ('$ten_nha_san_xuat','$dia_chi','$dien_thoai')";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:../admin.php?case=8");
?>