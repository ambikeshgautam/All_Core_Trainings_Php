<?php
//===================================================PROCEDURAL APPROACH TO INSERT VALUE INTO DATABASE ==================================================
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "employee_database";

// $conn = mysqli_connect($servername,$username,$password,$dbname);
// if($conn){
//     // echo"connection is Okay !";
// }else{
//     echo "Error ....";

// }
// $sql = "INSERT INTO `employee_address`(`fist_name`, `last_name`, `email`) VALUES ('ambikesh','kumargautam','ambikeshgautam@gmail.com')";

// if(mysqli_query($conn,$sql)){
//     echo"Data insreted Successfully ";
// }else{
//     echo "Data is not inserted into database ";
// }
// $conn->close();
//===================================================OBJECT ORIENTED APPROACH TO INSERT VALUE INTO DATABASE ==================================================
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
 die ("connection is not created".mysqli_connection_error);

}else{
    // echo "connection is Okay ";
}
$u_name = "shekibma";
$u_email = "gmail@gmail.com";
$u_address = "Noida";

 $sql = "INSERT INTO `employee`(`name`, `email`, `address`) VALUES ('$u_name','$u_email','$u_address')";

if ($conn->query($sql) === TRUE ) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully".$last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//===================================================OBJECT ORIENTED APPROACH TO INSERT VALUE INTO DATABASE ==================================================




?>