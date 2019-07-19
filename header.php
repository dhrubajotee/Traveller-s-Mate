<!doctype html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="images/406667.png">
		<title>Traveller's Mate</title>
		<style>
			.logo{
				float: left;
        position: fixed;
			  }
        img{
          height:80px;
          width: 120px;
        }
    
    
 .topnav {
  overflow: hidden;
  background-color: #3399ff;
  border-radius: 15px;
  width: 68%;
  position: fixed;
  padding-top: 0px;
  float: right;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 20px 20px 20px 30px;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
}


.topnav a:hover {
  background-color: #b3b3ff;
  border-radius: 35px;
  border-left: 20px;
  border-top: 30px;
  margin: 10px;
  text-decoration: none;
  color: black;
}

.q {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 10px 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;
}

.q span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.q span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.q:hover span {
  padding-right: 10px;
}

.q:hover span:after {
  opacity: 1;
  right: 0;
}
.as{
  padding-left: 160px;
}
.full{
  background-image: url("images/1355179868-rough-grey-tilable-pattern-for-website-background.jpg");
  height: 82px;
  width: 100%;
  position: fixed;
  padding-top: 0px;
  top: 0;
  left: 0;
}
.date{
   /*text-shadow: 0 0 10px #fff,
0 0 20px #fff,
0 0 30px #fff,
0 0 40px #ff00de,
0 0 70px #ff00de,
0 0 80px #ff00de,
0 0 100px #ff00de,
0 0 150px #ff00de;*/
font-size: 25px;
color: white;
}
.style{
  background-color: #111;
  height: 30px;
  width: 100%;
  position: fixed;
}

		</style>
</head>

<body>
  <div class="full">
	<a  href="home.php"><img src="images/406667.png" class="logo"></a>
  <div class="as">
		<div style="font-family: Minion Web;" class="topnav">
  
  
  <a class="a" href="aboutbd.php">About Bangladesh</a>
  <a class="b" href="placestovisit.php">Places To Visit</a>
  <a class="d" href="restaurants.php">Restaurants</a>
  <a class="e" href="wheretostay.php">Where To Stay</a>
  <a class="f" href="contact.php">Contact</a>
   <!-- <form action="logout.php">
    <button class="q" onclick="logout.php"><span>Log Out</span></button> ->
    </form> --> 

</div>
</div>
</div>
<br><br><br><br>
<div class="style">
<marquee class="date" behavior="alternate"><b>
<?php
$date = date('d-m-y');
$time = date('H:i:s');
$day = date('l');
$now = time();
date_default_timezone_set('Asia/Dhaka');
$localtime_assoc = localtime($now,true);
$now_hr = sprintf('%02u',$localtime_assoc['tm_hour']-1);
$now_mn = sprintf('%02u',$localtime_assoc['tm_min']);
$now_sc = sprintf('%02u',$localtime_assoc['tm_sec']);
$now_tm = $now_hr.":".$now_mn.":".$now_sc;
echo ' '.$date.' '.$day.' '.$now_tm;
?></b></marquee>
</div>
  </body>
  </html>