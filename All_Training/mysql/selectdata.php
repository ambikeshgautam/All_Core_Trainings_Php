<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

$conn = new mysqli($servername ,$username ,$password ,$dbname);
if($conn->connect_error){
    die("Failed Connection");
}else{
    // echo "connection is okay ...";

}

//Select Data from the database
$sql = "SELECT email,fist_name, last_name FROM employee_address";
$result = $conn-> query($sql);
//=====================================================================THIS IS NORMAL PROCEDURE===================================================================
// $result = $conn->query($sql);

// if(mysqli_num_rows($result) > 0){
//      // output data of each row
//     //  while($row = mysqli_fetch_assoc($result)) {
//     //     echo "EmailId:-" . $row["email"]. " - Name: " . $row["fist_name"]. " " . $row["last_name"]. "<br>";
//     // }




// }
// else{
//     echo "0 results";
// }
//========================================================================THIS IS OBJECT ORIENTED PROCEDURE===================================================



if($result->num_rows > 0){
    echo "<table><tr><th>Email_id:-</th><th>Name</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["email"]."</td><td>".$row["fist_name"]." ".$row["last_name"]."</td></tr>";
    }
    echo "</table>";

}

//mysqli_close($conn);

?>