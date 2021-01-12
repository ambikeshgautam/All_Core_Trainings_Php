<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

$conn = new mysqli($servername ,$username ,$password ,$dbname);

if($conn->connect_error){
    echo"Connection is failed ".$conn->error;
}else{
    // echo "Connection is okay";
    
}

$sql = " INSERT INTO `employee_database`(`fist_name`,`last_name`,`email`) VALUES ('4shashikant','4bharti','surya.indian321@gmail.com'),
('5shashikant','5bharti','surya.indian321@gmail.com')";
$sql = "INSERT INTO `employee_address`(`fist_name`, `last_name`, `email`) VALUES ('AMBIKESH','KUMARGAUTAM','ambikeshgautam597@gmail.com')";


if($conn ->multi_query($sql) == TRUE){
    echo "data inserted Success";
}else{
    echo"data is not inserted in database ".$sql."<br>".$conn->error;
}

?>