<?php 
	// session_start();
	if (!isset($_SESSION["username"]))
		header("Location:../../dang-nhap.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sản phẩm</title>
</head>
<style>
	/*body *{margin: 0; padding: 0;}*/
	#tab_sp{
		background-color: #3550DB;
	}
	.thong-tin-san-pham tr td{
		width: 200px;
		height: 50px;
		text-align: center;
	}
	.td_button{
		width: 100px;
	}
	.td_button div{
		margin: auto;
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
	.product_page{
		margin-top: 5px;
		width: 50px;
		height: 30px;
	}
	.button_page{
		text-decoration: none;
		margin:auto;
		color: black;
		box-sizing: border-box;
		border: 1px solid black;
		padding: 5px;
		background-color: #D6D257;
	}
</style>
<?php 
	// require '../../connect.php';
	if (isset($_GET["search"])) {
		$search = $_GET["search"];
	}
	else
	{
		$search = "";
	}
	$sql = "select * from san_pham where ten_san_pham like '%$search%'";
	$resultSp = mysqli_query($con,$sql);

	//phan trang
	$products = mysqli_num_rows($resultSp);
	$products_in_one_page = 5;
	$page_numbers = ceil($products/$products_in_one_page);
	$page = 1;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	$overlook = ($page - 1) * $products_in_one_page;
	$query = "$sql limit $products_in_one_page offset $overlook";
	$array = mysqli_query($con,$query);
?>
<body>
	<div>
		<table border="1" cellpadding="0" cellspacing="0" class="thong-tin-san-pham">
			<caption>
					<p>Thêm sản phẩm mới <a href="?case=13">tại đây !</a></p>
			</caption>
			<caption>
				<form action="san_pham/phong_khach/tim_kiem_san_pham_xu_ly.php" method="get">
					<input type="text" name="search" placeholder="search..."><input type="submit" value="Tìm kiếm">
				</form>
			</caption>
			
			<tr id="tab_sp">
				<th>Mã sản phẩm</th>
				<th>Nhà sản xuất</th>
				<th>Tên sản phẩm</th>
				<th>Ảnh</th>
				<th>Giá</th>
				<th>Kích thước</th>
				<th>Chất liệu</th>
				<th>Tình trạng</th>
				<!-- <th>Mô tả chi tiết</th> -->
				<th colspan="3">Tác vụ</th>
			</tr>
			<?php 
				while ($rowSp = mysqli_fetch_array($array)) {
			?>
			<tr>
				<td style="width: 150px;"><?php echo $rowSp["ma_san_pham"]; ?></td>
				<td style="width: 200px;">
					<?php echo $rowSp["ma_nha_san_xuat"]; ?>
				</td>
				<td style="width: 400px;"><?php echo $rowSp["ten_san_pham"]; ?></td>
				<td style="width: 150px;"><img style="max-width: 100px;" src="../anh/<?php echo $rowSp["anh"]; ?>"></td>
				<td style="width: 150px;"><?php echo $rowSp["gia"]; ?></td>
				<td style="width: 150px;"><?php echo $rowSp["kich_thuoc"]; ?></td>
				<td>
					<div style="overflow: scroll; height: 100px;">
						<?php echo $rowSp["chat_lieu"]; ?>							
					</div>
				</td>
				<td style="width: 200px;">
					<?php  
						if ($rowSp["tinh_trang_san_pham"] == 1){
							echo "Còn hàng";
						}
						else{
							echo "Hết hàng";
						}
					?>
				</td>
				<!-- <td>
					<div style="overflow: scroll; height: 100px;">
						<?php echo $rowSp["mo_ta_chi_tiet"]; ?>							
					</div>
				</td> -->
				<td class="td_button">
					<div style="width: 100px;">
						<a href="?case=10&&ma_san_pham=<?php echo $rowSp["ma_san_pham"]; ?>">
							<input type="button" class="button" value="Xem">
						</a>
					</div>
				</td>
				<td class="td_button">
					<div style="width: 100px;">
						<a href="?case=11&&ma_san_pham=<?php echo $rowSp["ma_san_pham"]; ?>">
							<input type="button" class="button" value="Sửa">
						</a>
					</div>
				</td>
				<td class="td_button">
					<div style="width: 100px;">
						<a href="?case=15&&ma_san_pham=<?php echo $rowSp["ma_san_pham"]; ?>">
							<input type="button" class="button" value="Xóa" onclick="return confirm('Chắc chắn xóa <?php echo $rowSp["ten_san_pham"]; ?>!');">
						</a>
					</div>
				</td>	
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="product_page">
		<?php  
			for ($i=1; $i<=$page_numbers ; $i++) 
			{ 
		?>
			<a class="button_page" href="?case=4&page=<?php echo $i ?>&search=<?php echo $search ?>">
				<?php echo $i ?>
			</a>
		<?php } ?>
	</div>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>