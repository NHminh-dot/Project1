<?php 
$ma_san_pham = $_GET['ma_san_pham'];
session_start();
unset($_SESSION['gio_hang'][$ma_san_pham]);
header("location:Xem_gio_hang.php");