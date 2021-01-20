<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$ma_admin = $_GET["ma_admin"];
		$query = "select * from admin where ma_admin='$ma_admin'";
		$resultAdmin = mysqli_query($con,$query);
		$rowAdmin = mysqli_fetch_array($resultAdmin);
	?>
	<div>
		<form action="../admin/thong_tin_admin/xuly-adEdit.php" method="post">
			Mã admin: <input type="text" readonly="readonly" name="txt_ma_admin" value="<?php echo $rowAdmin["ma_admin"] ?>">
			<br>
			Tên admin: <input type="text" name="txt_ten_admin" value="<?php echo $rowAdmin["ten_admin"] ?>">
			<br>
			Email: <input type="text" name="txt_email_admin" value="<?php echo $rowAdmin["email"] ?>">
			<br>
			Số điện thoại: <input type="text" name="txt_so_dien_thoai" value="<?php echo $rowAdmin["so_dien_thoai"] ?>">
			<br>
			<input type="submit" value="Sửa">
		</form>
	</div>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>