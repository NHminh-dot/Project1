<?php 
	session_start();
	if (empty($_SESSION['ma_khach_hang'])) {
		header("Location:dang_nhap_kh.php");
		exit();
	}