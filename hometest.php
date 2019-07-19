<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:page-1.php');
}
include('header.php');

?>
<!doctype html>
<html>
	<head>
		<title></title>
		<style>
body{
	background-image: url("images/rippled_wall_background_01_hd_pictures_169887.jpg");
  background-size:1300px 700px;
}
/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
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
  color: red;
  font-size: 22px;
  padding: 8px 12px;
  position: absolute;
  float: center;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
p{
  font-size: 24px;
  margin-left: 14px;
  margin-right: 14px;
}
h1{
   margin-left: 14px;
  margin-right: 14px;
  font-size: 27px;
}
.wrt{
  float: right;
  width: 500px;
  height: 500px;
  font-size: 20px;
}
.im{
  float: left;
  width: 600px;
  margin-right: 5px;
  height: 500px;
}

		</style>
	</head>
	<body><br><br>
 <br><div>
 <div class="wrt"><b>
  
Bangladesh is a land of scenic beauty. The country is blessed with natural beauty which attracts the tourists. It has longest beach in the world. It is proud of its beautiful heritage and historical relics. To make best use of the natural gift, the country has developed facilities of modern hotels, motels, rest houses, youth inns and restaurants, as well as modern modes of communication, are available at all tourist attractions.  </b> 
<br>
<b>
<h1>Location and Geography</h1>
 Bangladesh straddles the Bay of Bengal in south Asia. To the west and north it is bounded by India; to the southeast, it borders Myanmar. The topography is predominantly a low-lying floodplain.In the north and the southeast the land is more hilly and dry, and tea is grown. The Chittagong Hill Tracts have extensive hardwood forests. The vast river delta area is home to the dominant plains culture.  
</div></b>
<div class="im">
	<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 7</div>
    <img src="images/maxresdefault.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 7</div>
    <img src="images/720full-bangladesh.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 7</div>
    <img src="images/st3-806x393.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 7</div>
    <img src="images/beautiful_bangladesh_30.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 7</div>
    <img src="images/9ef8aaf7d726e860f66865482790ee16.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 7</div>
    <img src="images/Bangladesh-nature.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">7 / 7</div>
    <img src="images/St. Martin Coral Island-re.jpg" style="width:750px;height:450px;">
    <div class="text"></div>
  </div>
  
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  
 <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</div>
</div>

</body>
</html>