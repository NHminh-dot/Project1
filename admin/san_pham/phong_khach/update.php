<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update sản phẩm</title>
</head>
<?php 
	// require '../../connect.php';
	$ma_san_pham = $_GET["ma_san_pham"];
	$query = "select * from san_pham where ma_san_pham='$ma_san_pham'";
	$resultSp = mysqli_query($con,$query);
	$rowSp = mysqli_fetch_array($resultSp);
?>
<body>
	<div>
	<form action="san_pham/phong_khach/process_update.php" method="post" enctype="multipart/form-data">
		Mã sản phẩm: <input type="text" readonly="readonly" name="txt_ma" value="<?php echo $rowSp["ma_san_pham"] ?>">
		<br>
		Tên sản phẩm: <input type="text" name="txt_ten" value="<?php echo $rowSp["ten_san_pham"] ?>">
		<br>
		Ảnh mới: <input type="file" name="txt_anh_moi" accept="images/*">
		Hoặc lấy ảnh cũ:
		<img src="../anh/<?php echo $rowSp["anh"] ?>" alt="" height="200">
		<input type="hidden" name="txt_anh_cu" value="<?php echo $rowSp["anh"] ?>">
		<br>
		Giá: <input type="text" name="txt_gia" value="<?php echo $rowSp["gia"] ?>">
		<br>
		Kích thước: <input type="text" name="txt_kich_thuoc" value="<?php echo $rowSp["kich_thuoc"] ?>">
		<br>
		Chất liệu: <input type="text" name="txt_chat_lieu" value="<?php echo $rowSp["chat_lieu"] ?>">
		<br>
		<!-- Mô tả chi tiết sản phẩm: <textarea name="txt_mo_ta_chi_tiet"><?php echo $rowSp["mo_ta_chi_tiet"] ?></textarea> -->
		<!-- <br> -->
		<select name="tinh_trang_san_pham" id="">
			<option value="1">Còn hàng</option>
			<option value="0">Hết hàng</option>
		</select>
		<br>
		<input style="padding: 10px" type="submit" value="Sửa">
	</form>
	</div>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>