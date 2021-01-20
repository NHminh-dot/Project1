<?php 
	require_once 'kiem_tra_dang_nhap_khach_hang.php';
?>
<?php 
	require_once 'header.php';
?>
<style>
	.form_gio_hang{
		width: 1350px;
		height: 300px;
		background-color: #F4F1F1;
		position: relative;
		margin-top: 20px;
	}
	.gio_hang{
		width: 70%;
		float: left;
		background-color: #fff;
	}
	.gio_hang a{
		text-decoration: none;
		color: black;
	}
	.gio_hang a:hover{
		color: blue;
	}
	.info_khach_hang{
		width: 30%;
		height: 200px;
		float: left;
		background-color: #fff;
	}
	.info_khach_hang input{
		height: 30px;

	}
	.info_khach_hang .btnSubmit{
		background-color: orange;
		width: 100%;
		border: none;
	}
	.info_khach_hang .btnSubmit:hover{
		transition: 1s ease;
		background-color: #CF8F05;
	}
	.table_gio_hang{
		width: 100%;
		text-align: center;
	}
	.btnSoLuong{
		padding: 5px;
		background-color: #F4F1F1;
	}
	.btnSoLuong:hover{
		transition: 0.5s ease;
		background-color: #C0C0C0;
	}
	.xoa_san_pham{
		padding: 5px;
		background-color: #F4F1F1;
	}
	.xoa_san_pham:hover{
		transition: 0.5s ease;
		background-color: #C0C0C0;
	}
	.div_khong_san_pham{
		position: absolute;
		top: 30%;
		left: 35%;
		width: 400px;
		height: 150px;
		/*background-color: green;*/
		text-align: center;
		box-sizing: border-box;
	}
	.khong_san_pham{
		font-size: 18px;
		font-family: sans-serif;
		width: 100%;
		color: #000;
	}
	.bam_vao_dat_hang{
		padding: 20px;
		text-decoration: none;
		color: orange;
		font-family: sans-serif;
		border: solid 1px orange;
		text-transform: uppercase;
	}
	.bam_vao_dat_hang:hover{
		background-color: #F3E1C9;
		transition: 1s ease;
	}
</style>

<div class="form_gio_hang">
<?php 
	// session_start();
	if (isset($_SESSION['gio_hang']) && count($_SESSION['gio_hang'])>0) {
		$array_gio_hang = $_SESSION['gio_hang'];
?>
<div class="gio_hang">	
<a href="index.php">Mua thêm hàng</a>
<table class="table_gio_hang" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Tên</th>
		<th>Ảnh</th>
		<th>Giá</th>
		<th>Số lượng</th>
		<th>Tông tiền</th>
		<th>Xóa sản phẩm trong giỏ hàng</th>
	</tr>
	<?php foreach ($array_gio_hang as $ma_san_pham => $san_pham): ?>
	<tr>
		<td>
			<?php echo $san_pham['ten_san_pham'] ?>
		</td>
		<td>
			<img style="max-width: 150px;" src="anh/<?php echo $san_pham['anh'] ?>">
		</td>
		<td>
			<?php echo $san_pham['gia'] ?> VNĐ
		</td>
		<td>
			<a class="btnSoLuong" href="thay_doi_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham ?>&kieu=tru">
				-
			</a>
			<input style="width: 20px; text-align: center;" type="text" readonly="readonly" value="<?php echo $san_pham['so_luong'] ?>">
			<a class="btnSoLuong" href="thay_doi_so_luong_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham ?>&kieu=cong">
				+
			</a>
		</td>
		<td>
			<?php echo $san_pham['so_luong'] * $san_pham['gia'] ?> VNĐ
		</td>
		<td>
			<a class="xoa_san_pham" href="xoa_san_pham_trong_gio_hang.php?ma_san_pham=<?php echo $ma_san_pham ?>">
				X
			</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<a href="process_xoa_gio_hang.php">
	Xóa giỏ hàng
</a>
</div>
<?php 
	$ma_khach_hang = $_SESSION['ma_khach_hang'];
	require_once 'connect.php';
	$sqlKhachHang = "select * from khach_hang where ma_khach_hang = '$ma_khach_hang'";
	$arrayKhachHang = mysqli_query($connect,$sqlKhachHang);
	$each = mysqli_fetch_array($arrayKhachHang);
?>
<form action="process_dat_hang.php">
	<div class="info_khach_hang">
		Tên người nhận:
		<input type="text" name="ten_nguoi_nhan" value="<?php echo $each['ten_khach_hang'] ?>">
		<br>
		Địa chỉ người nhận:
		<input type="text" name="dia_chi_nguoi_nhan" value="<?php echo $each['dia_chi'] ?>">
		<br>
		SĐT người nhận:
		<input type="text" name="sdt_nguoi_nhan" value="<?php echo $each['so_dien_thoai'] ?>">
		<br>
		<input class="btnSubmit" type="submit" value="Đặt hàng">
	</div>
</form>
<?php } else { ?>
	<div class="div_khong_san_pham">
		<p class="khong_san_pham">Không có sản phẩm nào trong giỏ hàng</p>
		<br>
		<a class="bam_vao_dat_hang" href="index.php">Bấm vào đây để đặt sản phẩm</a>
	</div>
<?php } ?>
</div>
<?php 
	require_once 'footer.php';
 ?>