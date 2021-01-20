<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hóa đơn</title>
	<style type="text/css">
		#hoa_don{
			width: 100%;
		}
		#hoa_don td{
			width: 150px;
			text-align: center;
		}
		#hoa_don tr{
			height: 50px;
		}
		.button_hd{
			color: #ffffff;
			background-color: #7274CB;
			padding: 5px 15px 5px 15px;
			transition: .3s ease-in-out;
		}
		.button_hd:hover{
			color: #FFFC00;
			font-weight: bold;
			padding: 10px 20px 10px 20px;
			transition: .3s ease-in-out;
		}
	</style>
</head>
<body onload="myFunction()">
	<?php
		$query = "select * from hoa_don";
		$resultHd = mysqli_query($con,$query);
	?>
<form action="hoa_don/duyet_trang_thai_xu_ly.php" method="post">	
	<div id="view_hoa_don">
		<div>
			<table border="1" cellpadding="0" cellspacing="0" id="hoa_don">
				<tr>
					<th>Mã hóa đơn</th>
					<th>Mã khách hàng</th>
					<th>Ngày</th>
					<th>Tên người nhận</th>
					<th>Số điện thoại người nhận</th>
					<th>Địa chỉ người nhận</th>					
					<th>Tình trạng hóa đơn</th>
					<th colspan="2">Tác vụ</th>
				</tr>
				<?php 
					while ($rowHd = mysqli_fetch_array($resultHd)) {
				?>
				<tr>
					<td style="width: 100px;"><?php echo $rowHd["ma_hoa_don"]; ?></td>
					<td><a href="?case="><?php echo $rowHd["ma_khach_hang"]; ?></a></td>
					<td><?php echo $rowHd["thoi_gian"]; ?></td>
					<td><?php echo $rowHd["ten_nguoi_nhan"]; ?></td>
					<td><?php echo $rowHd["so_dien_thoai_nguoi_nhan"]; ?></td>
					<td><?php echo $rowHd["dia_chi_nguoi_nhan"]; ?></td>
					<td>
						<?php 
							if ($rowHd["tinh_trang_hd"] == 1) {
								echo "Chưa xử lý";
							}
							elseif ($rowHd["tinh_trang_hd"] == 2) {
								echo "Đang xử lý";
							}
							elseif ($rowHd["tinh_trang_hd"] == 3) {
								echo "Đã xử lý";
							}
							else{
								echo "Đã hủy";
							}
						?>
					</td>
					<td style="width: 200px;">
							<select name="<?php echo "tinhTrangHoaDon_".$rowHd['ma_hoa_don']; ?>" id="mySelect" >
								<option value="1" <?php if ($rowHd["tinh_trang_hd"] == '1') {
									echo 'selected';
								} ?>>Chưa xử lý</option>
								<option value="2" <?php if ($rowHd["tinh_trang_hd"] == '2') {
									echo 'selected';
								} ?>>Đang xử lý</option>
								<option value="3" <?php if ($rowHd["tinh_trang_hd"] == '3') {
									echo 'selected';
								} ?>>Đã xử lý</option>
								<option value="0" <?php if ($rowHd["tinh_trang_hd"] == '0') {
									echo 'selected';
								} ?>>Đã hủy</option>
							</select>
						
					</td>
					<td style="width: 200px;">
						<a href="?case=22&&ma_hoa_don=<?php echo $rowHd["ma_hoa_don"]; ?>">
							<input type="button" class="button_hd" value="Xem chi tiết">
						</a>
					</td>
				</tr>
			<?php } ?>
			</table>
			<div style="width: 120px; height: 40px; float: left;">
				<input class="button_hd" type="submit" value="Cập nhật">
			</div>
		</div>
	</div>
</form>	
<script type="text/javascript">
	function myFunction() {
		var x = document.getElementById("mySelect").value;
		if (x == 3) {
			document.getElementById("mySelect").style.display = "none"
		}
		elseif(x == 2){
			document.getElementById('mySelect').value.display =  ;
		}
	}
</script>
</body>
</html>
