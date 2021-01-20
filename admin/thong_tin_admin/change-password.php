<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đổi mật khẩu</title>
</head>
<body>
	<?php 
		require '../connect.php';
		$ma_admin = $_GET["ma_admin"];
		$query = "select * from admin where ma_admin='$ma_admin'";
		$resultAdmin = mysqli_query($con,$query);
		$rowAdmin = mysqli_fetch_array($resultAdmin);
	?>
<div id="doi-mat-khau">
	<div id="form-doi-mat-khau">	
		<form action="../admin/thong_tin_admin/xuly-change-password.php" method="post">
			<div>
				<span>
					<?php 
						if (isset($_GET['error'])) {
							echo "Sai mật khẩu cũ";
						}
					?>
				</span>
			</div>
			<p>Mật khẩu cũ:</p>
			<input type="password" name="txt_oldPass">
			<br>
			<p>Mật khảu mới:</p>
			<input type="password" name="txt_newPass" required="required">
			<br>
			<input type="submit" value="Xác nhận">
		</form>
	</div>
</div>
<!-- <script type="text/javascript">
	function kiem_tra(){
		var dem_kt = 0;
		//validate ho ten
		var pass_word = document.getElementById("ten");
		var err_pass_word = document.getElementById("err_ten");
		var value_pass_word = pass_word.value;
		if(value_pass_word.length == 0){
			err_pass_word.innerHTML = " *Khong duoc de trong";
			dem_kt++;
		}
		else{
			err_pass_word.innerHTML = "";
		}
</script> -->
</body>
</html>