<?php 
	session_start();
	if (!isset($_SESSION["username"]))
		header("Location:dang-nhap.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<link rel="stylesheet" href="../css/display-admin.css">
<body>
	<?php 
		require 'connect.php';
	 ?>
	<div id="div_tong">
		<div id="header.php">
			<div id="logo">
				<a href="#"><img src="../anh/logo.jpg"></a>
			</div>
			<div id="content">
				<div class="menubar">
					<ul>
						<li><a href="?case=1">Trang chủ</a></li>
						<li><a href="?case=2">Thông tin admin</a></li>
						<li><a href="?case=3">Nhà sản xuất</a></li>
						<li><a href="?case=4">Quản lý sản phẩm</a></li>
						<li><a href="?case=20">Quản lý đơn hàng</a>
							<!-- <div class="sub_menu">
							<ul>
								<li><a href="">Danh sách đơn hàng</a></li>
								<li><a href="">Thiết lập đơn hàng</a></li>
							</ul>
							</div> -->
						</li>
						<li><a href="?case=5">Quản lý khách hàng</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div id="your-infor">
						<table class="user-bar">
							<tr>
								<td class="user-bar-td">
									<p class="user">User: <?php print $_SESSION["username"]; ?></p>
								</td>
								<td>
						<p class="user"><a href="dang-xuat.php">Đăng xuất</a></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="content-over">
						<?php 
							if (isset($_GET['case'])) {
								$case_menu = $_GET['case'];
								switch ($case_menu) {
									case 1: require_once 'admin.php';
										break;
									case 2: include 'thong_tin_admin/index.php';
										break;
									case 3: include 'nsx/index.php';
										break;
									case 4: include 'san_pham/phong_khach/index.php';
										break;
									case 5: include 'khach_hang/index.php';
										break;
									case 6: include 'khach_hang/kich-hoat.php';
										break;
									case 7: include 'khach_hang/xu-ly-kich-hoat.php';
										break;
									case 8: include 'nsx/index.php';
										break;
									case 9: include 'nsx/delete.php';
										break;		
									case 10: include 'san_pham/phong_khach/view_chi_tiet.php';
										break;	
									case 11: include 'san_pham/phong_khach/update.php';
										break;
									case 12: include 'san_pham/phong_khach/index.php';
										break;
									case 13: include 'san_pham/phong_khach/insert.php';
										break;
									case 14: include 'san_pham/phong_khach/process_insert.php';
										break;
									case 15: include 'san_pham/phong_khach/delete.php';
										break;
									case 20: include 'hoa_don/index.php';
										break;
									case 21: include 'hoa_don/duyet_trang_thai.php';
										break;
									case 22: include 'hoa_don/hoa_don_chi_tiet.php';
										break;
									case 24: include 'hoa_don/duyet_trang_thai_xu_ly.php';
										break;				
									case 30: include 'gio_hang/them_sp_vao_gio_hang.php';
										break;
									case 31: include 'gio_hang/xem_gio_hang.php';
										break;
									case 32: include 'gio_hang/cap_nhat_gio_hang.php';break;
									case 33: include 'gio_hang/xoa_gio_hang.php';break;		
									case 41: include 'nsx/insert.php';
										break;
									case 42: include 'nsx/xuly-insert.php';
										break;		
									case 43: include 'nsx/edit.php';
										break;
									case 44: include 'nsx/xuly-edit.php';
										break;
									case 50: include 'thong_tin_admin/adEdit.php';
										break;
									case 51: include 'thong_tin_admin/adDelete.php';
										break;
									case 52: include 'thong_tin_admin/change-password.php';
										break;	
									case 54: include 'thong_tin_admin/xuly-adEdit.php';
										break;
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		// mysqli_close($con);
	?>
</body>
</html>