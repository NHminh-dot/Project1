<link rel="stylesheet" href="css/footer.css">
<div id="footer">
	<table class="table_footer_content">
		<tr id="contain">
			<td><img src="anh/logo.jpg"></td>
			<td>
				<span class="service">Về chúng tôi</span>
			</td>
			<td>
				<span class="service">Khuyến mãi</span>
			</td>
			<td><span class="service">Dịch vụ khách hàng</span></td>
		</tr>
		<tr id="footer-contain">
			<td id="info">
				<ul>
					<li>Cửa hàng nội thất HOMEDESIGN</li>
					<li>Địa chỉ:</li>
					<li>Điện thoại:</li>
					<li>Hotline:</li>
					<li>Chăm sóc khách hàng:</li>
					<li>Email:</li>
					<li>Website:</li>
				</ul>
			</td>
			<td id="footer-link">
				<ul>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Hệ thống cửa hàng</a></li>
					<li><a href="#">Tin tức</a></li>
				</ul>
			</td>
			<td id="footer-link">
				<ul>
					<li><a href="#">Sản phẩm khuyến mãi</a></li>
					<li><a href="#">Tin tức khuyến mãi</a></li>
				</ul>
			</td>
			<td id="footer-link">
				<ul>
					<li><a href="#">Đổi hàng</a></li>
					<li><a href="#">Bảo hành/ Bảo trì</a></li>
					<li><a href="#">Bảo mật thông tin</a></li>
					<li><a href="#">Hỏi đáp</a></li>
				</ul>
			</td>
		</tr>
	</table>
		<div id="copy">
			<p>Copyright @ 2019 by HOMEDESIGN - All right</p>
		</div>
			<button id="go_top" onclick="topFunction()">
				Back to top
			</button>
</div>
</body>
</html>
<script type="text/javascript">
	var mybutton = document.getElementById("go_top");
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
</script>