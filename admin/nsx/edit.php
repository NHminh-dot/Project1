<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<?php 
	// require '../connect.php';
	$ma_nha_san_xuat = $_GET["ma_nha_san_xuat"];
	$query = "select * from nha_san_xuat where ma_nha_san_xuat=$ma_nha_san_xuat";
	$result = mysqli_query($con,$query);
	$rowNSX = mysqli_fetch_array($result);
?>
<body>
	<div>
		<form action="../admin/nsx/process_edit_nsx.php" method="post">
			<p>Mã nhà sản xuất:</p> 
			<input type="text" name="txt_ma_nha_san_xuat" readonly="readonly" value="<?php echo $rowNSX["ma_nha_san_xuat"]?>">
			<br>
			<p>Tên nhà sản xuất:</p>
			<input type="text" name="txt_ten_nha_san_xuat" value="<?php echo $rowNSX["ten_nha_san_xuat"]?>">
			<br>
			<p>Địa chỉ:</p>
			<input type="text" name="txt_dia_chi_nha_san_xuat" value="<?php echo $rowNSX["dia_chi"] ?>">
			<br>
			<p>Điện thoại:</p>
			<input type="text" name="txt_dien_thoai_nha_san_xuat" value="<?php echo $rowNSX["dien_thoai"] ?>">
			<br>
			<input type="submit" value="Edit">
		</form>
	</div>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>