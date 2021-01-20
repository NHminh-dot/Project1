<?php
	session_start();
	require '../connect.php';
	$oldPass = $_POST['txt_oldPass'];
	$newPass = md5($_POST['txt_newPass']);
	$query = "select * from admin where ma_admin";
	$result = mysqli_query($con,$query);
	$count = mysqli_num_rows($result);
	$page = "";
	if ($count>0) {	
		$each = mysqli_fetch_array($result);
		$_SESSION["ma_admin"] = $each["ma_admin"];
			$sql = "update admin set password='$newPass' where password='$oldPass'";
			$page = "../admin.php?case=2";
		}
		// else{
		// 	$page = "../admin.php?case=52";
		// }
	mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location:$page");
?>