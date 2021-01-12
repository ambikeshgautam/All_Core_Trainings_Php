<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
//=========================================================Procedural approach to create a batase=======================================================
// $conn = mysqli_connect($servername,$username,$password);
// if(!$conn){
//     die("connection is failed".mysqli-connect_error());
// }else{
    
//     // echo "Connection is Ok !";
// }

// $sql = "CREATE DATABASE student_database";

// if(mysqli_query($conn,$sql)){
//     echo "Database is created Successfully !";
// }else{
//     echo " Database is not create Eroor .........".mysqli_error($conn);
// }
//=========================================================Object oriented approach to create a batase=======================================================

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Connection is Failed ...".mysqli_error($conn));
}else{
    // echo "Connection is created successfully :-";
}

$sql = "CREATE DATABASE employee_database";

if($conn->query($sql)==TRUE){
    echo "Database is created Successfullly";
}else{
    echo"Database is not created Successfully ".mysqli_error();
}

?>