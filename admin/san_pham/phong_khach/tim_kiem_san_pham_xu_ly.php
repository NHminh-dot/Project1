
<?php
include '../../connect.php'; 
if (isset($_GET["search"])) {
		$search = $_GET["search"];
	}
	else
	{
		$search = "";
	}
	$sql = "select * from san_pham where ten_san_pham like '%$search%'";
	$resultSp = mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location:../../admin.php?case=4&&search=$search");
	?>