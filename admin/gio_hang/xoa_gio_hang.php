<?php 
	session_start();
	if (isset($_GET["ma"])) {
		unset($_SESSION["gio_hang"][$_GET['ma']]);
	}
?>
<meta http-equiv="refresh" content="0,?case=31">