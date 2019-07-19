<?php
session_start();
include "database.php";

if(isset($_POST['reg'])){
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
   
    $sql = "insert into user (username,email,password) 
                         values ('$username','$email','$password') ";
    mysql_query($sql);
   $_SESSION['username'] = $username;
   $_SESSION['password'] = $password;
    header('Location: page-1.php');
}

?>