<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký tài khoản khách hàng</title>
</head>
<link rel="stylesheet" href="css/css_dangky_kh.css" />
<body>
<form action="xuly_dangky_kh.php" method="post">
	<div class="container">
        <h1 align="center"> ĐĂNG KÝ TÀI KHOẢN KHÁCH HÀNG</h1>
        <hr />

        <label for="name"><p>Tên khách hàng</p></label>
        <input type="text" placeholder="Nhập tên của bạn" id="name" name="name" required>
        <br>
        <!-- <label for="username"><p>Tên tài khoản</p></label>
        <input type="text" placeholder="Nhập tên tài khoản" id="username" name="username" required>
        <br> -->
        <label for="email"><p>Email</p></label>
        <input type="email" placeholder="Nhập địa chỉ email của bạn" id="email" name="email" required>
        <br>
        <label for="pass"><p>Mật khẩu</p></label>
        <input type="password" placeholder="Nhập mật khẩu" id="pass" name="pass" required>
        <br>
        <p>Giới tính</p>
        <input type="radio" name="gioi_tinh" id="nam" value="1" checked>
        <label for="nam"><b>Nam</b></label>
        <input type="radio" name="gioi_tinh" id="nu" value="0" >
        <label for="nu"><b>Nữ</b></label>
        <br>
        <label for="sdt"><p>Số điện thoại</p></label>
        <input type="text" placeholder="Nhập số điện thoại của bạn" id="sdt" name="sdt" required/>
        <br />
        <label for="dia_chi"><p>Địa chỉ</p></label>
        <input type="text" placeholder="Nhập địa chỉ" id="dia_chi" name="dia_chi" required/>
        <br>
        
        <div class="container2">
        <button type="reset" class="cancelbt ">HỦY ĐĂNG KÝ</button>
        <button type="submit" class="signupbt ">ĐĂNG KÝ</button>
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
        //validate de tai
        var de_tai = document.getElementById("de_tai");
        var err_de_tai = document.getElementById("err_de_tai");
        var value_de_tai = de_tai.value;
        if(value_de_tai == 0){
            err_de_tai.innerHTML = " *Phai chon";
            dem_kt++;
        }
        else{
            err_de_tai.innerHTML = "";
        }
        //validate nhom
        var nhom = Array();
        var err_nhom = document.getElementById("err_nhom");
        var dem = 0;
        nhom = document.getElementsByName("rbd_nhom");
        for(var i = 0;i<nhom.length;i++){
            if(nhom[i].checked){
                dem++;
            }
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
