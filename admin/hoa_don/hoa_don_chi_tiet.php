<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$ma_hoa_don = $_GET["ma_hoa_don"];
		$query = "select * from hoa_don_chi_tiet where ma_hoa_don='$ma_hoa_don'";
		$result = mysqli_query($con,$query);
	?>
	<div>
		<div>
			<table border="1" cellspacing="0" cellpadding="0">
				<tr>
					<th>Mã hóa đơn</th>
					<th>Mã sản phẩm</th>
					<th>Số lượng</th>
					<th>Giá sản phẩm</th>
				</tr>
				<?php 
					while ($row_hoa_don_chi_tiet = mysqli_fetch_array($result)) {
				?>
				<tr>
					<td><?php echo $row_hoa_don_chi_tiet["ma_hoa_don"]; ?></td>
					<td><?php echo $row_hoa_don_chi_tiet["ma_san_pham"]; ?></td>
					<td><?php echo $row_hoa_don_chi_tiet["so_luong"]; ?></td>
					<td><?php echo $row_hoa_don_chi_tiet["gia"]; ?></td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>