<?php 
session_start();
unset($_SESSION['Uname']);
unset($_SESSION ['Pword']);
header('location:index.php');

?>