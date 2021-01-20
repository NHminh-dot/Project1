<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
</head>
<link rel="stylesheet" href="css/css_dangnhap_kh.css" />
<body>
<form action="xuly_dangnhap_kh.php" method="post">
	<div class="banner">
		<div class="container">
	        <h1 align="center"> ĐĂNG NHẬP KHÁCH HÀNG</h1>
	        <hr />
	        <div>
	        	<span>
	        			<?php 
							if (isset($_GET['error'])) {
								echo "Đăng nhập sai";
							}
							elseif (isset($_GET['error1'])) {
								echo "Tài khoản bị khóa";	
							}
						?>
	        	</span>
	        </div>
	        <label for="email"><p>Email</p></label>
	        <input type="email" placeholder="Nhập địa chỉ email của bạn" id="email" name="email" required>
	        <label for="pass"><p>Mật khẩu</p></label>
	        <input type="password" placeholder="Nhập mật khẩu" id="pass" name="pass" required>
	        <br>
	        <br>
	        <button type="submit" class="signinbt ">ĐĂNG NHẬP</button>
	        </div>
	    </div>
    </div>
</form>
<!-- <script type="text/javascript">
	function kiem_tra(){
		var dem_kt = 0;
		//validate ho ten
		var regex_ho_ten = /^[A-Za-z\s]$/;
		var ho_ten = document.getElementById("ten");
		var err_ho_ten = document.getElementById("err_ten");
		var value_ho_ten = ho_ten.value;
		if(value_ho_ten.length == 0){
			err_ho_ten.innerHTML = " *Khong duoc de trong";
			dem_kt++;
		}
		else if (regex_ho_ten.test(value_ho_ten) == false){
			err_ho_ten.innerHTML = "chi duoc nhap chu cai va dau cach";
			dem_kt++;
		}
		else{
			err_ho_ten.innerHTML = "";
		}
		//validate dia chi
		var dia_chi = document.getElementById("dia_chi");
		var err_dia_chi = document.getElementById("err_dia_chi");
		var value_dia_chi = dia_chi.value;
		if(value_dia_chi.length == 0){
			err_dia_chi.innerHTML = " *Khong duoc de trong";
			dem_kt++;
		}
		else{
			err_dia_chi.innerHTML = "";
		}
		//validate so dien thoai
		var regex_sdt = /^0[0-9]{9}$/;
		var so_dien_thoai = document.getElementById("so_dien_thoai");
		var err_so_dien_thoai = document.getElementById("err_so_dien_thoai");
		var value_so_dien_thoai = so_dien_thoai.value;
		if(value_so_dien_thoai.length == 0){
			err_so_dien_thoai.innerHTML = " *Khong duoc de trong";
			dem_kt++;
		}
		else if(regex_sdt.test(value_so_dien_thoai) == false){
			err_so_dien_thoai.innerHTML = " *Phai nhap 10 so";
			dem_kt++;
		}
		else{
			err_so_dien_thoai.innerHTML = "";
		}
		
		if(dem != 0){
			err_nhom.innerHTML = "";
		}
		else{
			err_nhom.innerHTML = " *Phai chon";
			dem_kt++;
		}
		//kiem tra de return
		if(dem_kt == 0){
			return true;
		}
		else{
			return false;
		}
	}
</script> -->
</body>
</html>
