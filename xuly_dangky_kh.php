<?php 

$ten_khach_hang = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['pass']);
$gioi_tinh = $_POST['gioi_tinh'];
$so_dien_thoai = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];

require_once 'connect.php';
$sql = "insert into khach_hang(ten_khach_hang,gioi_tinh,email,so_dien_thoai,dia_chi,password)
values ('$ten_khach_hang','$gioi_tinh','$email','$so_dien_thoai','$dia_chi','$password')";
mysqli_query($connect,$sql);

mysqli_close($connect);
header('Location:dang_nhap_kh.php');
?>