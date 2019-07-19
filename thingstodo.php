<?php
session_start();
include "database.php";

if(isset($_POST['res'])){
	session_start();
	$name = mysql_real_escape_string($_POST['name']);
	$type = mysql_real_escape_string($_POST['type']);
	$address = mysql_real_escape_string($_POST['address']);
   
    $sql = "insert into restaurant (name,type,address) 
                         values ('$name','$type','$address') ";
    mysql_query($sql);
   $_SESSION['name'] = $name;
   $_SESSION['type'] = $type;
    header('Location: restaurants.php');
}

?>