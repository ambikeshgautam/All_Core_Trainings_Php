<?php
//=============================================================PROCEDURAL APPROACH=========================================================================
// $servername = "localhost";
// $username ="root";
// $password = "";
// $dbname = "employee_database";

// //create connection 
// $conn = mysqli_connect($servername,$username,$password,$dbname);
// if($conn){
//     //echo "conneciotn is Okay !";
// }else{
//     echo"connection is failed ";
// }
// $sql = "CREATE TABLE employee_address(
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         fist_name VARCHAR(30) NOT NULL,
//         last_name VARCHAR(30) NOT NULL,
//         email VARCHAR(50)
// )";

// if(mysqli_query($conn,$sql)){
//     echo "table is created ";
// }else{
//     echo"Error....".mysqli_error($conn);
// }
//=============================================================OBJECT ORIENTED APPROACH=========================================================================

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    echo"Failed.....";
}else{
    // echo "Success !";
}
$sql = " CREATE TABLE employee_companylocation(
    id INT (7) AUTO_INCREMENT PRIMARY KEY,
    checkin_location VARCHAR (200),
    checkout_location VARCHAR(100),
    visite_date DATE,
    address_emp VARCHAR(200)

)";
if($conn->query($sql) == TRUE){

    echo"Table is created";
}else{

    echo "Failed !";
}



?>