<?php
	$ma_admin = $_POST["txt_ma_admin"];
	$ten_admin = $_POST["txt_ten_admin"];
	$email = $_POST["txt_email_admin"];
	$so_dien_thoai = $_POST["txt_so_dien_thoai"];

	require '../connect.php';
	$query = "update admin set 
	ten_admin = '$ten_admin', 
	email = '$email', 
	so_dien_thoai = '$so_dien_thoai' 
	where 
	ma_admin = '$ma_admin'";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:../admin.php?case=2");
?>