<?php
$con = mysql_connect("localhost","root","");
if($con){
    mysql_select_db("signup",$con);
   // echo "database connected<br>";
}

?>