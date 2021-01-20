<?php 
	require_once 'kiem_tra_dang_nhap_khach_hang.php';
?>
<?php 
	require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.view_kiem_tra_don_hang{
			width: 100%;
			/*height: 300px;*/
			background-color: #F4F1F1;
			position: relative;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.table_lich_su_mua_hang{
			width: 100%;
		}
		.table_lich_su_mua_hang td{
			width: 150px;
			text-align: center;
		}
		.table_lich_su_mua_hang tr{
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
<body>
	<?php
		require_once 'connect.php';
		// if (isset($_GET['ma_khach_hang'])) {
			$ma_khach_hang = $_SESSION['ma_khach_hang'];
			$query = "select * from hoa_don where ma_khach_hang = $ma_khach_hang";
			$array = mysqli_query($connect, $query);
		// }
	?>
	<div class="view_kiem_tra_don_hang">
		<table border="1" cellspacing="0" cellpadding="0" class="table_lich_su_mua_hang">
			<tr>
				<th>Mã hóa đơn</th>
				<th>Ngày</th>
				<th>Tình trạng đơn hàng</th>
				<th>Xem chi tiết</th>
				<th>Hủy đơn hàng</th>
			</tr>
		<?php foreach ($array as $each ): ?>
			<tr>
				<td><?php echo $each['ma_hoa_don'] ?></td>
				<td><?php echo $each['thoi_gian'] ?></td>
				<td>
					<input style="text-align: center;" type="text" readonly="readonly" id="tinh_trang_hd" value="<?php 
							if ($each["tinh_trang_hd"] == 1) {
									echo "Đang xử lý";
							}
							elseif ($each["tinh_trang_hd"] == 2) {
									echo "Đang giao hàng";
							}
							elseif ($each["tinh_trang_hd"] == 3) {
									echo "Đã giao hàng";
							}
							else{
									echo "Đã hủy đơn hàng";
							} 
						?>"
					>
				</td>	
				<td style="width: 200px;">
						<a href="don_hang_chi_tiet.php?ma_hoa_don=<?php echo $each['ma_hoa_don']; ?>">
							<input type="button" class="button_hd" value="Xem chi tiết">
						</a>
				</td>
				<td style=" width: 200px;">
					<a href="duyet_huy_don_hang.php?ma_hoa_don=<?php echo$each['ma_hoa_don']; ?>">
						<input id="btnHuy" type="button" class="button_hd" value="Hủy đơn hàng" name="" onclick="return confirm('Bạn có muốn xóa đơn hàng <?php echo $each['ma_hoa_don'] ?> !') "onclick="checkTinhTrang">
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</table>
	</div>
</body>
</html>
<?php 
	require_once 'footer.php';
?>
<script type="text/javascript">
	function checkTinhTrang() {
		var tinh_trang_hd = document.getElementById('tinh_trang_hd');
		var button = document.getElementById("btbHuy")
		if (tinh_trang_hd.value == 0) {
			button.type = "hidden";
		}
		else {
			button.type = "button";
		}
	}
</script>