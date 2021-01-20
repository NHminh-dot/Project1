<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style>
body *{margin: 0; padding: 0};
.thong-tin-admin{
	width: 100%;
}
.thong-tin-admin tr td{
	text-align: center;
	width: 120px;
	height: 50px;
}
.button{
	color: #ffffff;
	background-color: #7274CB;
	padding: 5px 15px 5px 15px;
}
.button:hover{
	color: #FFFC00;
	font-weight: bold;
	padding: 9px 20px 9px 20px;
	transition: .3s ease-in-out;	
}
.td_ma{
	width: 40px;
}
</style>
<?php 
	$query = "select * from admin";
	$result = mysqli_query($con,$query);
?>	
<table border="1" cellpadding="0" cellspacing="0" class="thong-tin-admin">
	<tr id="tab">
		<th>Mã</th>
		<th>Họ tên</th>
		<th>Email</th>
		<th>Số điện thoại</th>
		<th>Username</th>
		<th>Password</th>
		<th colspan="3">Tác vụ</th>
	</tr>
	<?php while ($rowAdmin = mysqli_fetch_array($result)) 
		{	
	?>
	<tr>
		<td class="td_ma"><?php echo $rowAdmin["ma_admin"]; ?></td>
		<td style="width: 140px;"><?php echo $rowAdmin["ten_admin"]; ?></td>
		<td style="width: 215px;"><?php echo $rowAdmin["email"]; ?></td>
		<td><?php echo $rowAdmin["so_dien_thoai"]; ?></td>
		<td><?php echo $rowAdmin["username"]; ?></td>
		<td>
			<input style="width: 110px; height: 26px; text-align: center;" type="password" value="<?php echo $rowAdmin["password"]; ?>" readonly="readonly" id="password"> <input type="checkbox" onclick="showPassfunction()"> Show Password
		</td>
		<td style="width: 100px;"><a href="?case=50&&ma_admin=<?php echo $rowAdmin["ma_admin"]; ?>"><input type="button" class="button" value="Sửa"></a></td>
		<td style="width: 100px;"><a href="?case=51&&ma_admin=<?php echo $rowAdmin["ma_admin"]; ?>"><input type="button" class="button" value="Xóa" onclick="return confirm('Chắc chắn xóa!');"></a></td>
		<td style="width: 170px;"><a href="?case=52&&ma_admin=<?php echo $rowAdmin["ma_admin"]; ?>"><input type="button" class="button" value="Đổi mật khẩu"></a></td>
	</tr>
	<?php } ?>
</table>
<?php 
	mysqli_close($con);
?>
</body>
</html>
<script type="text/javascript">
	function showPassfunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } 
	  else {
	    x.type = "password";
	  }
	}
</script>