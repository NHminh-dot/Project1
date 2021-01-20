<!-- <?php 
require_once 'connect.php';
if (isset($_GET['search'])) {
	$search = $_GET['search'];
}
else{
	$search = "";
}
$sql = "select * from san_pham where ten_san_pham like '%$search%'";
$resultSp = mysqli_query($connect,$sql);
mysqli_close($connect);
header("Location:index.php?search=$search");
?> -->