<?php
//===================================================Procedural Approach=====================================================================
// $servername = "localhost";
// $username = "root";
// $password = "";

// //Create connection 
// $conn = mysqli_connect($servername,$username,$password);


// //check connnection
// if(!$conn){
//     die("Connetion failed : ".mysqli_connect_error());
// }else{
//     echo"Connected Successfully";
// }
// =======================================================OBJEST oriented Approach ============================================================

// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection

// $conn = new mysqli($servername,$username,$password);

// //Check Connection

// if($conn->connection_error){
//     die("Connection Failed :",mysqli_connect_error());
// }else{
//     echo"Connected Succefully";
// }
// =======================================================PDO Approach ============================================================
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;",$username,$password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully"; 
}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}



?>