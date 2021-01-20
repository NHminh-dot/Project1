<link rel="stylesheet" type="text/css" href="css/trangchu-slideshow.css">
<link rel="stylesheet" type="text/css" href="css/trangchu.css">	
	<div class="slideshow">
		<div class="mySlides fade">
			<img src="anh/1.jpg">
		</div>
		<div class="mySlides fade">
			<img src="anh/2.jpg">
		</div>
		<div class="mySlides fade">
			<img src="anh/3.jpg">
		</div>
		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<!-- The dots/circles -->
	<div style="text-align: center; margin-bottom: 50px;">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>
	<?php
		require_once 'connect.php';
		if (isset($_GET['search'])) {
			$search = $_GET['search'];
		}
		else{
			$search = "";
		}
		$sql = "select * from san_pham where ten_san_pham like '%$search'";
		// $result = mysqli_query($connect,$sql);
		// $sql = "select * from san_pham";
		$resultSp = mysqli_query($connect,$sql);

		// phân trang
		$products = mysqli_num_rows($resultSp);
		$products_in_one_page = 8;
		$page_numbers = ceil($products/$products_in_one_page);
		$page = 1;
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		$overlook = ($page - 1) * $products_in_one_page;
		$query = "$sql limit $products_in_one_page offset $overlook";
		$array = mysqli_query($connect,$query);
	?>
	<div id="contents">
		<div class="product">
			<div class="text-center">
				<ul>
					<!-- <li><a href="#">Mới nhất</a></li>
					<li><a href="#">Xem nhiều nhất</a></li> -->
					<li><a href="#">Sản phẩm</a></li>
				</ul>
			</div>
			<div class="list-product">
				<div id="home">
					<div class="show">
						<!-- ?case=10&&ma_san_pham=<?php echo $rowSp["ma_san_pham"]; ?> -->
						<?php foreach ($array as $each ): ?>
						<div class="card_row">
							<div class="card_col">
								<a href="xem_chi_tiet_san_pham.php?ma_san_pham=<?php echo $each['ma_san_pham']; ?>">
									<img class="card_item" src="anh/<?php echo $each['anh'] ?>" >
								</a>
								<div class="card_overlay">
									<div class="card_content">
										<table class="table_card_content" cellpadding="0" cellpadding="0">
											<tr>
												<td>
													<p class="card_header"><?php echo $each['ten_san_pham']; ?></p>
												</td>
												<td class="td_gia">
													<h2 class="card_text_gia"><?php echo $each['gia']; ?></h2>
													<h2 class="card_text_gia">VNĐ</h2>
												</td>
											</tr>
											<tr>
												<td>
													<p class="card_text_ma">Mã SP: <?php echo $each['ma_san_pham']; ?></p>		
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<!-- so trang -->
						<div class="product_page">
							<?php  
								for ($i=1; $i<=$page_numbers ; $i++) 
								{ 
							?>
								<a class="button_page" href="index.php?page=<?php echo $i ?>&search=<?php echo $search ?>">
									<h5><?php echo $i ?></h5>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div id="menu1">
					<div class="show">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
	<div id="du-an">
		<div class="du-an-customer">
			<div class="text-center">
				<ul>
					<li><a href="#">Dự án đã thực hiện</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="customer1">
					<div id="ctm-container">
						<div class="wrapper">
							<a href="#" title="Thiết kế nội thất căn hộ 81.7m2" class="w-center" style="opacity: 1; visibility: visible; transform: translateX(0px) translateZ(80px) rotateY(0deg); padding-top: 30px;">
								<img src="anh/du-an-imperia-sky-garden.jpg" alt title="Thiết kế nội thất căn hộ 81.7m2">
								<div class="member-home">
									<ul>
										<li></li>
										<li></li>
									</ul>
								</div>
							</a>
							<a href="#" title="" style="opacity: 1; visibility: visible; transform: translateX(350px) translateZ(-200px) rotateY(0deg); padding-top: 30px;" class="">
								<img src="anh/du-an-the-emerald-my-dinh.jpg" alt="">
								<div class="member-home">
									<ul>
										<li></li>
										<li></li>
									</ul>
								</div>
							</a>
							<a href="#" title="" style="opacity: 1; visibility: visible; transform: translateX(-350px) translateZ(-200px) rotateY(0deg); padding-top: 30px;" class="">
								<img src="anh/du-an-vinhomes-sky-lake.jpg" alt="">
								<div class="member-home">
									<ul>
										<li></li>
										<li></li>
									</ul>
								</div>
							</a>
						</div>
						<span class="w-prev" onclick="du_an(-1)">&#10094;</span>
						<span class="w-next" onclick="du_an(1)">&#10095;</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
	var slideIndex = 0;
	showSlides();
	// var slideShow = document.getElementById("slideshow");
	// document.getElementById("myDIV").style.zIndex = "-1";
	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 3000); // Change image every 2 seconds
	}
	// function plusSlides(n) {
	// 	showSlides(slideIndex += n);
	// }

	// function currentSlide(n) {
	// 	showSlides(slideIndex = n);
	// }
</script>
<!-- <script>
	var du_anIndex = 1;
	show_Du_An(du_anIndex);
	function du_an(n) {
		show_Du_An(du_anIndex += n);
	}
</script> -->