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
        <title>
            About Bangladesh
        </title>
<style>

  body{
    background-image:url('images/rippled_wall_background_01_hd_pictures_169887.jpg'); 
    background-size:1400px 740px;
    color: black;
    font-size: 21px;
    margin-top: -17px;
}

.a{
    background-color:  #ff944d;
    color: white;
    border-radius: 20px;
}
h1{
    color: #5D3C2E;
    font-size: 30px;
}
.hp{
    font-size: 23px;
}

div.gallery {
    margin: 10px;
    margin-top: 40px;
    margin-bottom: 190px;
    float: left;
    width: 275px;
    height: 250px;
    padding: 5px;
    padding-left: 20px;
    background-image: url('imagesancient_ways_32453168623.jpg');
    background-size: 200px 100px;
}


div.gallery img{
    text-align: center;
    height: 230px;
    width: 280px;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 90px;
    border:3px solid black;
    
}

div.desc {
    padding-bottom: 1px;
    padding-top: 30px;
    margin-top: 5px;
    margin-left: 80px;
   text-align: center;
    font-size: 16px;
    font-color: white;
    width: 105px;
    height: 60px;
    border:4px solid black;
    border-radius: 190px;
    background-image: url('images/black-and-white-brick-wall-background-subway-tile-living.jpg');
     background-size: 290px 100px;
     font-weight: bold;
}

div.dtls{
  padding-left: 0px;
   text-align: center;
    font-size: 16px;
    font-weight: bold;

}
.n{
  float: left;
}
</style>
</head>
    
<body>

<div class="gallery">
  <div class="desc">Capital
  </div>
  <div class="dtls"><p><br>Dhaka<br><br><br><br></p></div>
  <div><img src="images/Dhaka_City_by_BlasphemedSoldier.jpg"></div>
</div>
<div class="gallery">
  <div class="desc">Identification
  </div>
  <div class="dtls"><p>"Bangladesh" is a combination of the Bengali words, Bangla and Desh, meaning the country or land where the Bangla language is spoken. The country formerly was known as East Pakistan.</p></div><div><img src="images/victory-day-of-bangladesh-hd-facebook-cover-photo-1.jpg"></div>
</div>
 <div class="gallery">
  <div class="desc">Demography
  </div>
  <div class="dtls"><p>Bangladesh is the most densely populated nonisland nation in the world with approximately 125 million inhabitants living in 55,813 square miles and 2,240 persons per square mile. 
</p></div><div><img src="images/population-growth-bangladesh.gif" style="height:230px; width: 255px;"></div>
</div>
<div class="gallery">
  <div class="desc">Area
  </div>
  <div class="dtls"><p><br>144,000 sq km<br><br><br></p></div><div><img src="images/Fig-1-The-total-available-land-area-of-Bangladesh-can-be-divided-into-4-distinct.png"></div>
</div>
<div class="gallery">
  <div class="desc">Population
  </div>
  <div class="dtls"><p> 156,050,883 (July 2009 est.)</p></div><div><img src="images/crowd.jpg"></div>
</div>
<div class="gallery">
  <div class="desc">Ethnic groups
  </div>
  <div class="dtls"><p> Bengali 98%, other 2% (includes tribal groups, non-Bengali Muslims) (1998)</p></div><div><img src="images/ethnic-groups.png"></div>
</div>
<div class="gallery">
  <div class="desc">Religions
  </div>
  <div class="dtls"><p>Muslim 89%, Hindu 10%, other 1% (1998)</p></div><div><img src="images/Bangladesh_religions.png"></div>
</div>
<div class="gallery">
  <div class="desc">Languages
  </div>
  <div class="dtls"><p>Bangla (official, also known as Bengali), English</p></div><div><img src="images/21-February-Ekushey-Wallpaper-rootsbd.com-33.jpg"></div>
</div>
<div class="gallery">
  <div class="desc">Government type
  </div>
  <div class="dtls"><p>Parliamentary Democracy</p></div><br><div><img src="images/0324.jpg"></div>
</div>
<div class="gallery">
  <div class="desc">Geographic Coordinates
  </div>
  <div class="dtls"><p>23 43 N, 90 24 E</p></div><br><div><img src="images/bangladesh-location-map.jpg"></div>
</div>
<div class="gallery">
  <div class="desc">Time Difference
  </div>
  <div class="dtls"><p>UTC+6 (11 hours ahead of Washington, DC during Standard Time)</p></div><div><img src="images/time zones.png"></div>
</div>
<div class="gallery">
  <div class="desc">Administrative Divisions
  </div>
  <div class="dtls"><p>7 divisions :  Barisal, Chittagong, Dhaka, Khulna, Rajshahi, Sylhet, Rangpur</p></div><div><img src="images/Bangladesh_divisions_bengali.png"></div>
</div>


<div class="n">
<b><div class="hp">
<p>
  <h1>Some of the better known spots are:</h1>Dhaka : The City of Mosques;<br> Chittagong : Gateway to the Bay of Bengal;<br> Cox's Bazar : The Tourist Capital;<br> Rangamati : The Heart of the Lake District;<br> Kaptai : The Lake Town;<br> Sylhet : Land of Two Leaves and a Bud;<br> Sundarban : Home of the Royal Bengal Tiger;<br>
Bandarban : The Hilly Resort;<br> Kuakata : Where the Sun Rises and Sets in the Sea;<br> Mainamati : Seat of Lost Dynasties; Mahasthangarh : The Ancient Seat of Buddhist Rule;<br> Rajshahi : The Silk Producing Centre;<br> Natore : Place of Dighapatiay Palace;<br> Paharpur : The Seat of Buddhist Learning;<br> Dinajpur : Old Ornamental Temple Town;<br> Mymensing : The Heart of Bengal's Folklore.
</p></div>
</b> 
</div>
</body>
</html>