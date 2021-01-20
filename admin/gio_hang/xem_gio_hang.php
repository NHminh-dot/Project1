<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xem giỏ hàng</title>
</head>
<body>
	<form action="?case=32" method="post">
		<table border="1" cellspacing="0" cellpadding="0">
			<caption>Giỏ hàng</caption>
			<tr>
				<th>
					Mã sản phẩm
				</th>
				<th>
					Tên sản phẩm
				</th>
				<th>
					Giá
				</th>
				<th>
					Số lượng
				</th>
			</tr>
			<?php 
				if (isset($_SESSION['gio_hang'])) {
					$gio_hang = $_SESSION['gio_hang'];
			?>
			<?php 
				foreach ($gio_hang as $ma_san_pham => $so_luong) {
					$query = "select * from san_pham where ma='$ma_san_pham'";
					$result = mysqli_query($con,$query);
					$row = mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row["ma"]; ?></td>
				<td><?php echo $row["ten_sp"]; ?></td>
				<td><?php echo $row["gia"]; ?></td>
				<td><input type="text" name="arrSL[]" value="<?php echo $so_luong; ?>"></td>
				<td><a href="?case=33&&ma=<?php echo $row['ma']; ?>"><input type="button" class="button" value="Xóa"></a></td>
			</tr>
			<?php 
					} 
				?>
			<?php } ?>
		</table><br>
		<input type="submit" value="cập nhật">
	</form>
</body>
</html>