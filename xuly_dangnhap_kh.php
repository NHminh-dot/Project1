<?php 
 session_start();
 require 'connect.php';
 $email = $_POST['email'];
 $password = md5($_POST['pass']);
 $query = "select * from khach_hang where email='$email' and password='$password'";
 $result = mysqli_query($connect,$query);
 $count = mysqli_num_rows($result);
 $page = "";
 if ($count>0) {
 	$each = mysqli_fetch_array($result);
 	if ($each['tinh_trang_khach_hang'] == 1) {
 		$_SESSION["ten_khach_hang"] = $each["ten_khach_hang"];
 		$_SESSION["ma_khach_hang"] = $each["ma_khach_hang"];
 		$_SESSION["email"] = $email;
 		$page="index.php";	
 	}
 	else{
 		$page= "dang_nhap_kh.php?error1";
 	}
 }
 else{
 	$page = "dang_nhap_kh.php?error";
 }
 mysqli_close($connect);
 header("Location:$page");
?>