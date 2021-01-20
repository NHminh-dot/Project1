<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
</head>
<link rel="stylesheet" href="../css/admin-dang-nhap.css">
<body>
	<div id="login">
		<div id="login-err">
			<span></span>
			<span></span>
		</div>
		<div id="form-dang-nhap">
			<form action="xulydangnhap.php" method="post">
			<title>Đăng nhập</title>
			<p>Tên người dùng </p>
			<input type="text" name="txt_user" placeholder="Username" class="input">
			<br>
			<p>Mật khẩu</p>
			<input type="password" name="txt_pass" placeholder="Password" class="input">
			<br>
			<input type="submit" value="Đăng nhập" class="submit">
			</form>
		</div>
	</div>
</body>
</html>
