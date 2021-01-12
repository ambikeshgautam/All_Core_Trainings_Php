<?php 
session_start();
session_destroy();
// unset($_SESSION['Uname']);this is used for destroy singal session 
header('location:index.php');

?>