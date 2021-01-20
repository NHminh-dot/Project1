<?php 
$ma_san_pham = $_POST["txt_ma"];
$ten_san_pham = $_POST["txt_ten"];
$anh_moi = $_FILES["txt_anh_moi"];
$gia = $_POST["txt_gia"];
$kich_thuoc = $_POST["txt_kich_thuoc"];
$chat_lieu = $_POST["txt_chat_lieu"];
$tinh_trang_san_pham = $_POST['tinh_trang_san_pham'];
$mo_ta_chi_tiet = $_POST['txt_mo_ta_chi_tiet'];
if($anh_moi['size'] == 0) {
$ten_anh_moi = $_POST["txt_anh_cu"];
}
else{
	$thu_muc_anh = "../../../anh";
	$array = explode(".", $anh_moi['name']);
	$ten_anh_moi = strtotime("now").".".$array[1];

	$noi_chua_anh_moi = "$thu_muc_anh/$ten_anh_moi";
	move_uploaded_file($anh_moi["tmp_name"], $noi_chua_anh_moi);
}

require_once '../../connect.php';
$query = "update san_pham set
ma_san_pham = '$ma_san_pham',
ten_san_pham = '$ten_san_pham',
anh = '$ten_anh_moi',
gia = '$gia',
kich_thuoc = '$kich_thuoc',
chat_lieu = '$chat_lieu',
tinh_trang_san_pham = '$tinh_trang_san_pham'
where 
ma_san_pham = '$ma_san_pham'";
mysqli_query($con,$query);
mysqli_close($con);
header("Location:../../admin.php?case=4");
?>