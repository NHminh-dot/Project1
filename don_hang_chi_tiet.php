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
		.don_hang_chi_tiet{
			width: 100%;
			/*height: 300px;*/
			background-color: #F4F1F1;
			position: relative;
			margin-top: 20px;
		}
		.table_don_hang_chi_tiet{
			text-align: center;
			margin: auto;
			width: 100%;
		}	
	</style>
</head>
<body>
	<?php
		require 'connect.php';
		$ma_hoa_don = $_GET["ma_hoa_don"];
		$query = "select * from hoa_don_chi_tiet join san_pham on hoa_don_chi_tiet.ma_san_pham = san_pham.ma_san_pham where ma_hoa_don='$ma_hoa_don'";
		$result = mysqli_query($connect,$query);
	?>
	<div>
		<div class="don_hang_chi_tiet">
			<table border="1" cellspacing="0" cellpadding="0" class="table_don_hang_chi_tiet">
				<tr>
					<!-- <th>Mã hóa đơn</th> -->
					<th>Mã sản phẩm</th>
					<th>Ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Giá sản phẩm</th>
				</tr>
				<?php 
					while ($row_hoa_don_chi_tiet = mysqli_fetch_array($result)) {
				?>
				<tr>
					<!-- <td><?php echo $row_hoa_don_chi_tiet["ma_hoa_don"]; ?></td> -->
					<td><?php echo $row_hoa_don_chi_tiet["ma_san_pham"]; ?></td>
					<td><img style="max-width: 150px;" src="anh/<?php echo $row_hoa_don_chi_tiet["anh"] ?>"></td>
					<td><?php echo $row_hoa_don_chi_tiet["ten_san_pham"] ?></td>
					<td><?php echo $row_hoa_don_chi_tiet["so_luong"]; ?></td>
					<td><?php echo $row_hoa_don_chi_tiet["gia"]; ?></td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>
<?php 
	require_once 'footer.php';
?>