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
  <meta charset="utf-8" />
        <meta name="author" content="Script Tutorials" />
        <title>Hotels</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

        <style>

 
body{
    background-image: url("images/438394.jpg");
    background-size:1400px 600px;
  color: black;
}
.container{
    font-size: 18px;
}
#w{
  font-size: 23px;
  color: black;
}
#search_text{
    height: 55px;
  width: 960px;
  font-size: 23px;
}
.e{
  background-color:  #ff944d;
    color: black;
    border-radius: 20px;
}

* {
    margin: 0;
    padding: 0;
}
html {
    background-color: #000;
}
.con {
    margin: 30px auto;
    width: 90%;
}

/* general styles */
.menu, .menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.menu {
    height: 58px;
}
.menu li {
    background: -moz-linear-gradient(#292929, #252525);
    background: -ms-linear-gradient(#292929, #252525);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #292929), color-stop(100%, #252525));
    background: -webkit-linear-gradient(#292929, #252525);
    background: -o-linear-gradient(#292929, #252525);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#292929', endColorstr='#252525');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#292929', endColorstr='#252525')";
    background: linear-gradient(#292929, #252525);

    border-bottom: 2px solid #181818;
    border-top: 2px solid #303030;
    min-width: 160px;
}
.menu > li {
    display: block;
    float: left;
    position: relative;
}
.menu > li:first-child {
    border-radius: 5px 0 0;
}
.menu a {
    border-left: 3px solid rgba(0, 0, 0, 0);
    color: #808080;
    display: block;
    font-family: 'Lucida Console';
    font-size: 18px;
    line-height: 54px;
    padding: 0 25px;
    text-decoration: none;
    text-transform: uppercase;
}

/* onhover styles */
.menu li:hover {
    background-color: #1c1c1c;
    background: -moz-linear-gradient(#1c1c1c, #1b1b1b);
    background: -ms-linear-gradient(#1c1c1c, #1b1b1b);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1c1c1c), color-stop(100%, #1b1b1b));
    background: -webkit-linear-gradient(#1c1c1c, #1b1b1b);
    background: -o-linear-gradient(#1c1c1c, #1b1b1b);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1c1c1c', endColorstr='#1b1b1b');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#1c1c1c', endColorstr='#1b1b1b')";
    background: linear-gradient(#1c1c1c, #1b1b1b);

    border-bottom: 2px solid #222222;
    border-top: 2px solid #1B1B1B;
}
.menu li:hover > a {
    border-radius: 5px 0 0 0;
    border-left: 3px solid #C4302B;
    color: #C4302B;
}

/* submenu styles */
.submenu {
    left: 0;
    max-height: 0;
    position: absolute;
    top: 100%;
    z-index: 0;

    -webkit-perspective: 400px;
    -moz-perspective: 400px;
    -ms-perspective: 400px;
    -o-perspective: 400px;
    perspective: 400px;
}
.submenu li {
    opacity: 0;

    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);

    -webkit-transition: opacity .4s, -webkit-transform .5s;
    -moz-transition: opacity .4s, -moz-transform .5s;
    -ms-transition: opacity .4s, -ms-transform .5s;
    -o-transition: opacity .4s, -o-transform .5s;
    transition: opacity .4s, transform .5s;
}
.menu .submenu li:hover a {
    border-left: 3px solid #454545;
    border-radius: 0;
    color: #ffffff;
}
.menu > li:hover .submenu, .menu > li:focus .submenu {
    max-height: 2000px;
    z-index: 10;
}
.menu > li:hover .submenu li, .menu > li:focus .submenu li {
    opacity: 1;

    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
}

/* CSS3 delays for transition effects */
.menu li:hover .submenu li:nth-child(1) {
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -ms-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
}
.menu li:hover .submenu li:nth-child(2) {
    -webkit-transition-delay: 50ms;
    -moz-transition-delay: 50ms;
    -ms-transition-delay: 50ms;
    -o-transition-delay: 50ms;
    transition-delay: 50ms;
}
.menu li:hover .submenu li:nth-child(3) {
    -webkit-transition-delay: 100ms;
    -moz-transition-delay: 100ms;
    -ms-transition-delay: 100ms;
    -o-transition-delay: 100ms;
    transition-delay: 100ms;
}
.menu li:hover .submenu li:nth-child(4) {
    -webkit-transition-delay: 150ms;
    -moz-transition-delay: 150ms;
    -ms-transition-delay: 150ms;
    -o-transition-delay: 150ms;
    transition-delay: 150ms;
}
.menu li:hover .submenu li:nth-child(5) {
    -webkit-transition-delay: 200ms;
    -moz-transition-delay: 200ms;
    -ms-transition-delay: 200ms;
    -o-transition-delay: 200ms;
    transition-delay: 200ms;
}
.menu li:hover .submenu li:nth-child(6) {
    -webkit-transition-delay: 250ms;
    -moz-transition-delay: 250ms;
    -ms-transition-delay: 250ms;
    -o-transition-delay: 250ms;
    transition-delay: 250ms;
}
.menu li:hover .submenu li:nth-child(7) {
    -webkit-transition-delay: 300ms;
    -moz-transition-delay: 300ms;
    -ms-transition-delay: 300ms;
    -o-transition-delay: 300ms;
    transition-delay: 300ms;
}
.menu li:hover .submenu li:nth-child(8) {
    -webkit-transition-delay: 350ms;
    -moz-transition-delay: 350ms;
    -ms-transition-delay: 350ms;
    -o-transition-delay: 350ms;
    transition-delay: 350ms;
}

.submenu li:nth-child(1) {
    -webkit-transition-delay: 350ms;
    -moz-transition-delay: 350ms;
    -ms-transition-delay: 350ms;
    -o-transition-delay: 350ms;
    transition-delay: 350ms;
}
.submenu li:nth-child(2) {
    -webkit-transition-delay: 300ms;
    -moz-transition-delay: 300ms;
    -ms-transition-delay: 300ms;
    -o-transition-delay: 300ms;
    transition-delay: 300ms;
}
.submenu li:nth-child(3) {
    -webkit-transition-delay: 250ms;
    -moz-transition-delay: 250ms;
    -ms-transition-delay: 250ms;
    -o-transition-delay: 250ms;
    transition-delay: 250ms;
}
.submenu li:nth-child(4) {
    -webkit-transition-delay: 200ms;
    -moz-transition-delay: 200ms;
    -ms-transition-delay: 200ms;
    -o-transition-delay: 200ms;
    transition-delay: 200ms;
}
.submenu li:nth-child(5) {
    -webkit-transition-delay: 150ms;
    -moz-transition-delay: 150ms;
    -ms-transition-delay: 150ms;
    -o-transition-delay: 150ms;
    transition-delay: 150ms;
}
.submenu li:nth-child(6) {
    -webkit-transition-delay: 100ms;
    -moz-transition-delay: 100ms;
    -ms-transition-delay: 100ms;
    -o-transition-delay: 100ms;
    transition-delay: 100ms;
}
.submenu li:nth-child(7) {
    -webkit-transition-delay: 50ms;
    -moz-transition-delay: 50ms;
    -ms-transition-delay: 50ms;
    -o-transition-delay: 50ms;
    transition-delay: 50ms;
}
.submenu li:nth-child(8) {
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -ms-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
}
.sort{
  float: center;
}

        </style>
    </head>
    <body>
<br>
<div class="sort">
    <div class="con" id="main" role="main">
            <ul class="menu">
               <h2>Sort Hotels By</h2>
                <li><a href="#s1">Name</a>
                    <ul class="submenu">
                        <li><a href="sort1.php">Ascending</a></li>
                        <li><a href="sort2.php">Descending</a></li>
                    </ul>
                </li>
                <li><a href="#s1">Class</a>
                    <ul class="submenu">
                        <li><a href="sort3.php">Ascending</a></li>
                        <li><a href="sort4.php">Descending</a></li>
                    </ul>
                </li>
                <li><a href="#s1">Price</a>
                    <ul class="submenu">
                        <li><a href="sort5.php">Ascending</a></li>
                        <li><a href="sort6.php">Descending</a></li>
                    </ul>
                </li>
            </ul>
        </div>
  </div>
  <br><br><br><br>
<div class="container">
   <br />
   <h2 align="center"></h2><br />
   <div class="form-group">
    <div class="input-group">
     <span id="w" class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  

    </body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"s4.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>