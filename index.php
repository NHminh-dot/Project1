<?php 
	require_once 'header.php';
?>
<div style="background-color: #ffffff; width: 1350px; margin: 50px 0px;">
	<?php 
		require_once 'trangchu.php';
	?>
<!-- 	<?php 
		if (isset($_GET['case'])) {
			$case_menu = $_GET['case'];
			switch ($case_menu) {
				case 1: require_once 'trangchu.php';
					break;
				case 2: include 'phong-khach/index.php';
					break;
				case 20: include 'phong-khach/';
					break;
				case 70: include 'xem_chi_tiet_san_pham.php';	
					break;
			}
		}
	?> -->
</div>
<?php 
	require_once 'footer.php';
?>
<?php 
	require 'connect.php';
?>
<?php 
 mysqli_close($connect);
?>