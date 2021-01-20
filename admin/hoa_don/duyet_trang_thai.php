<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$ma = $_GET["ma_hd"];
		$query = "select * from hoa_don where ma_hd='$ma'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
	?>
	<form action="?case=24" method="post">
		Mã hóa đơn: <input type="text" readonly="readonly" name="txt_ma_hd" value="<?php echo $row["ma_hd"]; ?>">
		<br>
		Tình trạng:
		<select name="tinh_trang" id="">
			<option value="1">Chưa xử lý</option>
			<option value="2">Đang xử lý</option>
			<option value="3">Đã xử lý</option>
			<option value="0">Đã hủy</option>
		</select>
		<br>
		<input type="submit" value="Duyệt">
	</form>
</body>
</html> -->