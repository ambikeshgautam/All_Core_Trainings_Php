<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername ,$username ,$password ,$dbname);
if($conn->connect_error){
    die("Failed Connection");
}else{
    // echo "connection is okay ...";

}

$sql = " SELECT  name,email,address FROM employee where email='giggooo111@gmail.com'";
$result = $conn->query($sql);

if($result->num_rows>0){
    //out data of each row 
    while($row = $result->fetch_assoc()){
        echo "Name :-".$row["name"]."Address:-".$row["address"]."Email".$row["email"];

    }
}else{
    echo "No data ..........";

}


?>






