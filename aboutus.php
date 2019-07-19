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
    </style>
  </head>
  <body>
  <b>

<br><br><br><br><br><br>
<p><b>
<div><h1>  1. About this site</h1>
Traveller's Mate is the comprehensive guide to the country's best travel destinations. Traveller's Mate provides detailed and accurate travel content designed to inspire global travellers. It covers all aspects, from cities to airports, cruise ports to ski and beach resorts, attractions to events, and it also includes weekly travel news and features. Updated every day by a dedicated global.</div>
<br>

<div>
<h1>2. Who we are</h1>
We are dedicated to provide you any information for travelling in Bangladesh. You can easily get to know about where to visit,where to stay,what to do and where to eat while travelling. We have been trying to make your trip more comfortable and enjoyable through our website.</div>
</p>
</b>
  </body>
</html>