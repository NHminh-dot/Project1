<?php 
	require '../connect.php';
	$ma_admin = $_GET["ma_admin"];
	$query = "delete from infor_admin where ma_admin='$ma_admin";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:thong-tin-chung.php");
?>