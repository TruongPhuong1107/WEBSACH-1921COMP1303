<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1150px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.hh{
  color:black;
  text-align:center;
}
</style>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="sach/p1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="sach/p3.png" style="width:100%">
</div>



</div>
<br>
<h2 class ="hh" style="color: #264F73">Sản phẩm <br></h2>
<?php

foreach($rs as $r)
{ 
  
	$gia = number_format($r['GiaBan']);
	$chuoixuat = <<<EOD

<!--Một hàng hóa-->
<div class="hh-box">	
	<div class="hh-box-promotion"></div>
    <div class="hh-box-qua"></div>
	<a href="index.php?mod=Sach&act=ChiTiet&MaSach={$r['MaSach']}">
		<img src="sach/{$r['Hinh']}" class="hh-box-image">
	</a>
    
    <div class="hh-box-name" style="color:black">{$r['TenSach']}</div>
    <div class="hh-box-gia" style="color:black">{$gia} đ</div>
	<div class="hh-mua" masach="{$r['MaSach']}"></div>
</div>

<!--End Một hàng hóa-->
 
EOD;
	echo $chuoixuat;
}
?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
