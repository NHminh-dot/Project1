<?php 
	// require '../../connect.php';
	$ma_san_pham = $_POST["txt_ma_san_pham"];
	$ma_nha_san_xuat = $_POST["select_ma_nha_san_xuat"];
	$ten_san_pham = $_POST["txt_ten_san_pham"];
	$anh = $_FILES["txt_anh_san_pham"];
	$gia = $_POST["txt_gia"];
	$kich_thuoc = $_POST["txt_kich_thuoc"];
	$chat_lieu = $_POST["txt_chat_lieu"];

	// Phần upload ảnh
	$thu_muc_anh = "../anh";
	$array = explode('.', $anh['name']);
	$ten_anh_moi = strtotime("now").".".$array[1];

	$noi_chua_anh_moi = "$thu_muc_anh/$ten_anh_moi";
	move_uploaded_file($anh["tmp_name"], $noi_chua_anh_moi);

	$query = "insert into san_pham(ma_san_pham,ma_nha_san_xuat,ten_san_pham,anh,gia,kich_thuoc,chat_lieu) values ('$ma_san_pham','$ma_nha_san_xuat','$ten_san_pham','$ten_anh_moi','$gia','$kich_thuoc','$chat_lieu')";
	mysqli_query($con,$query);
	mysqli_close($con);
	header("Location:?case=4");
?>