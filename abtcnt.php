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
  <head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
    <style>

 
body{
  background-image: url("images/438394.jpg");
  background-size:1400px 600px;
  font-size: 20px;
  margin-top: -9px;
}
.g{
  background-color:  #ff944d;
    color: black;
    border-radius: 20px;
}
.abt{
  float: left;
  width: 650px;
  height: 500px;
  border-right: 2px solid black;
  margin-left: 5px;
  }
.cntct{
  float: right;
  width: 650px;
  margin-bottom: 16px;
}
div.cntct img{
  float: left;
  height: 70px;
  width: 70px;
}
div.dtls{
  float: right;
  margin-right: 350px;
  width: 200px;
}
    </style>
  </head>
  <body><b><br><br><div>
 <div class="abt">
<div><h1>  1. About this site</h1>
Traveller's Mate is the comprehensive guide to the country's best travel destinations. Traveller's Mate provides detailed and accurate travel content designed to inspire global travellers. It covers all aspects,from cities to airports,attractions to events. Updated every day by a dedicated global.</div>

<br>
<div>
<h1>2. Who we are</h1>
We are some individuals dedicated to provide you any information for travelling in Bangladesh. You can easily get to know about where to visit,where to stay,what to do and where to eat while travelling. We have been trying to make your trip more comfortable and enjoyable through our website.</div>
</div>
<div class="cntct">
  <div><img src="images/social_facebook_box_blue.png"></div><br>
  <div class="dtls">Find Us On Facebook</div>
</div> <br>
<div class="cntct">
  <div><img src="images/telephone-icon-png.png"></div><br>
  <div class="dtls">Call Us</div>
</div><br>
<div class="cntct">
  <div><img src="images/youtube.png"></div><br>
  <div class="dtls">Watch Recent Travel Videos</div>
</div> <br>
<div class="cntct">
  <div><img src="images/Twitter-icon.png"></div><br>
  <div class="dtls">Follow Us On Twitter</div>
</div><br>
<div class="cntct">
  <div><img src="images/gmail-icon-33.png"></div><br>
  <div class="dtls">Mail Us</div>
</div><br>
<div class="cntct">
  <div><img src="images/Instagram_logo_2016.svg.png"></div><br>
  <div class="dtls">Follow Us On Instragram</div>
</div>

</div>
</b>  </body>
</html>