<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		require_once "../connect.php";
		$ma_khach_hang = $_GET["ma_khach_hang"];
		$query = "select * from khach_hang where ma_khach_hang='$ma_khach_hang'";
		$resultKh = mysqli_query($con,$query);
		$rowKh = mysqli_fetch_array($resultKh);
	?>
	<form action="?case=7" method="post">
		Mã khách hàng: <input type="text" readonly="readonly" name="txt_ma" value="<?php echo $rowKh["ma_khach_hang"]; ?>">
		<br>
		Tình trạng: 
		<select name="tinh_trang_kh" id="">
			<option value="1">Active</option>
			<option value="0">Inactive</option>	
		</select>
		<br>
		<input type="submit" value="Cập nhật">
	</form>
</body>
</html> -->