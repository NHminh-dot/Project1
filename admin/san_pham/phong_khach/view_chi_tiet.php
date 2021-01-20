<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body*{margin: 0; padding: 0}
		#div_tong_view_chi_tiet{
			width: 100%;
			/*height: 1000px;*/
		}
		#div_view_chi_tiet{
			width: 100%;
			height: 450px;
			margin: auto;
		}
		.row_left{
			text-align: center;
			width: 550px;
			float: left;
			border-right: 2px solid #AAA9A9;
		}
		.row_left img{
			max-width: 500px;
		}
		.row_right{
			float: left;
			margin-left: 10px;
		}
		.parameter{
			margin-bottom: 50px;
		}
		h1{
			font-size: 28px;
		}
		h2{
			font-size: 18px;
			font-weight: normal;
		}
		label{
			color: red;
			font-weight: bold;
			font-size: 20px;
		}
		span{
			font-weight: bold;
			font-size: 20px;
			margin-right: 15px;
		}
		.parameter li{
			position: relative;
			left: -7%;
			list-style-type: none;
			font-size: 18px;
		}
		.btn_mua_gio_hang{
			width: 500px;
		}
		.a{
			padding: 10px;
			margin-right: 10px;
			text-transform: uppercase;
			font-weight: bold;
			font-size: 20px;
			text-decoration: none;
		}
		.a:hover{
			padding: 15px;
			transition: .3s ease-in-out;
		}
		.content_mo_ta{
			width: 95%;
			/*position: absolute;*/
			bottom: 0;
		}
		.content_mo_ta h3{
			width: 250px;
			font-weight: normal;
			font-size: 26px;
			text-transform: uppercase;
			margin-bottom: -1px;
			border-bottom: 2px solid black;
		}
		.content_over{
			border-top: 1px solid #AAA9A9;
			padding-top: 20px;
		}
	</style>
</head>
<?php 
	// require '../../connect.php';
	$ma_san_pham = $_GET["ma_san_pham"];
	$query = "select * from san_pham where ma_san_pham='$ma_san_pham'";
	$resultSp = mysqli_query($con,$query);
	$rowSp = mysqli_fetch_array($resultSp);
?>
<body>
	<div id="div_tong_view_chi_tiet">
	<div id="div_view_chi_tiet">
		<div class="row">
			<div class="row_left">
				<img src="../anh/<?php echo $rowSp["anh"]; ?>" alt="">
			</div>
			<div class="row_right">
				<h1><?php echo $rowSp["ten_san_pham"]; ?></h1>
				<h2>Mã SP: <?php echo $rowSp["ma_san_pham"]; ?></h2>
				<h2>Mã NSX: <?php echo $rowSp["ma_nha_san_xuat"]; ?></h2>
				<label><?php echo $rowSp["gia"]; ?> VNĐ</label>
				<div class="parameter">
					<ul>
						<li>
							<span>Kích thước(cm):</span><?php echo $rowSp["kich_thuoc"]; ?>
						</li>
						<li>
							<span>Xuất xứ:</span>
							Khác
						</li>
						<li>
							<span>Chất liệu:</span>
							<?php echo $rowSp["chat_lieu"]; ?>
						</li>
					</ul>
				</div>
				<!-- <div class="btn_mua_gio_hang">
					<a class="a" style="background-color: #283BEF; color: white" href="../../hoa_don/tao_hoa_don.php?ma=<?php echo $rowSp["ma"]; ?>">Mua hàng</a>
					<a class="a" style="background-color: #D3F41C; color: blue" href="?case=30&&ma=<?php echo $rowSp["ma"]; ?>">Thêm vào giỏ hàng</a>
				</div> -->
			</div>
		</div>
	</div>	
<!-- 		<div class="content_mo_ta">
			<h3 style="padding-bottom: 5px;">Mô tả sản phẩm</h3>
			<div class="content_over">
				<?php echo $rowSp["mo_ta_chi_tiet"]; ?>
			</div>
		</div> -->
	</div>
	<?php 
		mysqli_close($con);
	?>
</body>
</html>
