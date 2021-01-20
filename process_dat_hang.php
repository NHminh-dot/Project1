<?php 
require_once 'kiem_tra_dang_nhap_khach_hang.php';

$ten_nguoi_nhan = $_GET['ten_nguoi_nhan'];
$dia_chi_nguoi_nhan = $_GET['dia_chi_nguoi_nhan'];
$so_dien_thoai_nguoi_nhan = $_GET['sdt_nguoi_nhan'];

$ma_khach_hang = $_SESSION['ma_khach_hang'];

$tinh_trang_hd = 1;
require_once 'connect.php';
$sql = "select max(ma_hoa_don) from hoa_don";
$array = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($array);

$max_ma_hoa_don = $each['max(ma_hoa_don)'];
$ma_hoa_don = $max_ma_hoa_don+1;
$sql = "insert into hoa_don(ma_hoa_don,ma_khach_hang,thoi_gian,ten_nguoi_nhan,so_dien_thoai_nguoi_nhan,dia_chi_nguoi_nhan,tinh_trang_hd) values ('$ma_hoa_don','$ma_khach_hang',now(),'$ten_nguoi_nhan','$so_dien_thoai_nguoi_nhan','$dia_chi_nguoi_nhan','$tinh_trang_hd')";
mysqli_query($connect,$sql);

foreach ($_SESSION['gio_hang'] as $ma_san_pham => $san_pham) {
	$gia = $san_pham['gia'];
	$so_luong = $san_pham['so_luong'];
	$sql = "insert into hoa_don_chi_tiet(ma_hoa_don,ma_san_pham,so_luong,gia) 
	values ('$ma_hoa_don','$ma_san_pham','$so_luong','$gia')";
	mysqli_query($connect,$sql);
}
mysqli_close($connect);
header("Location:process_xoa_gio_hang.php");
?>