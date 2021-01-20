<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="../../css/thong-tin-kh.css"> -->
<style>
	body *{margin: 0; padding: 0}
	.thong-tin-khach-hang{
		width: 100%;
	}
	.thong-tin-khach-hang #tab{
		background-color: #3550DB;
	}
	.thong-tin-khach-hang td{
		width: 120px;
		height: 50px;
		text-align: center;
	}
	.button_kh{
		color: #ffffff;
		padding: 5px 10px 5px 10px;
		background-color: #7274CB;
		transition: .3s ease-in-out;
	}
	.button_kh:hover{
		color: #FFFC00;
		font-weight: bold;
		padding: 10px;
		transition: .3s ease-in-out;
	}
</style>
<?php 
	// require '../connect.php';
	$query = "select * from khach_hang";
	$result = mysqli_query($con,$query);
?>
<body>
	<div>
		<form action="khach_hang/duyet_trang_thai_khach_hang.php" method="post">
		<table border="1" cellspacing="0" cellpadding="0" class="thong-tin-khach-hang">
			<tr id="tab">
				<th>Mã</th>
				<th>Họ tên</th>
				<th>Giới tính</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>password</th>
				<th>tinh_trang</th>
				<th>Tác vụ</th>
			</tr>
			<?php 
				while ($row = mysqli_fetch_array($result)) 
				{
			?>
			<tr>
				<td style="width: 50px;"><?php echo $row["ma_khach_hang"]; ?></td>
				<td style="width: 200px;"><?php echo $row["ten_khach_hang"]; ?></td>
				<td style="width: 110px;">
					<?php  
						if ($row["gioi_tinh"] == 0) {
							echo "Nữ";
						}
						else{
							echo "Nam";
						}
					?>	
				</td>
				<td style="width: 220px;"><?php echo $row["email"]; ?></td>
				<td><?php echo $row["so_dien_thoai"]; ?></td>
				<td><?php echo $row["password"]; ?></td>
				<td>
					<?php
						if ($row['tinh_trang_khach_hang'] == 1) {
						  	echo "Active";
						  }
						else{
							echo "InActive";
						}
					?>
				</td>
				<td>
					<select name="<?php echo "tinhTrangKhachHang_".$row['ma_khach_hang']; ?>">
						<option value="0" <?php if ($row['tinh_trang_khach_hang'] == '0') {
							echo "selected";
						} ?>>InActive</option>
						<option value="1" <?php if ($row['tinh_trang_khach_hang'] == '1') {
							echo "selected";
						} ?>>Active</option>
					</select>
				</td>
			</tr>
			<?php } ?>
		</table>
		<div style="width: 120px; height: 40px; float: left;">
				<input class="button_kh" type="submit" value="Cập nhật">
			</div>
		</form>
	</div>
<?php 
	mysqli_close($con);
?>
</body>
</html>
