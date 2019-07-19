<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] = "You are logged out";
header('Location: page-1.php');

?>