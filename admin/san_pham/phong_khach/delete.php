<?php 
// require '../../connect.php';
$ma_san_pham = $_GET["ma_san_pham"];
$query = "delete from san_pham where ma_san_pham = '$ma_san_pham'";
mysqli_query($con,$query);
mysqli_close($con);
header("Location:?case=4");
?>