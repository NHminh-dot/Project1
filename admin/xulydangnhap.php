<?php 
	session_start();
	require 'connect.php';
	$user = $_POST['txt_user'];
	$pass = md5($_POST['txt_pass']);
	$query = "select * from admin where username='$user' and password='$pass'";
	$result = mysqli_query($con,$query);
	$count = mysqli_num_rows($result);
	$page = "";
	if ($count>0)
	{
		$_SESSION["username"]=$user;
		$page = "admin.php";	
	}
	else
	{
		$page = "dang-nhap.php";
	}
	mysqli_close($con);
	header("Location:$page");
?>