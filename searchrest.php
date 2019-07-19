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
    $query = "SELECT * FROM `restaurant` WHERE CONCAT(`id`, `name`,`type`,`address`) LIKE '%".$valueToSearch."%'";
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
        <title>SEARCH</title>
        <style>
            body{
    background-image: url("images/1355179868-rough-grey-tilable-pattern-for-website-background.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
  color: black;
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
 table,tr,th,td
            {
                border: 3px solid black;
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
  color: #999;
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

        </style>
    </head>
    <body>
        
 <div class="bar">       
   <form class="form-wrapper" action="searchrest.php" method="POST">
    <input type="search" id="search" name="valueToSearch" placeholder="Search for...">
    <input type="submit" name="search" value="Reset" id="submit">
     <input type="submit" name="search" id="submit" value="Search">
</form>
</div>
<div class="new">
     <table>
                <tr>
            <th>Id</th>            <th>Name</th>
             <th>Cuisine</th>
            <th>Address</th>
        
                </tr>   

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['address'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <br><br><br>
        </div>
    </body>
</html>