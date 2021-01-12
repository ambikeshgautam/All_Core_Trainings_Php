<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connectiion is failed .....");
}else{
    //echo "connection is Okay";
}


$stmt = $conn->prepare("INSERT INTO `employee_address`(`email`,`fist_name`,`last_name`) VALUES ( ?, ?, ?)");
$stmt->bind_param("strings",'google@gmail.com','raju','bunty');
// set paramenter and execute 
$stmt->execute();
echo "new record is create is Successfully";

$stm->close();
$conn->close();

?>