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
	background-image: url("images/tumblr_oiwyu3PV5S1tf8vylo1_1280.png");
  background-size:1400px 100%;
}
.b{
  background-color:  #ff944d;
    color: black;
    border-radius: 20px;
}
a{
	font-size: 22px;
	color: black;
	text-decoration: none;
}
a:hover{
	color: red;
}
h1{
	font-size: 28px;
}
div.gallery {
    margin: 30px;
    float: left;
    width: 355px;
    height: 345px;
    padding: 10px;
    border:4px solid #666;
    background-image: url('images/rippled_wall_background_01_hd_pictures_169887.jpg');
    background-size: 470px 370px;
}


div.gallery img {
    width: 355px;
    height: 270px;
}

div.desc {
    padding: 0px;
    text-align: center;
    font-size: 20px;
    font-color: black;
}
div.dtls{
  padding: 0px;
   text-align: center;
    font-size: 15px;

}

.form {
    background-color: #f6f6f6;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
    background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: linear-gradient(top, #f6f6f6, #eae8e8);
    border-color: #dedede #bababa #aaa #bababa;
    border-style: solid;
    border-width: 1px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    margin: 100px auto;
    overflow: hidden;
    padding: 8px;
    width: 450px;
    float: left;
    margin-left: 15px;
}

.form #search {
    border: 1px solid #CCC;
    -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: black;
    
    font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
    height: 70px;
    padding: 05px;
    width: 450px;
    margin-bottom: 10px;
}

.form #search:focus {
    border-color: #aaa;
    -webkit-box-shadow: 0 1px 1px #bbb inset;
    -moz-box-shadow: 0 1px 1px #bbb inset;
    box-shadow: 0 1px 1px #bbb inset;
    outline: 0;
}

.form #search:-moz-placeholder,
.form #search:-ms-input-placeholder,
.form #search::-webkit-input-placeholder {
    color: #999;
    font-weight: normal;
}

.form #submit {
    background-color: #0483a0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
    background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
    background-image: linear-gradient(top, #31b2c3, #0483a0);
    border: 1px solid #00748f;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    color: #fafafa;
    cursor: pointer;
    height: 28px;
    float: right;
    font: 15px Arial, Helvetica;
    padding: 0;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
    width: 90px;
}
.form #usnm {
    border: 1px solid #CCC;
    -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  color: black;
    float: left;
    font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
    height: 45px;
    padding: 10px;
    width: 250px;
    margin-bottom: 10px;
}

.form #submit:hover,
.form #submit:focus {
    background-color: #31b2c3;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
    background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
    background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form #submit:active {
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    outline: 0;
}

.form #submit::-moz-focus-inner {
    border: 0;
}
.bar{
    padding-top: 2px;
}
.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
  font-family: "Helvetica Neue", Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  float: left;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;

}

.table {
  margin: 0 0 40px 0;
  width: 900px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}
.row:nth-of-type(odd) {
  background: #e9e9e9;
}
.row.header {
  font-weight: 600;
  color: #ffffff;
  background: #ea6153;
  font-size: 30px;
}
.cellcm{
    width: 300px;
    margin-left: 20px;
    text-align: center;
}
.cellhus{
    width: 150px;
    text-align: center;
    height: 30px;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 8px 0;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
  margin-left: 5px;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 12px;
    display: block;
  }
}
.cellname{
      padding: 6px 12px;
  display: table-cell;
  margin-left: 5px;
  color: blue;
  font-weight: bold;
}
.pcmn{
    font-size: 30px;
    margin-bottom: 10px;
}

		</style>
	</head>
	<body><br>
<b>
<h1>Bangladesh is a well adorned place of tourist spots. Here are some most popular places to visit in Bangladesh</h1>

<br>
<div class="gallery">
  <a href="museum.html">
    <img src="images/59231255.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="museum.html">National Museum</a>
  </div>
  <div class="dtls"><p>The Bangladesh National Museum, originally established on 20 March 1913, albeit under...</p></div>
</div>
<div class="gallery">
  <a href="lalbag.html">
    <img src="images/Lalbagh-Fort.jpg"  width="300" height="200">
  </a>
  <div class="desc"><a href="lalbag.html">Lalbag Fort</a></div>
  <div class="dtls"><p>Lalbagh Fort is an incomplete 17th century Mughal fort complex that stands before the Buriganga...</p></div>
</div>
<div class="gallery">
  <a href="prl.html">
    <img src="images/9269792.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="prl.html">Jatiya Sangsad</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="son.html">
    <img src="images/8436620506_c4e9568ff7_b.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="son.html">Sonargaon</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="lib.html">
    <img src="images/leberation-war-museum-in-dhaka.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="lib.html">Liberation War Museum</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="novo.html">
    <img src="images/novo-theatre-sidewalk.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="novo.html">Novotheatre</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="bot.html">
    <img src="images/2369.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="bot.html">National Botanical Garden</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="map.html">
    <img src="images/Bangladesh_national_zoo.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="map.html">Mirpur National Zoo</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="bai.html">
    <img src="images/Baitul-Mukarram-mosque-Dhaka-Bangladesh-1.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="bai.html">Baitul Mukarram Mosque</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="dhak.html">
    <img src="images/dhakeshwari-temple.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="dhak.html">Dhakeshwari Temple</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="ahsan.html">
    <img src="images/Ahsan_Manzil-Front_View.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="ahsan.html">Ahsan Manzil</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="bald.html">
    <img src="images/2012-02-22-14-35e.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="bald.html">Baldha Garden</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="g.html">
    <img src="images/Gurudwara_Nanak_Shahi,_Dhaka.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="g.html">Gurdwara Nanak Shahi</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="shan.html">
    <img src="images/8d2b4a1aaa83609965dd1c21ec6e4bed.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="shan.html">Shankhari Bazar</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="bk.html">
    <img src="images/Curzon_Hall_-_Northern_Facade_-_University_of_Dhaka_-_Dhaka_2015-05-31_1992.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="bk.html">Curzon Hall</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="d.html">
    <img src="images/stock-photo-66906055.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="d.html">Drik Gallery</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="ac.html">
    <img src="images/girja-arm7.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="ac.html">Armenian Church</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>
<div class="gallery">
  <a href="ck.html">
    <img src="images/nimtali.jpg"  width="800" height="500">
  </a>
  <div class="desc"><a href="ck.html">Boro & Choto Katra</a></div><div class="dtls"><p>The Jatiya Sangsad, often referred to simply as the Sangsad and also known as the House of the Nation...</p></div>
</div>

<?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("stay.xml");
 
 $rootTag = $xml->getElementsByTagName("document")->item(0);
 
 $dataTag = $xml->createElement("data");
 
 $aTag = $xml->createElement("a",$_REQUEST['a']);
 $bTag = $xml->createElement("b",$_REQUEST['b']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
 
 $rootTag->appendChild($dataTag);
 
 $xml->save("stay.xml");
}

?>
<br>
<div class="bar">
<form class="form" action="placestovisit.php" method="POST">
 <input type="text" name="a" id="usnm" placeholder="Enter Username">
 <input type="text" name="b" id="search" placeholder="Type Comment">
 <input type="submit" id="submit" name="ok" value="comment">
</form>
</div>
<script type="text/javascript">
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("POST","stay.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

document.write("<div class='wrapper'><table class='table'> <caption class='pcmn'>View Previous Comments</caption><tr class='row header'><td class='cellhus'>Username</td><td class='cellcm'>Comment</td></tr>");
var x=xmlDoc.getElementsByTagName("data");
for (i=0;i<x.length;i++)
  {
  document.write("<tr class='row'><td class='cellname'>");
  document.write(x[i].getElementsByTagName("a")[0].childNodes[0].nodeValue);
  document.write("</td><td class='cell'>");
  document.write(x[i].getElementsByTagName("b")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table></div>");
</script>

	</body>
</html>