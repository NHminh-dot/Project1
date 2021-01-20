<?php 
	// require '../connect.php';
	$ma_nha_san_xuat = $_GET["ma_nha_san_xuat"];
	$query = "delete from nha_san_xuat where ma_nha_san_xuat=$ma_nha_san_xuat";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:?case=8");
?>