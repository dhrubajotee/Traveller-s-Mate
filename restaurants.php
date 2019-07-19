<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:page-1.php');
}
include('header.php');

?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "
  SELECT * FROM restaurant 
  WHERE name LIKE '%".$valueToSearch."%'
  OR type LIKE '%".$valueToSearch."%' 
  OR address LIKE '%".$valueToSearch."%'  
 ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `restaurant`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "signup");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<html>
    <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>CSS buttons with pseudo-elements</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS buttons with pseudo-elements" />
        <meta name="keywords" content="css, css3, pseudo, buttons, anchor, before, after, web design" />
        <meta name="author" content="Sergio Camalich for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <title>SEARCH</title>
        <style>
            body{
    background-image: url("images/rippled_wall_background_01_hd_pictures_169887.jpg");
    background-size:1400px 495px;
    color: #444;
    font: 'Helvetica Neue', helvetica, arial, sans-serif;
}
.star{
  width: 100px;
  height: 100px;
}
div{
  font-size: 20px;
}
.new{
    padding-top: 0px;
}
.d{
  background-color:  #ff944d;
    color: black;
    border-radius: 20px;
}
 
.form-wrapper {
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
}

.form-wrapper #search {
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
    height: 40px;
    padding: 10px;
    width: 450px;
}

.form-wrapper #search:focus {
    border-color: #aaa;
    -webkit-box-shadow: 0 1px 1px #bbb inset;
    -moz-box-shadow: 0 1px 1px #bbb inset;
    box-shadow: 0 1px 1px #bbb inset;
    outline: 0;
}

.form-wrapper #search:-moz-placeholder,
.form-wrapper #search:-ms-input-placeholder,
.form-wrapper #search::-webkit-input-placeholder {
    color: #999;
    font-weight: normal;
}

.form-wrapper #submit {
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

.form-wrapper #submit:hover,
.form-wrapper #submit:focus {
    background-color: #31b2c3;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
    background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
    background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form-wrapper #submit:active {
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    outline: 0;
}

.form-wrapper #submit::-moz-focus-inner {
    border: 0;
}
.bar{
    padding-top: 2px;
}

strong {
    font-weight: bold; 
}

em {
    font-style: italic; 
}

table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 18px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 1200px;
}   

th {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
    border-left: 1px solid #555;
    border-right: 1px solid #777;
    border-top: 1px solid #555;
    border-bottom: 1px solid #333;
    box-shadow: inset 0 1px 0 #999;
    color: #fff;
   font-weight: bold;
    padding: 10px 15px;
    position: relative;
    text-shadow: 0 1px 0 #000;  
}

th:after {
    background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
    content: '';
    display: block;
    height: 25%;
    left: 0;
    margin: 1px 0 0 0;
    position: absolute;
    top: 25%;
    width: 100%;
}

th:first-child {
    border-left: 1px solid #777;    
    box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
    box-shadow: inset -1px 1px 0 #999;
}

td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    transition: all 300ms;
}

td:first-child {
    box-shadow: inset 1px 0 0 #fff;
}   

td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
}   

tr {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:nth-child(odd) td {
    background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:last-of-type td {
    box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
    box-shadow: inset 1px -1px 0 #fff;
}   

tr:last-of-type td:last-child {
    box-shadow: inset -1px -1px 0 #fff;
}   

tbody:hover td {
    color: transparent;
    text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
    color: #444;
    text-shadow: 0 1px 0 #fff;
}



@charset "UTF-8";
/* CSS Document */

/*
DEMO 4
*/

.a_demo_four {
    background-color:#3bb3e0;
    font-family: 'Open Sans', sans-serif;
    font-size:17px;
    text-decoration:none;
    color:#fff;
    margin-left: 10px;
    margin-top: 400px;
    position:relative;
    padding:10px 20px;
    padding-right:50px;
    background-image: linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
    background-image: -o-linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(44,160,202) 0%, rgb(62,184,229) 100%);
    background-image: -webkit-gradient(
    linear,
    left bottom,
    left top,
    color-stop(0, rgb(44,160,202)),
    color-stop(1, rgb(62,184,229))
    );
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
    -moz-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
    -o-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
    box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
}

.a_demo_four:active {
    top:3px;
    background-image: linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
    background-image: -o-linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(62,184,229) 0%, rgb(44,160,202) 100%);
    background-image: -webkit-gradient(
    linear,
    left bottom,
    left top,
    color-stop(0, rgb(62,184,229)),
    color-stop(1, rgb(44,160,202))
    );
    -webkit-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
    -moz-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
    -o-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
    box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
}

.a_demo_four::before {
    background-color:#2591b4;
    background-image:url(images/right_arrow.png);
    background-repeat:no-repeat;
    background-position:center center;
    content:"";
    width:20px;
    height:20px;
    position:absolute;
    right:15px;
    top:50%;
    margin-top:-9px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
    -moz-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
    -o-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
    box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
}

.a_demo_four:active::before {
    top:50%;
    margin-top:-12px;
    -webkit-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
    -moz-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
    -o-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
    box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
}
h2{
    text-align: center;
    color: black;
    font-size: 35px;
    font-family: 'Open Sans', sans-serif;
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
   
    margin-left: 20px;
}
.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
  font-family: "Helvetica Neue", Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
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
.rowheader {
  font-weight: 600;
 background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
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
    <body>
        
 <div class="bar">       
   <form class="form-wrapper" action="restaurants.php" method="POST">
    <input type="search" id="search" name="valueToSearch" placeholder="Search for...">
    <input type="submit" name="search" value="Reset" id="submit">
     <input type="submit" name="search" id="submit" value="Search">
</form>
</div>
<section>
                <div id="container_buttons">
                    
                    <p>
                        <a href="regres.html" class="a_demo_four">
                            Update New Restaurant Information
                        </a>
                    </p>
                </div>
            </section>
            <h2>Restaurants</h2>
<div class="new">
     <table>
           <thead>
    <tr>
      <th>Name</th>
      <th>Cuisine</th>
      <th>Address</th>
    </tr>
  </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
    <td><strong><?php echo $row['name'];?></strong></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['address'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <br><br>
        </div>
<?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("rest.xml");
 
 $rootTag = $xml->getElementsByTagName("document")->item(0);
 
 $dataTag = $xml->createElement("data");
 
 $aTag = $xml->createElement("a",$_REQUEST['a']);
 $bTag = $xml->createElement("b",$_REQUEST['b']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
 
 $rootTag->appendChild($dataTag);
 
 $xml->save("rest.xml");
}

?>

<div class="bar">
<form class="form" action="restaurants.php" method="POST">
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
xmlhttp.open("POST","rest.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

document.write("<div class='wrapper'><table class='table'> <caption class='pcmn'>View Previous Comments</caption><br><tr class='rowheader'><td class='cellhus'>Username</td><td class='cellcm'>Comment</td></tr>");
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