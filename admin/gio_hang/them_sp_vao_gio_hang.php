<?php 
	session_start();
	if (isset($_GET["ma"])) {
		$ma_san_pham = $_GET["ma"];
		if (isset($_SESSION["gio_hang"][$ma_san_pham])) {
			$_SESSION["gio_hang"][$ma_san_pham] ++;
		}
		else{
			$_SESSION["gio_hang"][$ma_san_pham] = 1;
		}
	}
	else{
		$_SESSION['gio_hang'] = array();
		$gio_hang = $_SESSION['gio_hang'];
		$gio_hang[$ma_san_pham] = 1;
	}
?>
<meta http-equiv="refresh" content="0,?case=31">