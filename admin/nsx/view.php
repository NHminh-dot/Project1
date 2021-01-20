<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách nsx</title>
	<style>
		.thong-tin-khach-hang{
			width: 100%;
			text-align: center;
		}
		.thong-tin-khach-hang tr{
			height: 60px;
		}
		.thong-tin-khach-hang .tab_nsx{
			font-size: 18px;
			background-color: #3550DB;
		}
		.td_button{
			width: 100px;
		}
		.button{
			color: #ffffff;
			background-color: #7274CB;
			padding: 5px 15px 5px 15px;
			transition: .3s ease-in-out;
		}
		.button:hover{
			color: #FFFC00;
			font-weight: bold;
			padding: 10px 20px 10px 20px;
			transition: .3s ease-in-out;
		}
	</style>
</head>
<body>
	<?php 
		// require '../connect.php';
		$query = "select * from nha_san_xuat";
		$result = mysqli_query($con,$query);
	?>
	<table class="thong-tin-khach-hang" border="1" cellpadding="0" cellspacing="0">
		<caption><p>Thêm mới 1 nhả sản xuất mới <a href="?case=41"> tại đây !</a></p></caption>
		<tr class="tab_nsx">
			<th>Mã</th>
			<th>Tên</th>
			<th>Địa chỉ</th>
			<th>Điện thoại</th>
			<th colspan="2">Tác vụ</th>
		</tr>
		<?php 
			while ($rowNSX = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $rowNSX["ma_nha_san_xuat"]; ?></td>
			<td><?php echo $rowNSX["ten_nha_san_xuat"]; ?></td>
			<td><?php echo $rowNSX["dia_chi"]; ?></td>
			<td><?php echo $rowNSX["dien_thoai"]; ?></td>
			<td class="td_button">
				<div style="width: 100px;">
					<a href="?case=43&&ma_nha_san_xuat=<?php echo $rowNSX["ma_nha_san_xuat"]; ?>">
						<input type="button" class="button" value="Sửa">
					</a>
				</div>
			</td>
			<td class="td_button">
				<div style="width: 100px;">
					<a href="?case=9&&ma_nha_san_xuat=<?php echo $rowNSX["ma_nha_san_xuat"]; ?>" onclick="return confirm('Chắc chắn xóa!');">
						<input type="button" class="button" value="Xóa">
					</a>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>