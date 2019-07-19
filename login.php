<?php
session_start();
include "database.php";
$username = $_POST['username'];
$password = $_POST['password'];


    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){
    if($row['username'] == $username && $row['password'] == $password)
  { 
      $_SESSION['username'] = $row['username'];
      header('Location:home.php');  
 }

     else{
     header('Location:page-1.php');
        }

    }



?>