<link rel="stylesheet" type="text/css" href="css/trangchu-slideshow.css">
<div class="slideshow">
	<div class="mySlides fade">
		<img src="anh/slide-thiet-ke-noi-that-2.jpg" alt="">
	</div>
	<div class="mySlides fade">
		<img src="anh/slide-thiet-ke-noi-that-3.jpg" alt="">
	</div>
	<!-- Next and previous buttons -->
	<a class="prev" onclick="">&#10094;</a></a>
	<a class="next" onclick="">&#10095;</a>
</div>
<br>
<!-- The dots/circles -->
<div style="text-align: center;">
	<span class="dot" onclick=""></span>
	<span class="dot" onclick=""></span>
</div>
<div id="contents_thiet_ke_noi_that">
	<div>
		
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